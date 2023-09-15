<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>I. Introduction</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
        <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Site Title</li>
                <li class="has-submenu">
                    <a href="#0">One</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="#0">One</a></li>
                        <li><a href="#0">Two</a></li>
                        <li><a href="#0">Three</a></li>
                    </ul>
                </li>
                <li><a href="#0">Two</a></li>
                <li><a href="#0">Three</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><button type="button" class="button">Search</button></li>
            </ul>
        </div>
    </div>
</body>

</html>

Le PHP (Hypertext Preprocessor) est un langage de programmation (fonctionnel) à l'inverse des langages Html et Css qui sont des langages de conception (structure et mise en forme de page web).
Avec PHP, nous pouvons faire tous types de site et il n'y a plus de limite : moteur de recherche (type google), réseaux sociaux (type facebook), plateforme multimédia (type YouTube), site d'informations (type Wikipédia), boutique ecommerce (type amazon), petites annonces (type leboncoin), forum, blog, espace membre, etc.

Pour mieux comprendre, prenons le cas d'un formulaire :
1 formulaire est déclaré en html,
il est mis en forme en css (html + css = conception),
mais si nous voulons récupérer et exploiter les saisies postées par l'internaute nous aurons besoin du PHP qui est un langage permettant d'effectuer des traitements (et c'est bien là le principe, si nous faisons un formulaire c'est pour récupérer des données !).
Autrement dit, sans PHP nous ne pourrons pas faire fonctionner un formulaire.

Ensuite, si nous voulions sauvegardées ces données dans une base, nous aurons besoin du langage SQL.

D'autre part, le PHP permet de créer des sites web dynamiques ! Et c'est très utile !