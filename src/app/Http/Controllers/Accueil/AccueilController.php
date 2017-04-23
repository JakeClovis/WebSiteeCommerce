<?php

namespace App\Http\Controllers\Accueil;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }


    public function store(Request $request)
    {
      $this->validate(
              $request,
              [
                'comment' => 'required',
              ]
      );


    }
}
