<?php

namespace App\Http\Middleware;

use App\Models\LoggableInterface;
use App\Services\DummyRequestActivityLogger;
use App\Services\UserRepresentationTrait;
use Closure;
use Request;


class LogActivityMidlewear {

    use UserRepresentationTrait;

    public function __construct(DummyRequestActivityLogger $logger)
    {
        $this->logger = $logger;
        
    }

    public function handle(Request $request, Closure $next, ? string $type = null){

        $user = $request->getUser();

        $this->logger->logRequest($request, $type ?? "unknown page");

        return $next($request);
    
    }

}