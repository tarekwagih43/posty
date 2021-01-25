<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['gest']);
    }

    public function index()
    {
        return view('services');
    }

    public function all_services()
    {
        $services = Service::all();

        return view('admin.services', [
            'services' => $services
        ]);
    }
}
