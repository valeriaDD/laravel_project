<?php

namespace App\Models;


interface OtherLoggableInterface{
    /**
     * Get Location of the Log interception:
     * 
     * @return String
     */

    public function getStringLocation():string;

    /**
     * Get collected data in Log interception:
     * 
     * @return Array
     */
    public function getArrayData():array;

}