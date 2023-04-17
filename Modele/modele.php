<?php

function registering($Pseudo,$Mdp,$Email)
{
    $db = getDB();
    $email = filter_var($Email, FILTER_SANITIZE_STRING);
    $login = filter_var($Pseudo, FILTER_SANITIZE_STRING);
    $pass = filter_var($Mdp, FILTER_SANITIZE_STRING);
    $sql = "SELECT login FROM Users WHERE login = :login";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("login", $login);
    if ($stmt->fetch()){
        return false;
    }else {
        $sql = "INSERT INTO Users (login, pass, mail) VALUES (:login,:pass,:email)";
        $stmt = $db->prepare($sql);
        $stmt->bindValue("email", $email);
        $stmt->bindValue("login", $login);
        $stmt->bindValue("pass", $pass);
        return $stmt->execute();
    }
}

function creeArticle($Pseudo)
{
    $db = getDB();
    $login = filter_var($Pseudo, FILTER_SANITIZE_STRING);
    $sql = "SELECT login FROM Users WHERE login = :login";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("login", $login);
    if ($stmt->fetch()){
        return false;
    }else {
        $sql = "SELECT COUNT(id_article) FROM Articles";
        $recupID = $db->prepare($sql);
        $id = $recupID->execute();
        $id_article = $id +1;
        $sql = "INSERT INTO Articles (id_article, titre, resume, image, Auteur) VALUES (:id_article,null,null,null,:login)";
        $createur = $db->prepare($sql);
        $createur->bindValue("login", $login);
        $createur->bindValue("id_article", $id_article);
        $createur->execute();
        return $id_article;
    }
}

function logering($Pseudo,$Mdp){

    $db = getDB();
    $login = filter_var($Pseudo, FILTER_SANITIZE_STRING);
    $pass = filter_var($Mdp, FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM Users WHERE login = :login AND pass = :pass";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("login", $login);
    $stmt->bindValue("pass", $pass);
    $stmt->execute();
    if ($stmt->fetch()) {
        return true;
    }else false;
}

function getLogging($login){
    $db = getDB();
    $login = filter_var($login, FILTER_SANITIZE_STRING);
    $sql = "SELECT login FROM Users WHERE login = :login";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("login", $login);
    $stmt->execute();
    if ($stmt->fetch()) {
        return $login;
    } else return null;
}

function getDB()
{
    include_once('Param.inc.php');
    try {
        $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .
            ";charset=utf8", DB_USER, DB_PASS);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}

function verifAuteur($auteur,$idArt){
    $db = getDB();
    $Auteur = filter_var($auteur, FILTER_SANITIZE_STRING);
    $id_article = filter_var($idArt, FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT Auteur, id_Article FROM Articles WHERE Auteur = :Auteur AND id_article = :id_article";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("Auteur", $Auteur);
    $stmt->bindValue("id_article", $id_article);
    $stmt->execute();
    if ($stmt->fetch()) {
        return true;
    } else return false;
}

function getAllArt(){
    $db = getDB();
    $sql = "SELECT id_Article, titre, resume, image, Auteur FROM Articles ORDER BY id_Article DESC";
    $articles = $db->prepare($sql);
    $articles->execute();
    return $articles;
}

function titreArtOnly(){
    $db = getDB();
    $sql = "SELECT titre FROM Articles ORDER BY id_Article DESC";
    $articles = $db->prepare($sql);
    $articles->execute();
    return $articles;
}

function getArt($id){
    $db = getDB();
    $id_article = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT id_Article, titre, resume, image, Auteur FROM Articles WHERE id_article = :id_article";
    $article = $db->prepare($sql);
    $article->bindValue("id_article", $id_article);
    $article->execute();
    return $article;
}