<?php

namespace Exceptions;

abstract class RestApplicationException extends \Exception implements \JsonSerializable
{
    const SERIALVERSIONUID = 1;
    private $name = "";

    public function __construct(string $message, string $name = "", int $code = 500) {
        $this->setName($name);
        parent::__construct($message, $code);
    }

    private function getErrorName() {
        return str_replace("Exception", "", get_class($this));
    }

    public function getFullName() {
        //Note on empty(): Because this is a language construct and not a function, it cannot be called using variable functions.
        $name = $this->getName();
        if (empty($name)) {
            return $this->getErrorName();
        }

        return $this->getErrorName(). "__" . $this->getName();
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function jsonSerialize()
    {
        return [
            'name'  => $this->getFullName(),
            'code'  => $this->getCode(),
            'file'  => $this->getFile(),
            'line'  => $this->getLine(),
            'trace' => $this->getTrace()
        ];
    }
}

