<meta charset="utf-8">
<link href="../font-awesome">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="../font-awesome/css/font-awesome;.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<header>
  <div class="bkgImg">
    <img src="../images/game.jpg">
  </div>
</header>
<main>
  <?php
  function openForm($action="./pages/questionnaire.php")
  {
    return "<form action='" .$action ."'>";
  }
  function createInput($type, $name , $value="", $label)
  {
      return "<label>" .$label . "</label><input type='" . $type . "' name='" . $name ."' value='" . $value."'>";
    }
echo createSubmit("Send");
    echo openForm("../pages/questionnaire.php");

  /*echo createInput("text", "myText", "", " My first input ");
  echo createInput("number", "myNumber", "", " My second input ");
  echo createInput("radio", "myRadio", "", " My radio ");
  echo createInput("checkbox", "myCheckbox", "", " My checkbox ");
  echo createSubmit("Send");*/
  echo closeTag("form");

  ?>
</main>
