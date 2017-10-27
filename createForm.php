<?php
// Une ouverture de balise Form
 // Definir une action
function openForm($action = "#")
{
  return "<form action='" .$action . "'>";
}

// Une fermeture de balise Form
function closeTag($tag)
{
  return "</" . $tag . ">";
}
/*
 $type = string
 $name = string
 $value = string
 $label = string
 */
 // Mise en place d'un input
  // Avec un label
function createInput($type, $name, $value ="", $label)
{
return "<label>" . $label . "</label><input type='" . $type . "' name='" . $name ."' value='" . $value ."'>";
}
// Mise en place d'un select
function createSelect($name, $label, $options)
{
  //Un array Multidimensionnel
  /*
  $options = [
    [
      'value' => 'fr',
      'content' => 'French',
    ],
    [
      'value' => 'en',
      'content' => 'British',
    ],
    [
      'value' => 'de',
      'content' => 'Deutsch',
    ],
  ];*/

 $html = "<label>" .$label . "</label>";
 $html .= "<select name='" . $name ."'>";
 foreach ($options as $key => $value)
 {
   $html .= "<option value='" . $value['value'] ."'>" . $value['content'] . "</option>";
 }
 $html .= "</select>";
 return $html;
}
// Generer un bouton submit
function createSubmit($value)
{
  return "<input type='submit' value='" . $value . "'>";
}
