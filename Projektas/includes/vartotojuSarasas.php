<?php

class Sarasas
{
    private $vartotojai = [];

    public function PridetiVartotoja(Vartotojas $vartotojas)
    {
        $this->vartotojai[] = $vartotojas;
    }
    public function GautiAdresatus(){
        return$this->vartotojai;
    }
}