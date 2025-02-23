<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminportfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('adminportfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'imageUrl' => 'required|string|min:5',
        ]);

        Portfolio::create([
          'imageUrl'=> $request->imageUrl
        ]);
        return redirect()->route('yonetim.calismalar.index');
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
        $adminportfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('adminportfolio'));
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
            'imageUrl' => 'required|string|min:5',
        ]);
        $adminportfolio = Portfolio::findOrFail($id);
        $adminportfolio->update([
            'imageUrl' => $request->imageUrl
        ]);
        return redirect()->route('yonetim.calismalar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminportfolio = Portfolio::findOrFail($id);
        $adminportfolio->delete();
        return redirect()->route('yonetim.calismalar.index');
    }
}
