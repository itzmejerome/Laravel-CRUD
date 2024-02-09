<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\people;

class peopleController extends Controller
{
    public function index(){
        $people = people::all();
        return view ('/peoples.people', ['people' => $people]);

    }

    public function create(){
        return view ('peoples.create');
    }

    public function store(Request $request){
        $data = $request->validate(
            [
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'number' => 'required'
            ]
            );

            $newPeople = people::create($data);

            return redirect(route('people.index'));
    }

    public function edit(people $people) {
            return view ('peoples.edit', ['people' => $people]);
    }

    public function update(people $people, Request $request){
        $data = $request->validate(
            [
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'number' => 'required|numeric'
            ]
            );

            $people->update($data);

            return redirect(route('people.index'))->with('success', 'Updated Succesfully');

    }
    public function delete(people $people){
        $people->delete();
        return redirect(route('people.index'))->with('success', 'Deleted Succesfully');

    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $people = people::query()
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->orWhere('address', 'LIKE', "%{$query}%")
            ->orWhere('number', 'LIKE', "%{$query}%")
            ->get();

        return view('peoples.people', compact('people'));
    }
}
