<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::whereDate('Data_di_partenza',today())->get();
          return view('pages.trains', compact('trains'));
      }
}