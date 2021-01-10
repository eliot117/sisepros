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
        $evaluators = new Evaluator();
        $evaluators->name_evaluators     = request('name_evaluators');
        $evaluators->lastname_evaluators = request('lastname_evaluators');
        $evaluators->address             = request('address');
        $evaluators->extension           = request('extension');
        $evaluators->save();
        return redirect()->route('evaluators.index')->withSuccess('Evaluador creado con exito');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $evaluators = Evaluator::find($id);
        return view('admin.evaluators.edit',['evaluators' => $evaluators]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),
        ['name_evaluators'     => ['required','max:80']],
        ['lastname_evaluators' => ['required','max:80']],
        ['address'             => ['required','max:80']],
        ['extension'           => ['required']
        ]);

        $evaluators = Evaluator::find($id);
        $evaluators->name_evaluators     = $request->get('name_evaluators');
        $evaluators->lastname_evaluators = $request->get('lastname_evaluators');
        $evaluators->address             = $request->get('address');
        $evaluators->extension           = $request->get('extension');
        $evaluators->update();

        return redirect()->route('evaluators.index')->with('Actualizado correctamente');
    }

    public function destroy($id)
    {
        $evaluators = Evaluator::findOrFail($id)->delete();
        return redirect()->route('evaluators.index')->withToastError('Eliminado correctamente');
    }
}
