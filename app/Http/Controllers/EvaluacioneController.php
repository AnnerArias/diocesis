<?php

namespace App\Http\Controllers;

use App\Models\Evaluacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EvaluacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EvaluacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $evaluaciones = Evaluacione::paginate();

        return view('evaluacione.index', compact('evaluaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $evaluaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $evaluacione = new Evaluacione();

        return view('evaluacione.create', compact('evaluacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvaluacioneRequest $request): RedirectResponse
    {
        Evaluacione::create($request->validated());

        return Redirect::route('evaluaciones.index')
            ->with('success', 'Evaluacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $evaluacione = Evaluacione::find($id);

        return view('evaluacione.show', compact('evaluacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $evaluacione = Evaluacione::find($id);

        return view('evaluacione.edit', compact('evaluacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EvaluacioneRequest $request, Evaluacione $evaluacione): RedirectResponse
    {
        $evaluacione->update($request->validated());

        return Redirect::route('evaluaciones.index')
            ->with('success', 'Evaluacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Evaluacione::find($id)->delete();

        return Redirect::route('evaluaciones.index')
            ->with('success', 'Evaluacione deleted successfully');
    }
}
