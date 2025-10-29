<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Sneaker;
use App\Models\User;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    //All sneaker view
    public function index(){
        $sneakers = Sneaker::all();
        return view('sneakers.index', compact('sneakers'));
    }

    public function overview(){
        $sneakers = Sneaker::all();
        $users = User::withCount('sneakers')->get();
        return view('overview-sneakers', compact('sneakers'));
    }

    public function all(){
        $sneakers = Sneaker::all();
        return view('sneakers.index', compact('sneakers'));
    }

    //Specific sneaker per $id in view
    public function show($id){
        $sneaker = Sneaker::find($id);
        return view('sneakers.show', compact('sneaker'));
    }

    public function create(){
        $brands = Brand::all();
        return view('sneakers.create', compact('brands'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:sneakers|max:255',
            'color' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brands_id' => 'required|exists:brands,id',
        ]);

        $sneaker = new Sneaker;
        $sneaker->name = $request->name;
        $sneaker->color = $request->color;
        $originalImage = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('src', $originalImage, 'public');
        $sneaker->image = $originalImage;
        $sneaker->users_id = 2;
        $sneaker->brands_id = $request->brands_id;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $sneaker->update($validated);
        return redirect()->route('sneakers.show', $sneaker->id);
    }

    public function destroy($id){
        $sneaker = Sneaker::findOrFail($id);
        $sneaker->delete();
        return redirect()->route('sneakers.index')->with('success', 'Sneaker successfully deleted');
    }
}
