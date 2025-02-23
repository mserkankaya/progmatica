<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $adminslider = Slider::all();
       return view('admin.slider.index', compact('adminslider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:5',
            'imageUrl' => 'required|string|min:5',
        ]);

        Slider::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'imageUrl' => $request->imageUrl
        ]);
        return redirect()->route('yonetim.slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminslider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('adminslider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:5',
            'imageUrl' => 'required|string|min:5',
        ]);

        $adminslider = Slider::findOrFail($id);
        $adminslider->update([
            'title' => $request->title,
            'description'=>$request->description,
            'imageUrl' => $request->imageUrl
        ]);
        return redirect()->route('yonetim.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminslider = Slider::findOrFail($id);
        $adminslider->delete();
        return redirect()->route('yonetim.slider.index');
    }
}
