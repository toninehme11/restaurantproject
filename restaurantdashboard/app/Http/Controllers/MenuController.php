<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = Menu::orderBy('category')->get();
        return view('cms.menu', compact('menuItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Maximum size in kilobytes (2MB)
            'category' => 'required',
        ]);

        $imageData = null;

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');

            // Convert the image to binary data
            $imageData = file_get_contents($image->getRealPath());
        }

        Menu::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'image' => $imageData, // Save the binary image data as MEDIUMBLOB
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu item added successfully');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            // Delete the image from the database
            DB::table('menu')->where('id', $menu->id)->update(['image' => null]);
        }

        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu item deleted successfully');
    }

    public function editPage(Menu $menu)
    {
        $categories = Category::all();
        return view('menus.edit-page', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Maximum size in kilobytes (2MB)
            'category' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');

            // Convert the image to binary data
            $imageData = file_get_contents($image->getRealPath());

            // Update the 'image' column with the new binary data
            $menu->image = $imageData;
        }

        // Update other fields
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->description = $request->input('description');
        $menu->category = $request->input('category');

        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Menu item updated successfully');
    }

    public function create()
    {
        $categories = Category::all();
        return view('cms.add-menu', ['categories' => $categories]);
    }

    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('cms.edit-menu', compact('menu', 'categories'));
    }
}
