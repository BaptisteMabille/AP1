<?php
ini_set('smtp port', 1025);
include "./functions/classAutoLoader.php";
spl_autoload_register("classAutoLoader");
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8"/>
    <title>CESI AP - Blog</title>
    <link rel="stylesheet" href="assets/css/style.css"
</head>
<body>
<div id="container">

    <?php
    include "./include/header.php";

    $page = $_GET['page'] ?? "";
    $page = "./include/" . $page . ".inc.php";

    $files = glob("./include/*.inc.php");

    if(in_array($page, $files))
        include $page;
    else
        include "./include/home.inc.php";

    include "./include/footer.php";
    ?>
</div>
</body>
</html>