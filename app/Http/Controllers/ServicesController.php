<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\OtherModelLogger;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // public function index() {

    //     $services = Service::all();

    //     return view('ServiciiPage.serviciiPage', compact('services'));
    // }

    public function show_product($id, Request $request ,OtherModelLogger $logger) {

        $allServices =  Service::all();

        $service = Service::where('id', $id)->first();

        $logger->mylog($request->user(), $service);

        return view('ServiciiPage.serviciiPage', ['allServices' => $allServices, 
                                                  'service' => $service]                                          
        );
    }
}
