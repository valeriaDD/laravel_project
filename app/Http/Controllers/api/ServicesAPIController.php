<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function getMostPopularServices()
    {
        $mostPopularArticles = Service::all()
            ->sortByDesc('appointments_nr')
            ->take(3);
        $articlesArray = [];
        foreach ($mostPopularArticles as $service) {
            $articlesArray[] = [
                'id' => $service->id,
                'name' => $service->name,
                'description' => Str::limit($service->description, 100),
                'duration' => $service->duration,
                'image' =>$service->image,
                'appointments_nr' => $service->appointments_nr,
            ];
        }
        return $this->responseFactory->json($articlesArray, 200);
    }

    public function getServiceInformation($id)
    {

        $service = Service::find($id);

        if ($service) {
            $serviceInformation = [
                'id' => $service->id,
                'name' => $service->name,
                'description' => $service->description,
                'duration' => $service->duration,
                'appointments_nr' => $service->appointments_nr,
            ];
            return $this->responseFactory->json($serviceInformation, 200);
        }
        return $this->responseFactory->json([], 400);
    }
}
