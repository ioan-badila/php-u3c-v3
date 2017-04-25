<?php

namespace Exceptions;

class ForbiddenException extends RestApplicationException {

    public function _construct(string $message = "Forbidden", string $name = "") {
        parent::__construct($message, $name, 403);
    }
}

