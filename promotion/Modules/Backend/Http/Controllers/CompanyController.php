<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use DB;
class CompanyController extends Controller
{
    // load user index
    public function index()
    {
        $data['companies'] = DB::table('companies')
            ->get();
        return view('backend::companies.index', $data);
    }
    // function to load create user form
    public function create()
    {
        return view('backend::companies.create');
    }
    // save user
    public function save(Request $r)
    {
        $data = array(
            'comName' => $r->name,
            'description' => $r->description,
            'createDate' => "2019-12-18 00:00:00",
            'img' => "image"
        );
       
        if($r->photo)
        {
            $data['photo'] = $r->file('image')->store('uploads/companies', 'custom');
        }
        $i = DB::table('companies')->insert($data);
        if($i)
        {
            $r->session()->flash('success', 'Data has been saved!');
            return redirect('backend/company/create');
        }
        else{
            $r->session()->flash('error','Fail to save data, please check again!');
            return redirect('backend/company/create')->withInput();
        }
    }

       //delete user
       public function delete(Request $r)
       {
           DB::table('companies')
               ->where('comId', $r->comId)
               ->delete();
           $r->session()->flash('success', 'Data has been removed!');
           return redirect('backend/company');
       }
    //    show for edit
    public function edit(Request $r)
    {
        $data['companies'] = DB::table('companies')
            ->where('comId', $r->comId)
            ->get();
        return view('backend::companies.edit', $data);
    }

    public function update(Request $r) {
        $data = array(
            'comName' => $r->name,
            'description' => $r->description,
            'createDate' => "2015-12-18 00:00:00",
            'img' => "image"
        );
        $i = DB::table('companies')
        ->where('comId', $r->comId)
        ->update($data);
        return redirect('backend');
    }


    // user logout
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
