<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Import the Category model

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all categories from the "categories" table
        $categories = Category::all();

        return view('cms.categories', compact('categories'));
    }

    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'destroy']);
    }

    public function store(Request $request)
    {
        // Validate and store a new category
        $request->validate([
            'categories' => 'required|unique:categories|max:255',
        ]);
    
        Category::create([
            'categories' => $request->input('categories'),
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }
    
    public function destroy(Category $category)
    {
        // Delete a category
        $category->delete();
    
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
    
}
