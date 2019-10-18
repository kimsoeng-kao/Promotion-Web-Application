<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontController extends Controller
{
    public function index()
    {
        $data['promotions'] = DB::table('promotions')
            ->join('companies', 'promotions.comId', '=', 'companies.comId')
            ->select('promotions.*', 'companies.comName')
            ->orderBy('promotions.startProDate', 'desc')
            ->get();
        return view('index', $data);
    }
    public function fashion(){
        $data['promotions'] = DB::table('promotions')
        ->join('companies', 'promotions.comId', '=', 'companies.comId')
        ->select('promotions.*', 'companies.comName')
        ->where('promotions.catId', 1)
        ->orderBy('promotions.startProDate', 'desc')
        ->get();
        return view("index",$data);
    }

    public function foodAndDrink(){
        $data['promotions'] = DB::table('promotions')
        ->join('companies', 'promotions.comId', '=', 'companies.comId')
        ->select('promotions.*', 'companies.comName')
        ->where('promotions.catId', 2)
        ->orderBy('promotions.startProDate', 'desc')
        ->get();
        return view("index",$data);
    }

    public function electronic(){
        $data['promotions'] = DB::table('promotions')
        ->join('companies', 'promotions.comId', '=', 'companies.comId')
        ->select('promotions.*', 'companies.comName')
        ->where('promotions.catId', 3)
        ->orderBy('promotions.startProDate', 'desc')
        ->get();
        return view("index",$data);
    }

    public function brand(){
        $data['companies'] = DB::table('companies')
        ->orderBy('companies.createDate', 'desc')
        ->get();
        return view("components/brand",$data);
    }
    public function details($proId){
         $data['promotion'] = DB::table('promotions')
         ->join('companies', 'promotions.comId', '=', 'companies.comId')
         ->select('promotions.*', 'companies.comName')
         ->where('proId','=', $proId)
         ->get();
        return view("components/details",$data);
    }
    public function brandDetails($comId){
        $data['promotions'] = DB::table('promotions')
            ->join('companies', 'promotions.comId', '=', 'companies.comId')
            ->select('promotions.*', 'companies.comName')
            ->where('promotions.comId', $comId)
            ->orderBy('promotions.startProDate', 'desc')
            ->get();

         $data['company'] = DB::table('companies')
         ->where('comId','=', $comId)
        ->get();

        return view("components/brandDetails",$data);
    }
}
