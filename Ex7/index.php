<?php
$partNb = 7;
$exerciseNb = 'Exercice 7';
include '../header.php';
$style = "";
$gender = "";

if (isset($_POST['gender']) & isset($_POST['lastName']) & isset($_POST['firstName']) & isset($_FILES['userFile']['name']))
{
    $lastName = strip_tags($_POST['lastName']);
    $firstName = strip_tags($_POST['firstName']);
    // Par souci de syntaxe, on attribue d'abord une chaîne de caractères viable à la variable $gender plutôt que d'inclure directement Homme ou Femme à la phrase à afficher.
    if ($_POST['gender'] == 'Femme')
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
    // En fonction du genre déclaré dans le formulaire, on affiche une image animée différente.
    if ($gender == 'Monsieur')
    {
        echo ('<img class="rounded-circle h-50" src="../assets/img/hiMariah.webp" alt="Mariah Carey say Hi">');
    }
    else
    {
        echo ('<img class="rounded-circle h-50" src="../assets/img/DavidHasseloffSayHi.gif" alt="David Hasseloff say Hi">');
    }
    echo ('<div class="w-100 p-1"></div>');
    // On affiche un message différent en fonction de l'envoi du fichier (vide ou non).
    if ($_FILES['userFile']['name'] == "")
    {
        echo ('Vous avez décidé de ne pas nous envoyer de fichier cette fois-ci.');
    }
    else
    {
        echo ('Le fichier que vous nous avez envoyé est le suivant : '.$_FILES['userFile']['name'].'.');
    }
    echo ('<p class="p-2">Si vous voulez changer d\'identité et/ou de fichier à envoyer, vous pouvez <a title="Retourner vers le formulaire" href="index.php" class="text-danger font-weight-bold">cliquer ici</a> pour revenir au formulaire et ainsi modifier tout ça.</p>');
}
?>
<form method="post" action="index.php" enctype="multipart/form-data" <?php echo $style;?>>
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
    <div class="w-100 p-2"></div>
    <label>Joindre un fichier :</label>
    <input type="file" name="userFile" />
    <div class="w-100 p-1"></div>
    <input type="submit" value="Envoyer"/>
</form>
<?php
include '../footer.php';
