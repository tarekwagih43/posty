<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;
use App\Models\Service;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        $inbox = Inbox::get();
        $services = Service::get();

        return view('admin.dashboard', [
            'inbox' => $inbox,
            'services' => $services
        ]);
    }
}
