<h1>Home</h1>
<h2>Bienvenue dans le blog des AP17</h2>
<h3>Articles</h3>
<?php
$bdd = new PDO('mysql:dbname=ap;host=localhost;charset=utf8', 'ap', 'ap');
$articles = $bdd->query('select * from t_articles order by id_articles desc');
while($res = $articles->fetch())
{
echo $res['arttitre'] . '<br/>' . $res['artchapo']  . '<br/>' . $res['artcontenu'] . '<br/><br/>';
}