<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
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

    public function edit_form(Service $service)
    {
        $serviced = Service::where('id', $service->id)->first();
        return view('admin.service', [
            'service' => $serviced
        ]);
    }

    public function edit(Request $request)
    {
        // valdiation
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        if(!empty($request->image)){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);

            DB::table('services')->where('id', $request->id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => "images/".$imageName
            ]);
        }else {
            DB::table('services')->where('id', $request->id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }

        // redirect back
        return back()
                ->with('success', 'Updated Succesfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back()
                ->with('success', 'Deleted Succesfully');
    }

    public function add()
    {
        return view('admin.service_add');
    }

    public function add_submit(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // create user
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => "images/".$imageName
        ]);

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully add Services.');
    }
}
