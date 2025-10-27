<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $projects   = Project::with('category')->latest()->get();

        return view('home', compact('categories', 'projects'));
    }

    public function getProjectsByCategory($id)
    {
        // Ambil kategori berdasarkan id
        $category = Category::findOrFail($id);

        // Ambil 3 project terbaru dari kategori ini
        $projects = Project::where('category_id', $id)
            ->latest()
            ->take(3)
            ->get();

        return response()->json([
            'category' => $category->name,
            'projects' => $projects
        ]);
    }

    public function allProjects()
{
    $projects = Project::with('category')->latest()->get();
    $categories = Category::all();

    return view('all-projects', compact('projects', 'categories'));
}

}
