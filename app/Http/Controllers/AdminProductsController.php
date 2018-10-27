<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Voorraad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userId = Auth::user()->id;
        $products = Product::where('user_id',$userId)->get();
        $voorraadproducts = Voorraad::where('user_id', $userId)->get();

        return view('user.products.index', compact('products', 'voorraadproducts'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'aantal' => 'required|integer',
        ]);

        $input = $request->all();


        $user = Auth::user();


        $user->products()->create($input); //met het ingelogde account een product opslaan in database


        return redirect('/user/boodschappenlijst');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);


        return view('user.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Product::findOrFail($id)->increment('aantal');

        return redirect('/user/boodschappenlijst');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Product::findOrFail($id)->decrement('aantal');

        DB::table('Products')->where('aantal', '=', 0)->delete();
        return redirect('/user/boodschappenlijst');
    }


}
