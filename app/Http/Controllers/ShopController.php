<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Area;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Shop $shop)
    {
        if($request->filled('area_id')){
            $area_id = $request->input('area_id');
            $message = 'Search:'. $area_id;
            $shops = Shop::where('area_id', '=', $area_id)->get();
        }else{
            $message = 'No Search';
            $shops = Shop::all();
        }

        $areas = Area::all()->pluck('name','id');
        return view('index', ['shops' => $shops, 'areas' => $areas, 'message'=> $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all()->pluck('name','id');
        return view('new',['areas' => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->menu = request('menu');
        $shop->area_id = request('area_id');
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id ,Shop $shop)
    {
        $shop = Shop::find($id);
        return view('show', ['shop' => $shop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Shop $shop)
    {
        $shop = Shop::find($id);
        $areas = Area::all()->pluck('name','id');
        return view('edit',['shop' => $shop , 'areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Shop $shop)
    {
        $shop = Shop::find($id);
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->menu = request('menu');
        $shop->area_id = request('area_id');
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Shop $shop)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shops');
    }
}
