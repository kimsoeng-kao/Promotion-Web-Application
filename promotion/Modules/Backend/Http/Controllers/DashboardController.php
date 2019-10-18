<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //load view dashboards
    public function index(){
        return view('backend::dashboard');
    }
}
