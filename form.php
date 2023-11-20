<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_lastname">
    </div>
    <div>
    <div>
      <label for="nom">Prénom :</label>
      <input type="text" id="nom" name="user_firstname">
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email">
    </div>
    <div>

      <div>
        <label for="phone-number">Numéro :</label>
        <textarea type="tel" id="phone-number" name="user_number"></textarea>
      </div>
      <div>
        <label for="subject-select">Sujet :</label>
        <select id="subject-select" name="user_subject">
          <option value="">
            -- Choisissez un sujet --
          </option>
          <option value="blabla">Blabla</option>
        </select>
      </div>
      <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
      </div>

      <div class="button">
        <button type="submit">Envoyer votre message</button>
      </div>
  </form>
</body>
</html>