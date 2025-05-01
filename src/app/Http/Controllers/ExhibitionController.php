<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;

class ExhibitionController extends Controller
{
    public function index()
  {
    return view('sell');
  }

     public function display(Request $request)
     {
         // ここに処理を記述していきます。
         $exhibition = $request->only(['product','brand','explanation','price']);
         return view('/item/:item_id',['exhibition' => $exhibition]);
     }

}
