<h1>Nouvel article</h1>
<?php
if (isset($_POST['frmArticle'])) {
    $titre = $_POST['titre'] ?? "";
    $chapo = $_POST['chapo'] ?? "";
    $contenu = $_POST['article'] ?? "";
    $erreurs = array();
    if ($titre == "") array_push($erreurs, "Veuillez saisir un titre");
    if ($chapo == "") array_push($erreurs, "Veuillez saisir un chapo");
    if ($contenu == "") array_push($erreurs, "Veuillez saisir un article");
    if (count($erreurs) > 0) {
        $message = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $message .= "<li>";
            $message .= $erreurs[$i];
            $message .= "</li>";
        }
        $message .= "</ul>";
        echo $message;
        include "frmArticle.php";
    } else {
        $rec = new Queries();
        $sql = "INSERT INTO t_articles
                (arttitre, artchapo, artcontenu)
                VALUES ('$titre', '$chapo', '$contenu')";
        die($sql);
        $rec -> insert($sql);
    }
}
else {
    include "frmArticle.php";
}
?>
