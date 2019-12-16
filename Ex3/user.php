<?php
$partNb = 7;
$exerciseNb ='Exercice 3';
include '../header.php';
?>

<p>Bonjour <?php echo strip_tags($_GET['firstName'].' '.$_GET['lastName']); ?> !</p>
<div class="w-100 p-1"></div>
<img class="rounded-circle h-50" src="../assets/img/hiMariah.webp" alt="Mariah Carey say Hi">
<div class="w-100 p-2"></div>
<p>Si tu veux changer d'identité, tu peux <a title="Retourner vers le formulaire" href="index.php" class="text-danger font-weight-bold">cliquer ici</a> pour revenir à la page précédente et ainsi modifier tout ça.</p>
<?php
include '../footer.php';
