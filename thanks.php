

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <p>
   <?php
   echo  "Merci " . $_POST['user_firstname'] ." ". $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['user_subject'] . nl2br("." . PHP_EOL)
   . "Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email']. " ou par téléphone au " .
   $_POST['user_number'] . " dans les plus brefs délais pour traiter votre demande : "
      . $_POST['user_message'];
   ?>
   </p>
</body>
</html>
