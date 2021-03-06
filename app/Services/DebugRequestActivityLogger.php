<?php

namespace App\Services;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger{
    
    protected function collectRequestData(Request $request): array
    {
        return [
            'date-time' => Carbon::now(), 
            'method' => $request->getMethod(),                       // Method used in request 
            'uri' => $request->getRequestUri(),                      // Where the request was initiated 
            'executionTime' => microtime(true) - LARAVEL_START,      // Total execution time
            'secured' => $request->secure(),
            'data' => $request->all(),
            'requestHeader' => $request->header()
        ];
    }

}