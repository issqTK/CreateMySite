<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Service;



class ServiceController extends Controller
{
    public function index($slug) {

        $service = Service::where('slug', $slug)->first();

        if(!$service) abort(404, 'Service not found.');

        return Inertia::render('Services/Index', [
            'data' => $service,
        ]);
    }

    public function byStand() {
        
    }
}
