<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Kinetotherapeut;
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

    public function getWorkingDays($id){
        $employee = Kinetotherapeut::find($id);

        if($employee) {
            foreach ($employee->workingDays as $day) {
                $schedule[] = [
                    'day' => $day->id,
                    'start_time' => $day->start_time,
                    'end_time' => $day->end_time,
                ];
            }
            return $this->responseFactory->json($schedule, 200);
        }
        else
            return $this->responseFactory->json(null, 404);
    }
}
