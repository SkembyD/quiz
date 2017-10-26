
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Questionnaire</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome;.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <p>
    <?php
  echo  "YOO " . strtoupper($_GET['nom'] . " " . $_GET['prenom'] . " wossup??" .
  " here da mofvck*** game<br> get your ass up and find da mofvck*** correct answer : ");
  ?>
</p>
  <div class="questions">
  <form action="../script.php">
    Madagascar :<br />
    <select name="mada">
      <option value="empty"> --- </option>
      <option value="antananarivo">Antananarivo</option>
      <option value="mbabane">Mbabane</option>
    </select><br>
    <br>
    Namibia :<br />
    <select name="namb">
      <option value="empty"> --- </option>
      <option value="windhoek">Windhoek</option>
      <option value="reykjavik">Reykjavik</option>
    </select><br>
    <br>
    Kirghizistan :<br />
    <select name="kirg">
      <option value="empty"> --- </option>
      <option value="amman">Amman</option>
      <option value="bichkek">Bichkek</option>
    </select><br>
    <br>
    Puerto Rico :<br />
    <select name="puer">
      <option value="empty"> --- </option>
      <option value="gaborone">Gaborone</option>
      <option value="sanJuan">San Juan</option>
    </select><br>
    <br>
    Nicaragua :<br />
    <select name="nica">
      <option value="empty"> --- </option>
      <option value="tegulcigalpa">Tegulcigalpa</option>
      <option value="anagua">Managua</option>
    </select><br>
    <br>
    Hong Kong :<br />
    <select name="kong">
      <option value="empty"> --- </option>
      <option value="hongKong">Hong Kong</option>
      <option value="pekin">Pékin</option>
    </select><br>
    <br>
    Canada :<br />
    <select name="cana">
      <option value="empty"> --- </option>
      <option value="montréal">Montréal</option>
      <option value="ottawa">Ottawa</option>
    </select><br>
    <br>
    Hungary :<br />
    <select name="grie">
      <option value="empty"> --- </option>
      <option value="budapest">Budapest</option>
      <option value="bucarest">Bucarest</option>
    </select><br>
    <br>
    Morocco :<br />
    <select name="maro">
      <option value="empty"> --- </option>
      <option value="marrakech">Marrakech</option>
      <option value="rabat">Rabat</option>
    </select><br>
    <br>
    Latvia :<br />
    <select name="lett">
      <option value="empty"> --- </option>
      <option value="riga">Riga</option>
      <option value="skopje">Skopje</option>
    </select><br>
    <br>
    <input type="submit" value="Send">
  </form>
</div>
</body>
</html>
