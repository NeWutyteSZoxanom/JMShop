<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class SaveForLaterController extends Controller
{
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveForlater')->remove($id);
        return back();
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchtosaveforlater($id)
    {
        $tovar = Cart::instance('saveForlater')->get($id_t);
        Cart::instance('saveForlater')->remove($id_t);

        Cart::instance('default')->add($tovar->id, $tovar->name, 1, $tovar->price,1)
        ->associate('App\Tovar');


        return redirect()->route('cart.index');
    }
}
