<?php

namespace App\Services;

use PharIo\Manifest\Requirement;
use Psr\Log\LoggerInterface;
use Request;

abstract class AbstractRequestActivityLogger implements requestActivityLogger{

    use UserRepresentationTrait;

    private LoggerInterface $logger;


    public function __construct( L)
    {
        
    }

    public function logRequest(Request $request, string $type): void
    {
        $this->logger->
        debug($this->identifyUserRepresentation($request->user) . "made a request to " . $type, 
        $this->collectRequest($request));
    }

    abstract protected function collectRequest(Request $request): array;

}