<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    //All sneaker view
    public function index(){
        $sneakers = Sneaker::all();
        return view('sneakers.index', compact('sneakers'));
    }

    //Specific sneaker per $id in view
    public function show($id){
        $sneaker = Sneaker::find($id);
        return view('sneakers.show', compact('sneaker'));
    }

    public function create(){
        return view('sneakers.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:sneakers|max:255',
            'color' => 'required',
            'image' => 'required',
        ]);

        $sneaker = new Sneaker;
        $sneaker->name = $request->name;
        $sneaker->color = $request->color;
        $sneaker->image = $request->image;
        $sneaker->users_id = 1;
        $sneaker->brands_id = 1;
        $sneaker->save();

        return redirect()->route('sneakers.index');
    }

    public function edit($id){
        $sneaker = Sneaker::findOrFail($id);
        return view('sneakers.edit', compact('sneaker'));
    }

    public function update(Request $request, $id){
        $sneaker = Sneaker::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|unique:sneakers|max:255',
            'color' => 'required',
            'image' => '',
        ]);

        $sneaker->update($validated);

        return redirect()->route('sneakers.show', $sneaker->id);
    }
}
