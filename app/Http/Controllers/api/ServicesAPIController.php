<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Routing\ResponseFactory;

class ServicesAPIController extends Controller
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

    function getMostPopularServices(){
        $mostPopularServices = Service::all()
            ->sortByDesc('appointments_nr')
            ->take($itemCount = 3);
        $mostPopularServicesArray = [];
        foreach ($mostPopularServices as $service) {
            $mostPopularServicesArray[] = [
                'id' => $service->id,
                'name' => $service->name,
                'description' => $service->description,
                'duration' => $service->duration,
                'appointments_nr' => $service->appointments_nr,
            ];
        }
        return $this->responseFactory->json($mostPopularServicesArray, 200);
    }
}
