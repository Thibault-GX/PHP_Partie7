<?php
$partNb = 7;
$exerciseNb = 'Exercice 6';
include '../header.php';
$style = "";
$gender = "";

if (isset($_GET['gender']) & isset($_GET['lastName']) & isset($_GET['firstName']))
{
    $lastName = strip_tags($_GET['lastName']);
    $firstName = strip_tags($_GET['firstName']);
    // Par souci de syntaxe, on attribue d'abord une chaîne de caractères viable à la variable $gender plutôt que d'inclure directement Homme ou Femme à la phrase à afficher.
    if ($_GET['gender'] == 'Femme')
{
    $gender = 'Madame';
}
else
{
    $gender = 'Monsieur';
}
    $style = "style='display:none;'";
    echo ('<p>Bonjour à vous, <span class="font-weight-bold">'.$gender.' '.$lastName.' '.$firstName.'</span>.</p>');
    echo ('<div class="w-100 p-2"></div>');
    echo ('<img class="rounded-circle h-50" src="../assets/img/hiMariah.webp" alt="Mariah Carey say Hi">');
    echo ('<div class="w-100 p-1"></div>');
    echo ('<p class="p-2">Si tu veux changer d\'identité, tu peux <a title="Retourner vers le formulaire" href="index.php" class="text-danger font-weight-bold">cliquer ici</a> pour revenir au formulaire et ainsi modifier tout ça.</p>');
}
?>
<form method="get" action="index.php"<?php echo $style;?>>
    <label>Renseignez votre genre :</label>
    <div class="w-100"></div>
    <select name="gender">
        <option value="Femme">Femme</option>
        <option value="Homme">Homme</option>
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
