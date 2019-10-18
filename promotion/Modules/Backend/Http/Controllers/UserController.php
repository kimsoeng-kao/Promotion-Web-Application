<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use DB;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // load user index
    public function index()
    {
        $data['users'] = DB::table('users')
            ->get();
        return view('backend::users.index', $data);
    }
    // function to load create user form
    public function create()
    {
        return view('backend::users.create');
    }
    // save user
    public function save(Request $r)
    {
        // $data = $r->except('_token', 'cpass');
        // print_r($data);
        $data = array(
            'name' => $r->name,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'username'=> $r->username
        );
        if($r->password!=$r->cpass)
        {
            $r->session()->flash('error', "Password and confirm password is not matched");
            return redirect('backend/user/create')->withInput();
        }
        if($r->photo)
        {
            $data['photo'] = $r->file('photo')->store('uploads/users', 'custom');
        }
        $i = DB::table('users')->insert($data);
        if($i)
        {
            $r->session()->flash('success', 'Data has been saved!');
            return redirect('backend/user/create');
        }
        else{
            $r->session()->flash('error','Fail to save data, please check again!');
            return redirect('backend/user/create')->withInput();
        }
    }

    //delete user
    public function delete(Request $r)
    {
        DB::table('users')
            ->where('id', $r->id)
            ->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/user');
    }
    // user logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
