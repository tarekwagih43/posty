<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $inbox = Inbox::all();
        return view('admin.inbox', [
            'inbox' => $inbox
        ]);
    }

    public function destroy(Inbox $inbox)
    {
        $inbox->delete();

        return back()
                ->with('success', 'Deleted Succesfully');
    }


}
