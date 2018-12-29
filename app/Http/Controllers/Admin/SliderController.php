<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Slider::orderBy("id", "desc")->get();
        return view("admin.sliders.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        return view("admin.sliders.form", compact("id"));
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
            "image" => "required"
        ]);

        $image = $request->file('image');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/sliders');
        $image->move($destinationPath, $logo);


        $action = Slider::create([
            'title' => trim($request->title),
            "url" => $request->url,
            "image" => $logo,
            "content" => $request->content
        ]);

        if($action) {
            return redirect("admin/sliders")->with(["message" => 'Slider added successfully.']);
        }
        return redirect("admin/sliders")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $slider->image = url('/') . "/public/uploads/sliders/".$slider->image;
        return $slider;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $id = $slider->id;
        return view("admin.sliders.form", compact("Slider", "id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            "title" => "required",
        ]);

        if (isset($request->image) && $request->image != "") {
            $image = $request->file('image');
            $logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/sliders');
            $image->move($destinationPath, $logo);
        }

        $data = [];
        $data['title'] = trim($request->title);
        $data['url'] = $request->url;
        $data['content'] = $request->content;
        if (isset($request->image) && $request->image != "") {
            $data['image'] = $logo;
        }

        $action = $slider->update($data);

        if($action) {
            return redirect("admin/sliders")->with(["message" => 'Slider added successfully.']);
        }
        return redirect("admin/sliders")->withErrors(['Problem, Try again later.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $delete = $slider->delete();
        if($delete) {
            return "true";
        }
        return "false";
    }
}
