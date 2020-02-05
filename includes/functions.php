<?php  

require 'includes/data.php';

function getTitle($page){
    global $pagesTitles;
    return $pagesTitles[$page];
}

function getBody($page){
    include "pages/$page.php";
    //return "getBody : $page";
}

function getFooter($page){
    include 'partials/footer.php';
    //return "getFooter : $page";
}

function getPages(){
    global $pagesTitles;
    return array_keys($pagesTitles);   
}

function getMultipleArray($elements, $class){
    $ret = ""; 
    $ret.= "<div class='$class'>";
    foreach($elements as $element){
        $ret.= "<ul class='$class'>";
        foreach($element as $k => $v){
            $ret.= "<li>";
           $ret.= "<span class='marray_label'>$k</span>";
           $ret.= "&nbsp;<span class='marray_value'>$v</span>";
           $ret.= "</li>";
        }
        $ret.= "</ul>";
    }
    $ret.= "</div>";
    return $ret;
}
function getAndIncrementCompteur(){
    if (!file_exists("compteur.txt")){
        file_put_contents("compteur.txt", "0");
    }
    $content = file_get_contents("compteur.txt");
    $content++;  
    file_put_contents("compteur.txt", $content);

    return $content;
}

function getBddN(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT nom FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddP(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT prenom FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prenom'] . '<br />' ;
}

$reponse->closeCursor();

}

function getBddD(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT age FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['age']  ;
}

$reponse->closeCursor();

}
function getBddA(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT adresse FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['adresse'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddV(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT ville FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddM(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT mail FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['mail'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddT(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT telephone FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['telephone'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddPer(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT permis FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['permis'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddPoste(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT poste FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['poste'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddEnt(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT entreprise FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['entreprise'] . '<br /><' ;
}

$reponse->closeCursor();

}

function getBddVil(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT ville FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeBts(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT diplome  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['diplome'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeLieux(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT lieux  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['lieux'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeVille(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT ville  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeBac(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT diplome  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['diplome'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeLieuxB(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT lieux  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['lieux'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeVilleB(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT ville  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirUn(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom FROM loisir WHERE id = '1' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirDeux(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirTrois(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom']  ;
}

$reponse->closeCursor();

}
function getBddLoisirQuatre(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '4' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}

?>

