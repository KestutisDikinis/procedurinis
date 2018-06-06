<?php


class Kalendoriuss
{
    private $events = [];

    public function setEvents(Event $events)
    {
        $this->events[] = $events;
    }

    public function getEvents()
    {
        return $this->events;
    }
}