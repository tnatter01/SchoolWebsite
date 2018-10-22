<!DOCTYPE html>

<html lang="en">
<head>
    <title id="title">This is replaced by the filename</title>
    <script type="text/javascript">
        var url = window.location.pathname; // gets the pathname of the file
        var str = url.substring(url.lastIndexOf('/')+1); // removes everything before the filename
        var filename = str.replace(/%20/g, " "); // if the filename has multiple words separated by spaces, browsers do not like that and replace each space with a %20. This replace %20 with a space.
        document.getElementById("title").innerHTML = filename;
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>

<div class="main">
  <form action="lab05verwerken.php" method="post">
      <table border="1">
          <caption>
              <strong>Inschrijfformulier:</strong>
          </caption>
      <tbody>
      <tr>
          <td>Achternaam:</td>
            <td><input type="text" name="achternaam"</td>
      </tr>
      <tr>
          <td>Voornaam:</td>
          <td><input type="text" name="voornaam"</td>
      </tr>
      <tr>
          <td>Adres:</td>
          <td><input type="text" name="adres"</td>
      </tr>
      <tr>
          <td>Postcode:</td>
          <td><input type="text" name="postcode"</td>
      </tr>
      <tr>
          <td>Plaats:</td>
          <td><input type="text" name="plaats"</td>
      </tr>
      <tr>
          <td>E-mailadres:</td>
          <td><input type="text" name="email"</td>
      </tr>
      </tbody>
      </table>
        Kies een opleiding: <br>
      <input type="radio" name="opleiding" value="ICT"> ICT <br>
      <input type="radio" name="opleiding" value="Engels"> Engels <br>
      <input type="radio" name="opleiding" value="Techniek"> Techniek <br>
      <input type="radio" name="opleiding" value="Nederlands"> Nederlands <br>

      <input type="submit" name="submit" value="Versturen">

  </form>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>