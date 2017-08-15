<?php
/**
 * Created by PhpStorm.
 * User: parker
 * Date: 8/15/17
 * Time: 1:56 PM
 */

namespace Storage\Jacks;


use Domain\ChatRoom;

class ChatRoomJack
{
    protected $plugin;

    public function getByID($id)
    {
        return $this->plugin->getByID($id);
    }

    public function getAll()
    {
        return $this->plugin->getAll();
    }

    public function persist(ChatRoom $room)
    {
        return $this->plugin->persist($room);
    }
}