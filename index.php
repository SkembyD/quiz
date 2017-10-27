
<?php
require_once('createForm.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mon Questionnaire</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <header>
    <div class="bkgImg">
      <img src="../images/game.jpg">
    </div>
  </header>
  <?php
  echo openForm("../pages/questionnaire.php");
  echo createInput("text", "myText", "", " Register your last name");
  echo createInput("text", "myText", "", " Register your first name");
  echo createSubmit("Begin");
  /*echo createInput("text", "myText", "", " My first input ");
  echo createInput("number", "myNumber", "", " My second input ");
  echo createInput("radio", "myRadio", "", " My radio ");
  echo createInput("checkbox", "myCheckbox", "", " My checkbox ");
  echo createSubmit("Send");*/
  echo closeTag("form");

  ?>
</body>
</html>
