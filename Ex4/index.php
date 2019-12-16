<?php
$partNb = 7;
$exerciseNb ='Exercice 4';
include '../header.php';
?>
<form method="post" action="user.php">
    <label>Renseignez votre nom de famille :</label>
    <div class="w-100"></div>
    <input type="text" name="lastName" placeholder="Nom" required/>
    <div class="w-100 p-2"></div>
    <label>Renseignez votre prénom :</label>
    <div class="w-100"></div>
    <input type="text" name="firstName" placeholder="Prénom" required/>
    <div class="w-100 p-1"></div>
    <input type="submit" value="Envoyer"/>
</form>
<?php
include '../footer.php';