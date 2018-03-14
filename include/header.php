<header>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=registration">Inscription</a></li>
            <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
                echo "<li><a href=\"index.php?page=deconnexion\">Deconnexion</a></li>";
            }
            else {
                echo "<li><a href=\"index.php?page=authentication\">Connexion</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
