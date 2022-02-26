<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Kinetotherapeut;
use App\Http\Request\AppointmentRequest;
use App\Models\Appointment;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Services\AppointmentMailer;



class AppointmentController extends Controller
{
    public function index($id) {

        $service = Service::findOrFail($id);
        $allServices =  Service::select('name', 'id')->get();
        $kinetotherapeut = Kinetotherapeut::select('name', 'surname', 'id')->get();

        return view('AppointmentsPage.programeazaPage', compact('allServices', 'service', 'kinetotherapeut'));
    }


    public function store(Service $id, AppointmentRequest $request, AppointmentMailer $mailer){

        $client = Client::create($request->only(['name', 'surname', 'phone', 'email']));

        $appointment = Appointment::create($request->only(['kinetotherapist_id', 'date', 'start_time']));

        $appointment->client_id = $client->id;
        $appointment->service_id = $id->id;

        $end_time = clone(Carbon::parse($appointment->start_time))
                    ->addMinutes(30)
                    ->addHours( Carbon::parse($id->duration)->hour )
                    ->addMinutes( Carbon::parse($id->duration)->minute );

        $appointment->end_time = $end_time;
        $appointment->save();


        $id->appointments_nr++;
        $id->save();

        $data = $request->validated();
        $data["service_end_time"] = $appointment->end_time;
        $data["service_name"] = $id->name;
        $data["client_id"] = $client->id;


        $mailer->send($data);


        return redirect()->back();
    }
}
