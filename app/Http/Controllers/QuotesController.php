<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quotes= Quote::all();
        return view('admin.quotes.index',['quotes' => $quotes]);
    }

    public function create()
    {
        return view('admin.quotes.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $quotes = Quote::find($id);
        return view('admin.quotes.edit',['quotes' => $quotes]);
    }

    public function update(Request $request, $id)
    {
        $quotes = Quote::find($id);
        return redirect()->route('quotes.index')->with('Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $quotes = Quote::find($id)->delete();
        return redirect()->route('quotes.index')->with('Eliminado correctamente');
    }
}
