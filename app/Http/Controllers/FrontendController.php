<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function productDetails() {
        try {
            return view('productDetails');
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }


    public function search() {
        try {
            return view('search');
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
