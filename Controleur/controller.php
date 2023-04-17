<?php
require('Modele/modele.php');
function register($pseudo,$mdp,$email){
    if (registering($pseudo,$mdp,$email)){
        $login = getLogging($pseudo);
        $articles = getAllArt();
        $tArticles = titreArtOnly();
        require('Vue/indexView.php');
    }else echo 'Pseudo déja utilisé';
}
function loged($pseudo,$mdp){
    if (logering($pseudo,$mdp)) {
        $login = getLogging($pseudo);
        $articles = getAllArt();
        $tArticles = titreArtOnly();
        require('Vue/indexView.php');
    } else echo 'Vérifiez votre mot de passe ou votre pseudo';
}

function start(){
    $login = null;
    $articles = getAllArt();
    $tArticles = titreArtOnly();
    require('Vue/indexView.php');
}

function testEdit($pseudo,$id){
    if (verifAuteur($pseudo,$id)) return true;
    else return false;
}

function affArt($pseudo,$id){
    $login = $pseudo;
    $article = getArt($id);
    require('Vue/articleView.php');
}

function doNotDelogIndex($pseudo){
    $login = $pseudo;
    $articles = getAllArt();
    $tArticles = titreArtOnly();
    require('Vue/indexView.php');
}
function creeArticle($pseudo){
    $login = $pseudo;
}