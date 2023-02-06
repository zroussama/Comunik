<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
     function store(Request $request)
    {
        $request->validate([
            'contrat' => 'required|file',
            'date_contrat' => 'required|date',
        ]);

        $portfolio = new Portfolio();
        $portfolio->contrat = $request->contrat->store('contrats');
        $portfolio->date_contrat = $request->date_contrat;
        $portfolio->save();

        return redirect()->route('index');
    }
    public function index()
{
    $portfolios = Portfolio::all();
    return view('index', compact('portfolios'));
}
}