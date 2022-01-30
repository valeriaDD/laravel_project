<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Kinetotherapeut;
use App\Http\Request\AppointmentRequest;
use Illuminate\Http\Response as Response;
use Illuminate\Http\RedirectResponse;


class AppointmentController extends Controller
{
    public function index($id) {

        $allServices =  Service::select('name', 'id')->get();

        $service = Service::findOrFail($id);

        $kinetotherapeut = Kinetotherapeut::select('name', 'surname', 'id')->get();

        return view('AppointmentsPage.programeazaPage', compact('allServices', 'service', 'kinetotherapeut'));
    }

    public function send(AppointmentRequest $request): RedirectResponse
    {

        $data = $request->validated();
        
        \Log::debug('test',$data);


        return redirect()->back();
    }
}
