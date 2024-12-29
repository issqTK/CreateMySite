<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function showOrder()
    {
        return Inertia::render('Order', [
            // Pass any data needed by the component here, e.g.,
            'websiteTypes' => ['Portfolio', 'E-commerce', 'Blog', 'Corporate', 'Landing Page']
        ]);
    }
}
