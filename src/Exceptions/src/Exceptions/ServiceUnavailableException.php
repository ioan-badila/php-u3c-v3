<?php

namespace Exceptions;

class ServiceUnavailableException extends RestApplicationException {

    public function _construct(string $message = "Service Unavailable", string $name = "") {
        parent::__construct($message, $name, 503);
    }
}

