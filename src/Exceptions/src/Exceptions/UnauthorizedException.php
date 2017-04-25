<?php

namespace Exceptions;

class UnauthorizedException extends RestApplicationException {

    public function _construct(string $message = "Unauthorized", string $name = "") {
        parent::__construct($message, $name, 401);
    }
}

