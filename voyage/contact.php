<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="reset.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="contact.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
  <title>Voyage Sony</title>
  </head>
<body>
<?php include('head.php'); ?>
  <!-- Default form contact -->
  <center><form class="text-center p-5">

    <h1> Alors, ça vous tente?</h1>
      <p class="h4 mb-4">Contactez-nous! </p>

      <!-- Name -->
      <input type="text" id="defaultContactFormName" class="form-control mb-4 border border-primary" placeholder="Nom et prénom">

      <!-- Email -->
      <input type="email" id="defaultContactFormEmail" class="form-control mb-4 border border-primary" placeholder="E-mail">

      <!-- Subject -->
      <label>Sujet</label>
      <select class="browser-default custom-select mb-4 border border-primary">
          <option value="" disabled>Choisissez ci-dessous</option>
          <option value="1" selected>Je veux m'inscrire</option>
          <option value="2">Je veux + d'infos</option>
          <option value="3">Je veux un stagiaire simplonien.ne</option>
          <option value="4">Je veux une bière</option>
      </select>

      <!-- Message -->
      <div class="form-group">
          <textarea class="form-control rounded-0 border border-primary" id="exampleFormControlTextarea2" rows="3" placeholder="Votre message"></textarea>
      </div>

      <!-- Copy -->
      <div class="custom-control custom-checkbox mb-4">
          <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
          <label class="custom-control-label" for="defaultContactFormCopy">Envoyez-moi une copie de ce message</label>
      </div>

      <!-- Send button -->
      <button class="btn btn-warning font-weight-bold accent-4 btn-block" type="submit">C'est parti!</button>

  </form></center>
  <!-- Default form contact -->
<?php include('foot.php'); ?>
</body>
</html>
