<?php

namespace Exceptions;

class BadRequestException extends RestApplicationException {

    public function _construct(string $message = "Bad Request", string $name = "") {
        parent::__construct($message, $name, 400);
    }
}

