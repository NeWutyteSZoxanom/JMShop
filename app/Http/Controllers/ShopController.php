<?php

namespace App\Http\Controllers;


use App\Tovar;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        if(request()->category)
        {
            $tovars=Tovar::with('categories')->whereHas('categories', function($query){
                $query->where('slug',request()->category);
            });
            $categories=Category::all();
            $catName=optional($categories->where('slug', request()->category)->first())->name;
            $kol=$tovars->count();
        }
        else
        {
            $categories=Category::all();
            $tovars=Tovar::take(12);
            $catName='Featured';
            $kol=$tovars->count();
        }

        if(request()->sort == 'low_hi' ){
            $tovars=$tovars->orderBy('price')->paginate(6);
        }
        elseif(request()->sort == 'hi_low' ){
            $tovars=$tovars->orderBy('price','desc')->paginate(6);
        }
        elseif(request()->sort == 'newness' ){
            $tovars=$tovars->orderBy('id')->paginate(6);
        }
        else{
            $tovars=$tovars->paginate(6);
        }

        return view('shop')->with([
            'tovars'=>$tovars,
            'categories'=>$categories,
            'catName'=> $catName,
            'kol'=> $kol
        ]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tovars = Tovar::where('id',$id)->firstOrFail();
        return view('tovar')->with('tovars',$tovars);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
