<?php

namespace App\Services;
use App\Models\OtherLoggableInterface;
use App\Models\User;
use Psr\Log\LoggerInterface;


class OtherModelLogger
{
    private LoggerInterface $logger;
    use UserRepresentationTrait;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function mylog(?User $user, OtherLoggableInterface $loggable): void
    {
        $this->logger->info(
            $this->identifyUserRepresentation($user) . ' accesed ' . $loggable->getStringLocation(),
            $loggable->getArrayData(),
        );
    }
}