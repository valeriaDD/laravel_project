<?php

namespace App\Services;
use App\Models\LoggableInterface;
use App\Models\User;
use Psr\Log\LoggerInterface;
class ModelLogger
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function logModel(?User $user, LoggableInterface $loggable): void
    {
        $userRepresentation = $user ? "user with id {$user->id}" : "Unknown user";
        $this->logger->info(
            $userRepresentation . 'acessed' . $loggable->convertToLoggableString(),
            $loggable->getData(),
        );
    }
}