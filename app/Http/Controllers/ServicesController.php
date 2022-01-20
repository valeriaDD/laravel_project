<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\ModelLogger;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * 
     * @param int $id
     * @return Illuminate\Http\Response;
     */

    public function show_product($id, Request $request ,ModelLogger $logger) {

        $allServices =  Service::all();

        $service = Service::where('id', $id)->first();

        $logger->logModel($request->user(), $service);

        return view('ServiciiPage.serviciiPage', ['allServices' => $allServices, 
                                                  'service' => $service]                                          
        );
    }
}
