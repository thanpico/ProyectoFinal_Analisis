<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    //CREACION DEL METODO INDEX, SE PUEDE CREAR VARIOS METODOS
    public function index()
    {
    	//LLAMAMOS AL MODEL YA CREADO
    	//guardamos los datos en una variable
    	$products = Product::all();
    	//HERRAMIENTA QUE PERMITE HACER DEBUG
    	//dd($products);

    	return view('store.index', compact('products'));

    }
}
