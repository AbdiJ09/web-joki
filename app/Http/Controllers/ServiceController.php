<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if ($service->slug == 'joki-rank') {
            return view('service.rank', compact('service'));
        } else if ($service->slug == 'joki-classic') {
            return View('service.classic', compact('service'));
        } else if ($service->slug == 'jasa-gendong') {
            return View('service.gendong', compact('service'));
        }
    }
}
