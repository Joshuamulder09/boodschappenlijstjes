<?php

namespace App\Http\Controllers;

use App\User;
use App\Voorraad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserVoorraadProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userId = Auth::user()->id;
        $voorraadproducts = Voorraad::where('user_id', $userId)->get();

        return view('user.voorraad.index', compact('voorraadproducts'));
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


        $user->voorraadsProducts()->create($input); //met het ingelogde account een product opslaan in database


        return redirect('/user/voorraad');
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
        $voorraadproduct = Voorraad::findOrFail($id);


        return view('user.products.edit', compact('voorraadproduct'));
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
        Voorraad::findOrFail($id)->increment('aantal');

        return redirect('/user/voorraad');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Voorraad::findOrFail($id)->decrement('aantal');

        DB::table('Voorraads')->where('aantal', '=', -1)->delete();
        return redirect('/user/voorraad');
    }


}
