<?php

namespace Exceptions;

class NotFoundException extends RestApplicationException {

    public function _construct(string $message = "Not Found", string $name = "") {
        parent::__construct($message, $name, 404);
    }
}

