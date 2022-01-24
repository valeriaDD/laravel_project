<?php

namespace App\Services;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger{
    
    protected function collectRequestData(Request $request): array
    {
        return [
            'ip' => $request->ip(),         // ip request to understand where our website is more popular
            'date-time' => Carbon::now(),   // date time - to know when our website is accessed the most
            'method' => $request->getMethod(),                       // Method used in request 
            'uri' => $request->getRequestUri(),                      // Where the request was initiated 
            'email' => $request->email,
            'gender' => $request->gender,                            // Request info
        ];
    }

}