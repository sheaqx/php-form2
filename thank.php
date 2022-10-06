<?php

$nomErr = $prenomErr = $emailErr = $telephoneErr = $sujetErr = $messageErr =  "";
$nom = $prenom = $email = $telephone = $sujet = $message = "";

$errors = [];

function sanitizePost(string $data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  return htmlspecialchars($data);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];

  if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($telephone) && !empty($sujet) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $nom = sanitizePost($nom);
      $prenom = sanitizePost($prenom);
      $email = sanitizePost($email);
      $telephone = sanitizePost($telephone);
      $sujet = sanitizePost($sujet);
      $message = sanitizePost($message);
    } else {
      $errors[] = "Address e-mail n'est pas comforme";
    }
  } else {
    $errors[] = "Tous les champs doivent être remplis";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
  <title>Form</title>
</head>

<body>
  <a href="form.php"></a>
  <div class="container">
    <?php
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        echo $error;
      }
    } else {
      echo "<h1> Merci $nom $prenom de nous avoir contacté à propos de $sujet </h1>
        <h2>Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande : </h2>
        <h3> $message </h3>";
    }


    ?>

  </div>
</body>

</html>

<!-- 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nom"])) {
$nameErr = "Le nom doit etre remplis";
} else {
$nom = sanitizePost($nom);
}

if (empty($_POST["prenom"])) {
$prenom = "Le prénom doit etre remplis";
} else {
$prenom = sanitizePost($prenom);
}

if (empty($_POST["email"])) {
$email = "L'e-mail doit etre remplis";
} else {
$email = sanitizePost($email);
}

if (empty($_POST["telephone"])) {
$telephone = "Le télephone doit etre remplis";
} else {
$telephone = sanitizePost($telephone);
}

if (empty($_POST["sujet"])) {
$sujet = "Le sujet doit etre selectioner";
} else {
$sujet = sanitizePost($sujet);
}

if (empty($_POST["message"])) {
$message = "Le message doit etre ecrit";
} else {
$message = sanitizePost($message);
}
} -->