<?php

class Adaptateur
{

    public static function generate($dataXML){

        $toEncode = simplexml_load_string($dataXML);
        return json_encode($toEncode);

    }

}