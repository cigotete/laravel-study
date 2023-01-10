<?php

namespace App\Http\Controllers;
use App\Models\Project;
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
        $portfolio = Project::orderBy("id", "desc")->paginate(2);
        return view('portfolio', ['portfolio' => $portfolio]);
    }

}
