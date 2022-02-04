<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Kinetotherapeut;
use App\Http\Request\AppointmentRequest;
use App\Models\Appointment;
use App\Models\Client;
use Illuminate\Http\Response as Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;



class AppointmentController extends Controller
{
    public function index($id) {

        $service = Service::findOrFail($id);
        $allServices =  Service::select('name', 'id')->get();
        $kinetotherapeut = Kinetotherapeut::select('name', 'surname', 'id')->get();

        return view('AppointmentsPage.programeazaPage', compact('allServices', 'service', 'kinetotherapeut'));
    }

    public function send(AppointmentRequest $request): RedirectResponse
    {

        $data = $request->validated();
        \Log::debug('test',$data);

        return redirect()->back();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * 
     */
    public function store(Service $id, Request $request){
        
        $client = Client::create($request->only(['name', 'surname', 'phone', 'email']));

        $appointment = Appointment::create($request->only(['kinetotherapist_id', 'service_id', 'date', 'start_time']));

        $appointment->client_id = $client->id;
        $appointment->service_id = $id->id;

        $end_time = clone(Carbon::parse($appointment->start_time))
                    ->addMinutes(30)
                    ->addHours( Carbon::parse($id->duration)->hour )
                    ->addMinutes( Carbon::parse($id->duration)->minute );

        $appointment->end_time = $end_time;

        $appointment->save();  

        // dd($request->appointment->client_id);
        return redirect()->back();
    }
}
