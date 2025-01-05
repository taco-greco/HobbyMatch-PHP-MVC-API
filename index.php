<?php require './inc/header.php'; ?>
<?php require './inc/config.php'; ?>
<?php
$phrase = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique eget
nulla at eleifend. Integer et sapien eu velit facilisis vestibulum sit amet eu leo. Mauris
vitae viverra nunc. Nullam sit amet urna et ante suscipit pharetra. Pellentesque ut finibus
quam. Proin vitae laoreet quam, ut pharetra nibh. Sed ornare.";
$extrait = firstWords(count: 12,sentence: $phrase )."...";
var_dump($extrait);
?>

<h1>Bienvenue !!</h1>

<?php require './inc/footer.php'; ?>
