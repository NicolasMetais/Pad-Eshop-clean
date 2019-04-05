<?php
    function getMyself()
    {
        $bdd = dbConnect();
        $req = $bdd->query('SELECT pseudo,lastname,firstname,Email FROM profil');
        return $req;
    }

    function getMyAdresses(){
        $bdd = dbconnect();
        $req = $bdd->query('SELECT adresse1,adresse2 FROM profil');
        return $req;
    }

    function getMyOrders(){
        $bdd = dbconnect();
        $req = $bdd->query('SELECT * FROM orderInProgress');
        return $req;
    }

    function getMyProducts(){
        $bdd = dbconnect();
        $req = $bdd->query('SELECT * FROM produits LIMIT 0,15');
    }

function dbConnect()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce test;charset=utf8', 'root', '');
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>