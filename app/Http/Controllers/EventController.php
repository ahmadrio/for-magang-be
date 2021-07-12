<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return Inertia::render('Event/Index');
    }
}
