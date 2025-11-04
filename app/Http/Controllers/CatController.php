<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Breed;

use Illuminate\Http\Request;

class CatController extends Controller
{
    // Display paginated list of cats
    public function index()
    {
        $cats = Cat::with('breed')->get(); // 12 cats per page
        return view('cats.index', compact('cats'));
    }

    // Show individual cat details
    public function show($id)
    {
        $cat = Cat::with('breed')->findOrFail($id);
        return view('cats.show', compact('cat'));
    }

    // Show create form
    public function create()
    {
        $breeds = Breed::orderBY('name')->get();
        return view('cats.create', compact('breeds'));
    }

    //store new cat
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'tags' => 'nullable|string|max:255',
            'desc' => 'nullable|string',
            'breed_id' => 'required|exists:breeds,id',
        ], [
            'name.required' => 'The cat name is required.',
            'age.required' => 'The cat age is required.',
            'age.min' => 'The cat age must be a non-negative integer.',
            'tags.required' => 'The cat tags is required.',
            'breed_id.required' => 'Please select a valid breed.',
            'breed_id.exists' => 'The selected breed does not exist.',
            'desc.required' => 'The cat description is required.',

        ]);
        Cat::create($validated);

        return redirect()->route('cats.index')->with('success', 'Cat added successfully!');
}
    // Delete a cat
    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $catName = $cat->name;
        $cat->delete();

        return redirect()->route('cats.index')
            ->with('success', "$catName has been deleted successfully.");    }
}
