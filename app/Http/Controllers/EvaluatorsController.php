<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluator;

class EvaluatorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $evaluators = Evaluator::all();
        return view('admin.evaluators.index',['evaluators' => $evaluators]);
    }

    public function create()
    {
        return view('admin.evaluators.create');
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
