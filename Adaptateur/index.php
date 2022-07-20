<?php

require_once 'Adaptateur.php';

$dataXML =
'<?xml version="1.0" encoding="UTF-8"?>
<bibliotheque>
    <livre type="poche" style="Policier">
        <titres>
            <titre lang="en">The Templar Legacy</titre>
            <titre lang="fr">L\'Héritage des Templiers</titre>
        </titres>
        <auteur>
            <prenom>Steve</prenom>
            <nom>BERRY</nom>
        </auteur>
        <annee>2006</annee>
    </livre>
    <livre style="Théâtre">
        <titres>
            <titre lang="fr">Le Tartuffe ou l\'Imposteur</titre>
        </titres>
        <auteur>
            <nom>Molière</nom>
        </auteur>
        <annee>1664</annee>
    </livre>
    <livre type="poche" style="Fantastique">
        <titres>
            <titre lang="fr-FR">Les Fourmis</titre>
            <titre lang="en">Empire of the Ants</titre>
        </titres>
        <auteur>
            <nom>WERBER</nom>
            <prenom>Bernard</prenom>
        </auteur>
        <annee>1991</annee>
    </livre>
    <livre style="Bande Dessinée">
        <titres>
            <titre lang="fr">Astérix et Latraviata</titre>
            <titre lang="en">Asterix and the Actress</titre>
            <titre lang="es">Astérix y Latraviata</titre>
            <titre lang="it">Asterix e Latraviata</titre>
        </titres>
        <auteur>
            <nom>UDERZO</nom>
            <prenom>Albert</prenom>
        </auteur>
        <annee>2001</annee>
    </livre>
</bibliotheque>';

$listEncode = Adaptateur::generate($dataXML);

echo json_decode($listEncode['livre']);




