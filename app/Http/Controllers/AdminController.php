<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Voorraad;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $gebruikers = User::count();

        return view('admin/index', compact('productCount', 'gebruikers'));
    }

}
