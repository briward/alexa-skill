<?php

namespace Thestandingsection\Core\Alexa\Request;

/**
 * Class InvalidRequestException
 */
class InvalidRequestException extends \Exception
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct("There was a problem with validation.");
    }
}