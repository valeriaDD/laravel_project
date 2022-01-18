<?php

namespace App\Services;

use PharIo\Manifest\Requirement;
use Psr\Log\LoggerInterface;
use Illuminate\Http\Request;

abstract class AbstractRequestActivityLogger implements RequestActivityLoggerInterface{

    use UserRepresentationTrait;

    private LoggerInterface $logger;


    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logRequest(Request $request, string $type): void
    {
        $this->logger->
            debug($this->identifyUserRepresentation($request->user) . "made a request to " . $type, 
            $this->collectRequestData($request)
        );
    }

    abstract protected function collectRequestData(Request $request): array;

}