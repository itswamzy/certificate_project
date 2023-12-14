<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){ 
        $services = Service::all();
        return view('services.index', ['services' => $services]);
       

    }

    public function create(){
        return view('services.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'CarMake' => 'required',
            'CarModel' => 'required',
            'NumberPlate' => 'required',
            'OwnerName' => 'required',
            'ServiceDescription' => 'required',
            'Price' => 'required'
        ]);

        $newService = Service::create($data); 

        return redirect(route('service.index'));
    }

    public function edit(Service $service){
        return view('services.edit', ['service' => $service]);

    }
    
    public function update(Service $service, Request $request){
        $data = $request->validate([
            'CarMake' => 'required',
            'CarModel' => 'required',
            'NumberPlate' => 'required',
            'OwnerName' => 'required',
            'ServiceDescription' => 'required',
            'Price' => 'required'
        ]);

        $service -> update($data);

        return redirect(route('service.index'))->with('success', 'Product Updated Successfully');

    }

    public function destroy(Service $service){
        $service->delete();
        return redirect(route('service.index'))->with('success', 'Product Deleted Successfully');

    }
}
