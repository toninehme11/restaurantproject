<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class CustomHomeController extends Controller
{
    public function index()
    {
        // Get all categories
        $categories = Category::all();

        // Initialize an array to hold menu items grouped by category
        $menuItemsByCategory = [];

        // Loop through categories and retrieve menu items for each category
        foreach ($categories as $category) {
            $menuItems = Menu::where('category', $category->categories)->get();
            $menuItemsByCategory[$category->categories] = $menuItems;
        }

        // Initialize an empty array for $menuItems
        $menuItems = [];

        return view('index', compact('categories', 'menuItemsByCategory', 'menuItems'));
    }
}

