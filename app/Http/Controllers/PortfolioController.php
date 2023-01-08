<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfolio = [
            ['title' => 'Portfolio 1'] ,
            ['title' => 'Portfolio 2'] ,
            ['title' => 'Portfolio 3'] ,
            ['title' => 'Portfolio 4'] ,
        ];
        return view('portfolio', ['portfolio' => $portfolio]);
    }

}
