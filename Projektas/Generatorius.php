<?php

class Generatorius
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function Generuoti(): Kalendoriuss
    {
        $rez = $this->database->execute('Select * from `events`');

        $kalendorius = new Kalendoriuss();

        foreach ($rez as $event) {
            $kalendorius->setEvents(new Event(
                $event['event_pavadinimas'],
                $event['event_data'],
                $event['event_vieta'],
                $event['event_kategorija'],
                $event['event_kontaktai'],
                $event['event_info'],
                $event['event_diff']
            ));
        }
        return $kalendorius;
    }
}