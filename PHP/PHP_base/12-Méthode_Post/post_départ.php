<!--un formulaire codé seulement en HTML et CSS n'a pas d'uttilité . On doit lui ajouter un traitement PHP pour pouvoir récuperer les infos renseignées dedans et les uttiliser plus tard. C'est Php qui va rendre dynamique le formulaire, sinon, on ce n'est qu'un simple affichage-->
<!--pour que le formulaire soit connecté à la méthode POST, il faut absoulument ecrire dans la balise form method-POST action qui sert a autre chose on verra ça plus tard -->

<forrm method=POST action="">
<!--dans les attributs du champs Prénom ci dessous, seul name=prenom est important,obligatoire en PHP, pour que les informations puissent être récupérées et envoyées en BDD. for (dans le label et id sont par contre utile en affichage pour l'ux, améliore l'experience uttilisateur)-->

<!--l'attribut name est indispensable pour que les données puissent être envoyés en bdd-->

<label for="prenom">Prenom</label>
<input type="text" id="prenom"name="prenom" placeholder="Votre prenom">
<br><br>
<label for="description">Description</label>
<textarea name="description" id="description" cols="15" row="3" placeholder="Votre descripttion"></textarea>
<br><br>
<label for="annee">Année de naissance</label>
<select name="anne" id="annee">
    <?php
        for($annee= date('Y');$annee >= date('Y')-100; $annee--){
            echo"<option>$annee </option>";
        }
    ?>
</select>
<br><br>
<input type="sbmit" value="Soumettre">
</forrm>
<!--si je n'ecris pas cette condition if($_POST) j'aurais droit aux warning.undifined key prenom, key description etc... C'est normal au premier chargement de la page, le formulaire est vide aucune info n'a encore transité d'ou le undifined key-->

<!--Ci dessousk, syntaxe contractée pour une condition if(). Elle permet de generer plus rapidement du code HTML que si on était dans un grand PHP necessitant beaucoup d'echos-->
<?php if($_POST):?>
    
    <!-- J'ai besoin de la superglobale $_POST pour récupérer les infos qui ont transité dans le formulaire. je crochete à l'indice qui s'interresse (cet indice existe car on l'a renseigné pour l'attribut name dans le formulairen d'ou l'uttilité de name)-->
<ul>
<li>Prénom : <?=$_POST['prenom']?></li>
<li>Déscription : <?=$_POST['description']?></li>
<li>Année de naissance : <?=$_POST['annee']?></li>
</ul>
<!--la syntaxe if() necessitent pour femer mon endif sinon erreur PHP-->

<?php endif?>