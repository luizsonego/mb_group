<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $person = Person::where([
            ['name', '!=', NULL],
            ['cpf', '!=', NULL],
            ['date_of_birth', '!=', NULL],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('cpf', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('date_of_birth', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'cpf'=>'required|cpf',
            'date_of_birth'=>'required',
        ]);

        Person::create($request->all());

        return redirect()->route('person.index')
            ->with('success', 'Pessoa criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('person.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name'=>'required',
            'cpf'=>'required',
            'date_of_birth'=>'required'
        ]);

        $person->update($request->all());

        return redirect()->route('person.index')
            ->with('success', 'Pessoa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('person.index')
            ->with('success', 'Pessoa deletada com sucesso');
    }
}
