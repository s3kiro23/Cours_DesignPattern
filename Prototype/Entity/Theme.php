<?php

require_once 'Entity/Database.php';

$db = new Database();
$GLOBALS['db'] = $db->checkDb();

class Theme
{

    private $backgroundColor;
    private $police;
    private $color;

    public function __construct($backgroundColor, $police, $color)
    {
        $this->backgroundColor = $backgroundColor;
        $this->police = $police;
        $this->color = $color;
    }

    static public function create($backgroundColor, $police, $color){

        try {

            $query = $GLOBALS['db']->prepare('INSERT INTO generic_themes (`background`, `police`, `color`)
                VALUES (:background, :police, :color)');

            $query->execute(array(
                'background' => $backgroundColor,
                'police' => $police,
                'color' => $color,
            ));
            // $dbco->exec($sql);

            $GLOBALS['db']->commit();

        } catch (PDOException $e) {
            error_log("Erreur : " . $e->getMessage());
        }

    }

    public function getBackgroundColor(){
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor){
        $this->backgroundColor = $backgroundColor;
    }

    public function getPolice(){
        return $this->police;
    }

    public function setPolice($police){
        $this->police = $police;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

}