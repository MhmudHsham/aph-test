<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Journal;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::orderBy("id", "desc")->limit(5)->get();
        $categories = Category::all();
        $journals = Journal::with("category")->get();
        return view('index', compact("sliders", "categories", "journals"));
    }
}
