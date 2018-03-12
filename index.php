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