<?php

namespace Exceptions;

class UnprocessableEntityException extends RestApplicationException {

    public function _construct(string $message = "Unprocessable Entity", string $name = "") {
        parent::__construct($message, $name, 422);
    }
}

