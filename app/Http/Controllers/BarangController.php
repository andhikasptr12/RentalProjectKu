<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Item;
use App\Transaction;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index');
    }

    public function create()
    {
        return view('barang.create');
    }

    public function edit()
    {
        return view('barang.edit');
    }
}

