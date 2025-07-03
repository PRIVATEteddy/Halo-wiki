<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login";


    <form  action="login.php" method="post" >
        
  <div class="container">

    <label for="gebruikerNaam"><b>gebruikernaam</b></label>
    <input type="text" placeholder="Enter Username" name="gebruikerNaam" required>

    <label for="wachtwoord"><b>wachtwoord</b></label>
    <input type="password" placeholder="vul wachtwoord in" name="wachtwoord" required>

    <button type="submit">inloggen</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>


    </form>
</body>
</html>