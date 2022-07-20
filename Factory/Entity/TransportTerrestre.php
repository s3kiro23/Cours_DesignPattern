<?php

require_once 'Transport.php';

class TransportTerrestre extends Transport
{

    public function envoi($oil, $price)
    {

        return "Envoi par voie terrestre!"."<br>"."Infos : ".$oil." ".$price."<br><br>";

    }

}