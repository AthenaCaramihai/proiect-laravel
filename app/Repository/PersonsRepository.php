<?php

namespace App\Repository;

use Exception;
use App\Models\Movies;
use App\Models\Persons;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PersonsRepository
{
    public function index() {
        return Persons::with(['movies'])->get();
    }

    public function store(array $request) {
        $person = new Persons([
            'uuid' => Str::uuid(),
            'nume' => $request['nume'],
            'prenume' => $request['prenume'],
            'age' => $request['age']
        ]);

        return $person->movies()->save();
    }

    public function show(int $id) {
        return Persons::find($id);
    }

    public function update(array $request, int $id) {
        $id = Persons::find($id);
        $person =[
            'nume' => $request['nume'],
            'prenume' => $request['prenume'],
            'age' => $request['age']
        ];
        return $id->update($person);
    }

    public function destroy(int $id) {
        $person = Persons::find($id);
        return $person->delete();
    }
}
