<?php
require_once('../createForm.php');
 ?>
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
  echo  "YOO " . strtoupper($_GET['myText'] . " " . $_GET['myText'] . " wossup??" .
  " here da mofvck*** game<br> get your ass up and find da mofvck*** correct answer : ");
  ?>
</p>
  <div class="questions">
  <form action="../script.php">
    <?php echo openForm("./pages/questionnaire.php");
    echo createSelect("country", " Madagascar ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "antananarivo",
        "content" => "Antananarivo",
      ],
      [
        "value" => "mbabane",
        "content" => "Mbabane"
      ],
    ]);
    echo createSelect("country", " Namibia ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Windhoek",
        "content" => "windhoek",
      ],
      [
        "value" => "Reykjavik",
        "content" => "reykjavik"
      ],
    ]);
    echo createSelect("country", " Kirghizistan ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Amman",
        "content" => "amman",
      ],
      [
        "value" => "Bichkek",
        "content" => "bichkek"
      ],
    ]);
    echo createSelect("country", " Puerto Rico  ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Gaborone",
        "content" => "gaborone",
      ],
      [
        "value" => "San Juan",
        "content" => "san Juan"
      ],
    ]);
    echo createSelect("country", " Nicaragua ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Tegulcigalpa",
        "content" => "tegulcigalpa",
      ],
      [
        "value" => "Managua",
        "content" => "managua"
      ],
    ]);
    echo createSelect("country", " Hong Kong ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Hong Kong",
        "content" => "hong Kong",
      ],
      [
        "value" => "Pékin",
        "content" => "pékin"
      ],
    ]);
    echo createSelect("country", " Canada ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Montréal",
        "content" => "montréal",
      ],
      [
        "value" => "Otta",
        "content" => "obudapestttawa"
      ],
    ]);
    echo createSelect("country", " Hungary ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "budapest",
        "content" => "Budapest",
      ],
      [
        "value" => "Bucarest",
        "content" => "bucarest"
      ],
    ]);
    echo createSelect("country", " Morocco ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Marrakech",
        "content" => "marrakech",
      ],
      [
        "value" => "Rabat",
        "content" => "rabat"
      ],
    ]);
    echo createSelect("country", " Latvia ", [
      [
        "value" => "empty",
        "content" => "---",

      ],
      [
        "value" => "Riga",
        "content" => "riga",
      ],
      [
        "value" => "Skopje",
        "content" => "skopje"
      ],
    ]);
     echo openForm("script.php");
    echo createSubmit("Send");




    /*
    echo createInput("text", "myText", "", " My first input ");
    echo createInput("number", "myNumber", "", " My second input ");
    echo createInput("radio", "myRadio", "", " My radio ");
    echo createInput("checkbox", "myCheckbox", "", " My checkbox ");
    echo createSubmit("Send");*/
    echo closeTag("form");

    ?>
  </body>
  </html>
