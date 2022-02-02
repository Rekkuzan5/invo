<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Civilization;

class CivilizationController extends Controller
{
    
    public function index() {
        
        $civilizations = Civilization::all();

        return view('/civilizations.index', [
            'civilizations' => $civilizations,
        ]);
    }

    // Display civilizations from DB on page //
    public function show($id) {

        $empire = Civilization::findOrFail($id);

        return view('/civilizations.show', ['empire' => $empire]);
    }

    public function create() {
        return view('civilizations.create');
    }

    // Function for updating existing civilization //
    public function update($id) {

        $civilization = Civilization::find($id);

        $civilization->name = request('name');
        $civilization->expansion = request('expansion');
        $civilization->army_type = request('army_type');
        $civilization->team_bonus = request('team_bonus');
        $civilization->civilization_bonus = request('civilization_bonus');
        $civilization->update();

        return redirect('/')->with('message', 'Empire successfully updated');
    } 
    
    // Function for creating a new empire for testing //
    public function store() {

        error_log(request('name'));

        $civilization = new Civilization();

        $civilization->name = request('name');
        $civilization->expansion = request('expansion');
        $civilization->army_type = request('army_type');
        $civilization->team_bonus = request('team_bonus');
        $civilization->civilization_bonus = request('civilization_bonus');

        error_log($civilization);
        $civilization->save();

        return redirect('/')->with('message', 'Empire successfully created');
    }

    // Delete function //
    public function destroy($id) {
        $civilization = Civilization::findOrFail($id);
        $civilization->delete();

        return redirect('/')->with('message', 'Empire successfully deleted');
    }

}
