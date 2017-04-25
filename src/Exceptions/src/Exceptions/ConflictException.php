<?php

namespace Exceptions;

class ConflictException extends RestApplicationException {

    public function _construct(string $message = "Conflict", string $name = "") {
        parent::__construct($message, $name, 409);
    }
}

