<?php

class Event
{
    private $data;
    private $vieta;
    private $pavadinimas;
    private $kategorija;
    private $kontaktai;
    private $info;
    private $sunkumas;

    public function __construct($pavadinimas,$data,$vieta,$kategorija,$kontaktai,$info,$sunkumas)
    {
        $this->pavadinimas=$pavadinimas;
        $this->data=$data;
        $this->vieta = $vieta;
        $this->kategorija=$kategorija;
        $this->kontaktai=$kontaktai;
        $this->info=$info;
        $this->sunkumas=$sunkumas;
    }

    public function getPavadinimas()
    {
        return $this->pavadinimas;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getVieta()
    {
        return $this->vieta;
    }

    /**
     * @return mixed
     */
    public function getKategorija()
    {
        return $this->kategorija;
    }

    /**
     * @return mixed
     */
    public function getKontaktai()
    {
        return $this->kontaktai;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return mixed
     */
    public function getSunkumas()
    {
        return $this->sunkumas;
    }
}