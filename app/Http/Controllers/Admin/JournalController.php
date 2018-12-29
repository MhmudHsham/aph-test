<?php

namespace App\Http\Controllers\Admin;

use App\Models\Journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class JournalController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Journal::with("category")->orderBy("id", "desc")->get();
        return view("admin.journals.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $id = 0;
        return view("admin.journals.form", compact("id", "categories"));
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
            "image" => "required",
            "content" => "required"
        ]);

        $image = $request->file('image');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/journals');
        $image->move($destinationPath, $logo);

        $action = Journal::create([
            'title' => trim($request->title),
            "url" => $request->url,
            "image" => $logo,
            "category_id" => $request->category_id,
            "content" => $request->content
        ]);

        if($action) {
            return redirect("admin/journals")->with(["message" => 'Journal added successfully.']);
        }
        return redirect("admin/journals")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        $journal->image = url('/') . "/public/uploads/journals/".$journal->image;
        return $journal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        $id = $journal->id;
        return view("admin.journals.form", compact("journal", "id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "category_id" => "required"
        ]);

        if (isset($request->image) && $request->image != "") {
            $image = $request->file('image');
            $logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/journals');
            $image->move($destinationPath, $logo);
        }

        $data = [];
        $data['title'] = trim($request->title);
        $data['url'] = $request->url;
        $data['content'] = $request->content;
        $data['category_id'] = $request->category_id;
        if (isset($request->image) && $request->image != "") {
            $data['image'] = $logo;
        }

        $action = $journal->update($data);

        if($action) {
            return redirect("admin/journals")->with(["message" => 'Journal added successfully.']);
        }
        return redirect("admin/journals")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        $delete = $journal->delete();
        if($delete) {
            return "true";
        }
        return "false";
    }
}
