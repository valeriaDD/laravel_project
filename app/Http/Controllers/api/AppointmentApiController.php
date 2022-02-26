<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Kinetotherapeut;
use App\Models\Service;
use App\Models\WorkingDay;
use Illuminate\Routing\ResponseFactory;

class AppointmentApiController extends Controller
{
    /** @var ResponseFactory */
    private $responseFactory;

    /**
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function getAppointments($employeeId): \Illuminate\Http\JsonResponse
    {
        $todayDate = date('Y-m-d');
        $appointments = Appointment::select('date', 'start_time', 'end_time')
            ->where("kinetotherapist_id", $employeeId)
            ->where('date', '>=', $todayDate)
            ->get();

        if (!$appointments->isEmpty()) {
            foreach ($appointments as $appointment) {
                $appointmentsResponse[] = [
                    'date' => $appointment->date,
                    'start_time' => $appointment->start_time,
                    'end_time' => $appointment->end_time
                ];
            }
            return $this->responseFactory->json($appointmentsResponse, 200);
        } else
            return $this->responseFactory->json(null, 404);
    }


    public function getWorkingDays($id): \Illuminate\Http\JsonResponse
    {



        $employee = Kinetotherapeut::find($id);
        if ($employee) {
            foreach ($employee->workingDays as $day) {
                $schedule[] = [
                    'day' => $day->id,
                    'start_time' => $day->start_time,
                    'end_time' => $day->end_time,
                ];
            }
//            $currentURL =\URL::current();
//            echo($currentURL);
            return $this->responseFactory->json($schedule, 200);
        } else
            return $this->responseFactory->json(null, 404);
    }

    function getServiceDuration($service_id){
        $service = Service::findOrFail($service_id)->select("duration");
        dd($service);
    }
}
