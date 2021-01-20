<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        $setting = Config::first();

        return view('admin.setting', [
            'config' => $setting
            ]);
    }

    public function information(Request $request)
    {
        // valdiation
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'about' => 'max:755',
        ]);

        if(!Config::all()->count()){
            Config::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'about' => $request->about,
                'register' => $request->register
            ]);
        }
        else {
            DB::table('configs')->where('id', $request->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'about' => $request->about,
                'register' => $request->register

            ]);
        }

        // redirect
        return redirect()->route('setting');
    }

}
