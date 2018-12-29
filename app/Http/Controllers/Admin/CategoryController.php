<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::orderBy("id", "desc")->get();
        return view("admin.categories.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        return view("admin.categories.form", compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
        ]);

        $action = Category::create([
            'title' => trim($request->title),
            "content" => $request->content
        ]);

        if($action) {
            return redirect("admin/categories")->with(["message" => 'Category added successfully.']);
        }
        return redirect("admin/categories")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $id = $category->id;
        return view("admin.categories.form", compact("category", "id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            "title" => "required",
        ]);

        $action = $category->update([
            'title' => trim($request->title),
            "content" => $request->content
        ]);

        if($action) {
            return redirect("admin/categories")->with(["message" => 'Category added successfully.']);
        }
        return redirect("admin/categories")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $delete = $category->delete();
        if($delete) {
            return "true";
        }
        return "false";
    }
}
