<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::where('status',1)->get();
        $clients = Client::where('status',1)->get();
        $portfolios = Portfolio::where('status',1)->get();
        $services = Service::where('status',1)->get();
        $sliders = Slider::where('status',1)->get();

        return view('home.index', compact('abouts', 'clients', 'portfolios', 'services', 'sliders'));
    }
}
