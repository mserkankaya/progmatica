<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminclient = Client::all();
        return view('admin.client.index', compact('adminclient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'namesurname'=>'required|string|min:2',
            'comment'=>'required|string|min:5',
        ]);
        Client::create([
            'namesurname'=>$request->namesurname,
            'comment'=>$request->comment
        ]);
        return redirect()->route('yonetim.yorumlar.index');
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
        $adminclient = Client::findOrFail($id);
        return view('admin.client.edit',compact('adminclient'));
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
            'namesurname' => 'required|string|min:5',
            'comment' => 'required|string|min:5'

        ]);
        $adminclient = Client::findOrFail($id);
        $adminclient->update([
            'namesurname' => $adminclient->namesurname,
            'imageUrl' => $adminclient->imageUrl,
            'comment' => $adminclient->comment,
        ]);
        return redirect()->route('yonetim.yorumlar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminclient = Client::findOrFail($id);
        $adminclient->delete();
        return redirect()->route('yonetim.yorumlar.index');
    }
}
