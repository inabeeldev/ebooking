<?php

namespace App\Http\Controllers\seller;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('service_provider_id', Auth::user()->id)->get();
        return view('service_provider.service.index', compact('services'));
    }

    public function create()
    {
        return view('service_provider.service.create');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Create a new validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, handle file upload if an image is provided
        $validatedData = $validator->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/services'), $imageName);

            // Save the image name to the validated data
            $validatedData['image'] = $imageName;
        }
        $validatedData['service_provider_id'] = Auth::user()->id;
        $validatedData['service_type'] = Auth::user()->service_type;

        // Create a new Publication using the validated data
        Service::create($validatedData);

        // Redirect or respond as needed
        return redirect()->route('services-list')->with('success', 'Service created successfully.');
    }



    public function delete(string $id)
    {
        $service = Service::findOrFail($id);

        // Delete the user
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully');
    }
}
