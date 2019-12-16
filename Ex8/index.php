<?php
$partNb = 7;
$exerciseNb = 'Exercice 8';
include '../header.php';
$style = "";
$gender = "";
$fileDetails = "";
$fileExtension = "";

// Cette fonction va nous permettre de vérifier l'extension du fichier téléchargé et d'afficher un message en fonction du résultat retourné.
function verifyExtension() {
    // On vérifie d'abord si le champ est vide, si ce n'est pas le cas on va chercher puis on vérifie l'extension du fichier et on affiche des messages différents selon les trois cas possibles : vide, pdf ou différent de pdf.
    if ($_FILES['userFile']['name'] == "") {
        echo ('Vous n\'avez envoyé aucun fichier pour cette fois-ci.');
    } else {
        $fileDetails = pathinfo($_FILES['userFile']['name']);
        $fileExtension = $fileDetails['extension'];
        if ($fileExtension == 'pdf') {
            echo ('Le fichier que vous nous avez envoyé est le suivant : ' . $_FILES['userFile']['name'] . '.');
        } else {
            echo ('Votre fichier n\'est pas un PDF, veuillez modifier le type de fichier que vous souhaitez uploader.');
        }
    }
}

if (isset($_POST['gender']) & isset($_POST['lastName']) & isset($_POST['firstName']) & isset($_FILES['userFile'])) {
    $lastName = strip_tags($_POST['lastName']);
    $firstName = strip_tags($_POST['firstName']);
    // Par souci de syntaxe, on attribue d'abord une chaîne de caractères viable à la variable $gender plutôt que d'inclure directement Homme ou Femme à la phrase à afficher.
    if ($_POST['gender'] == 'Femme') {
        $gender = 'Madame';
    } else {
        $gender = 'Monsieur';
    }
    $style = "style='display:none;'";
    echo ('<p>Bonjour à vous, <span class="font-weight-bold">' . $gender . ' ' . $lastName . ' ' . $firstName . '</span>.</p>');
    echo ('<div class="w-100 p-2"></div>');
    // En fonction du genre déclaré dans le formulaire, on affiche une image animée différente.
    if ($gender == 'Monsieur') {
        echo ('<img class="rounded-circle h-50" src="../assets/img/hiMariah.webp" alt="Mariah Carey say Hi">');
    } else {
        echo ('<img class="rounded-circle h-50" src="../assets/img/DavidHasseloffSayHi.gif" alt="David Hasseloff say Hi">');
    }
    echo ('<div class="w-100 p-1"></div>');
    // On affiche un message différent en fonction de l'envoi du fichier (vide ou non).
    verifyExtension($_FILES);
    echo ('<p class="p-2">Si vous voulez changer d\'identité et/ou de fichier à envoyer, vous pouvez <a title="Retourner vers le formulaire" href="index.php" class="text-danger font-weight-bold">cliquer ici</a> pour revenir au formulaire et ainsi modifier tout ça.</p>');
}
?>
<form method="post" action="index.php" enctype="multipart/form-data" <?php echo $style; ?>>
    <label for="gender">Renseignez votre genre :</label>
    <div class="w-100 p-1"></div>
    <select id="gender" name="gender">
        <option value="Femme">Femme</option>
        <option value="Homme">Homme</option>
    </select>
    <div class="w-100 p-2"></div>
    <label for="lastName">Renseignez votre nom de famille :</label>
    <div class="w-100 p-1"></div>
    <input type="text" id="lastName" name="lastName" placeholder="Nom" required/>
    <div class="w-100 p-2"></div>
    <label for="firstName">Renseignez votre prénom :</label>
    <div class="w-100 p-1"></div>
    <input type="text" id="firstName" name="firstName" placeholder="Prénom" required/>
    <div class="w-100 p-2"></div>
    <label for="userFile">Joindre un fichier :</label>
    <div class="w-100 p-1"></div>
    <input type="file" id="userFile" name="userFile" />
    <div class="w-100 p-1"></div>
    <input type="submit" value="Envoyer"/>
</form>
<?php
include '../footer.php';
