<h1>Nouvel article</h1>
<form action="#" method="post">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre" value="<?php if(isset($titre)) echo $titre;?>"/>
    </div>
    <div>
        <label for="titre">Sous titre : </label>
        <input type="text" id="chapo" name="chapo" value="<?php if(isset($chapo)) echo $chapo;?>"/>
    </div>
    <div>
        <label for="article">Votre article : </label>
        <input type="text" id="contenu" name="contenu" value="<?php if(isset($contenu)) echo $contenu;?>"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" name="frmArticle" />
    </div>
</form>