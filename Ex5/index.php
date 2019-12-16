<?php
$partNb = 7;
$exerciseNb = 'Exercice 5';
include '../header.php';
?>
<form method="get" action="index.php">
    <label>Renseignez votre genre :</label>
    <div class="w-100"></div>
    <select name="gender">
        <option value="woman">Femme</option>
        <option value="man">Homme</option>
    </select>
    <div class="w-100 p-2"></div>
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
