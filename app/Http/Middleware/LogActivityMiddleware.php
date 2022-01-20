<?php

namespace App\Http\Middleware;

use App\Services\DummyRequestActivityLogger;
use App\Services\DebugRequestActivityLogger;
use App\Services\ProductionRequestActivityLogger;
use Closure;
use Illuminate\Http\Request;


class LogActivityMiddleware {

    private DummyRequestActivityLogger $logger;

    /**
     * @param DummyRequestActivityLogger $logger;
     * @param DebugRequestActivityLogger $loggerDebug;
     * @param ProductionRequestActivityLogger $loggerProduction;
     */

    public function __construct(DummyRequestActivityLogger $logger,
                                DebugRequestActivityLogger $loggerDebug,
                                ProductionRequestActivityLogger $loggerProduction)
    {
        $this->logger = $logger;
        $this->loggerDebug = $loggerDebug;
        $this->loggerProduction = $loggerProduction;
        
    }
    
    /**
     * @param Request $request
     * @param Closure $next
     * @param string|null $type
     */

    public function handle( $request, Closure $next, ?string $type = null){
        
        $this->logger->logRequest($request, $type ?? 'unknown page');
        $this->loggerDebug->logRequest($request, $type ?? 'unknown page');
        $this->loggerProduction->logRequest($request, $type ?? 'unknown page');

        return $next($request);
    
    }

}