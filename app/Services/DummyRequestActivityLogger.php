<?php

namespace App\Services;

use Request;

class DummyRequestActivityLogger extends AbstractRequestActivityLogger{
    
    protected function collectRequest(Request $request): array
    {
        return ['any data'];
    }

}