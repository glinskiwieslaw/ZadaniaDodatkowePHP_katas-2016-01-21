<?php

class Math
{

    /** 1. Czy liczba jest pierwsza?
     * 2. Czy liczba jest parzysta?
     * 3. Czy liczba jest wielokrotnością 10?*/

    public $liczba;
public $odpowiedz;

    public function __construct($x)
    {
        $this->liczba = $x;
         return array($this->liczbaPierwsza(), $this->liczbaParzysta(), $this->liczbaWielokrotnosc10());


    }


    function liczbaPierwsza()
    {
        if ($this->liczba % $this->liczba == 0) {
            return true;
        } else {
            return false;
        }
    }


    function liczbaParzysta()
    {
        if ($this->liczba % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    function liczbaWielokrotnosc10()
    {
        if ($this->liczba % 10 == 0) {
            return true;
        } else {
            return false;
        }

    }


}