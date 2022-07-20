<?php

require_once 'Transport.php';

class TransportNaval extends Transport
{

    public function envoi($oil, $price)
    {

        return "Envoi par voie navale !"."<br>"."Infos : ".$oil." ".$price."<br><br>";

    }


}
