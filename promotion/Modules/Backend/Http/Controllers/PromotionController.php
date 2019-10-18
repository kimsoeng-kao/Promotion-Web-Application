<?php
namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Auth;
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['promotions'] = DB::table('promotions')
            ->get();
        return view('backend::promotions.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $data['companies'] = DB::table('companies')
            ->get();
        $data['categories'] = DB::table('categories')
            ->get();
        return view('backend::promotions.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function save(Request $re)
    {
        $disPrice = (($re->price)*($re->rateDiscount))/100;
        $balance = ($re->price) - $disPrice;
        $data = array(
            'proTitle' => $re->proTitle,
            'description' => $re->description,
            'startProDate' => $re->startProDate,
            'createdDate' => "2019-01-27 10:28:55",
            'endProDate'=> $re->endProDate,
            'price'=> $re->price,
            'balance'=> $balance,
            'rateDiscount'=> $re->rateDiscount,
            'catId'=> $re->catId,
            'comId'=> $re->comId,
            'img'=> "img"
        );
        // if($re->photo)
        // {
        //     $data['img'] = $re->file('img')->store('uploads/promotions', 'custom');
        // }
        $i = DB::table('promotions')->insert($data);
        if($i)
        {
            $re->session()->flash('success', 'Data has been saved!');
            return redirect('backend/promotion/create');
        }
        else{
            $re->session()->flash('error','Fail to save data, please check again!');
            return redirect('backend/promotion/create')->withInput();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function details(Request $r)
    {
        $data['promotion'] = DB::table('promotions')
        ->where('proId', $r->id)
        ->get();
        $data['companies'] = DB::table('companies')
            ->get();
        $data['categories'] = DB::table('categories')
            ->get();
        return view('backend::promotions.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Request $r)
    {
        $data['promotion'] = DB::table('promotions')
        ->where('proId', $r->id)
        ->get();
        $data['companies'] = DB::table('companies')
            ->get();
        $data['categories'] = DB::table('categories')
            ->get();
        return view('backend::promotions.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $re)
    {
        $disPrice = (($re->price)*($re->rateDiscount))/100;
        $balance = ($re->price) - $disPrice;
        $data = array(
            'proTitle' => $re->proTitle,
            'description' => $re->description,
            'startProDate' => $re->startProDate,
            'createdDate' => "2019-01-27 10:28:55",
            'endProDate'=> $re->endProDate,
            'price'=> $re->price,
            'balance'=> $balance,
            'rateDiscount'=> $re->rateDiscount,
            'catId'=> $re->catId,
            'comId'=> $re->comId,
            'img'=> "img"
        );
        $i = DB::table('promotions')
        ->where('proId', "7")
        ->update($data);
        return redirect('backend/promotion');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete(Request $r)
    {
        DB::table('promotions')
        ->where('proId', $r->id)
        ->delete();
    $r->session()->flash('success', 'Data has been removed!');
    return redirect('backend/promotion');
    }
}
