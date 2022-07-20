<?php

require_once 'Transport.php';

class TransportAerien extends Transport
{

    public function envoi($oil, $price)
    {

        return "Envoi par voie aérienne !"."<br>"."Infos : ".$oil." ".$price."<br><br>";

    }

}