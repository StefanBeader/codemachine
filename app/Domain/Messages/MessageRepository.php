<?php

namespace App\Domain\Messages;

use App\Domain\Messages\Message;

class MessageRepository {

    public function store($data)
    {
        return Message::create($data);
    }
}