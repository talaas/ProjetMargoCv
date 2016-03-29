<?php

define('DataSourceName', 'mysql:host=;dbname=margo2;charset=utf8');
define('Utilisateur', 'root');
define('MotDePasse', 'joliverie');

class Connexion {

    private static $PHPDataObject, $etat;

    public static function seConnecter() {

        self:: $PHPDataObject = new PDO(DataSourceName, Utilisateur, MotDePasse);
        self:: $PHPDataObject->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        self:: $PHPDataObject->query("SET NAMES utf8");

        return self:: $PHPDataObject;
    }

    public static function seDeconnecter() {
        self:: $PHPDataObject = null;
    }

    public static function getPdo() {
        return self:: $PHPDataObject;
    }

}
