<?php
$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$subject = $_POST['user_subject'];
$email = $_POST['user_email'];
$phone = $_POST['user_number'];
$message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Merci <?= $firstname ?> <?= $lastname ?> de nous avoir contacté à propos de “<?= $subject ?>”.</h1>
   <p>
   Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : 

   <?= $message ?>
   </p>
</body>
</html>
