<?php

namespace App\Services;

use Illuminate\Http\Request;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger{
    
    protected function collectRequestData(Request $request): array
    {
        return [
            'method' => $request->getMethod(),              // Method used in request 
            'uri' => $request->getRequestUri(),             // Where the request was initiated 
            'seconds' => microtime(true) - LARAVEL_START,   // Total execution time
        ];
    }

}