<?php

namespace App\Domain\Errors;

class ErrorRepository {

    public function store(\Exception $exception)
    {
        Error::create([
            'message' => $exception->getMessage(),
            'code' => $exception->getCode(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
        ]);
    }
}