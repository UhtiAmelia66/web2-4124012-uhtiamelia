<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            ["id"=>1,"nama"=>"Nasi Goreng","harga"=>15000],
            ["id"=>2,"nama"=>"Mie Goreng","harga"=>13000],
            ["id"=>3,"nama"=>"Ayam Geprek","harga"=>18000],
            ["id"=>4,"nama"=>"Es Teh","harga"=>5000],
            ["id"=>5,"nama"=>"Jus Alpukat","harga"=>10000],
        ];

        return view('katalog', compact('produk'));
    }

    public function show($id)
    {
        return "Detail produk dengan ID: ".$id;
    }
}