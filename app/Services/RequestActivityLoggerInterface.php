<?php

namespace App\Services;
use Request;


interface requestActivityLogger{
    
    public function logRequest(Request $request, string $type):void;
}