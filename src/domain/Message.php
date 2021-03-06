<?php

namespace Domain;

class Message
{
    protected $userEmail;
    protected $chatRoomID;
    protected $message;
    protected $dateCreated;
    protected $dateUpdated;
    protected $uuid;

    public function __construct($userID, $chatRoomID, $message,
                    $dateCreated, $dateUpdated, $uuid)
    {
        $this->userEmail = $userID;
        $this->chatRoomID = $chatRoomID;
        $this->message = $message;
        $this->dateCreated = $dateCreated;
        $this->dateUpdated = $dateUpdated;
        $this->uuid = $uuid;
    }

    public function email()
    {
        return $this->userEmail;
    }

    public function message($message = null)
    {
        if ($message == null)
        {
            return $this->message;
        }

        $this->message = $message;
    }

    public function chatRoomID()
    {
        return $this->chatRoomID;
    }

    public function created()
    {
        return $this->dateCreated;
    }

    public function updated()
    {
        return $this->dateUpdated;
    }

    public function uuid()
    {
        return $this->uuid;
    }
}