<?php
namespace App\Models;

interface LoggableInterface {


    /**
     * Get Loggable type for message generation
     * 
     * @return string
     */

    public function convertToLoggableString():string;

    /**
     * Get ;oggable object data for log context
     * 
     * @return array
     */

    public function getData(): array;
}