<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$amount = intval(get_var("amount"));

start_html("Random Jewelry");

class Material
{
  var $name;
  var $low_per;
  var $high_per;
  var $low_cost;
  var $high_cost;

  function __construct($lp, $hp, $lc, $hc, $n)
  {
    $this->low_per = $lp;
    $this->high_per = $hp;
    $this->low_cost = $lc;
    $this->high_cost = $hc;
    $this->name = $n;
  }
}

class Obj
{
  var $name;
  var $low_per;
  var $high_per;

  function __construct($lp, $hp, $n)
  {
    $this->low_per = $lp;
    $this->high_per = $hp;
    $this->name = $n;
  }
}

function build_item()
{
  global $materials, $objects;

  $roll1 = percent();
  $roll2 = percent();
  $obj = $mat = $cost = null;

  for ($x = 0; $x < count($materials); ++$x)
  {
    if ($roll1 >= $materials[$x]->low_per &&
        $roll1 <= $materials[$x]->high_per)
    {
      $mat = $materials[$x]->name;
      $cost = number($materials[$x]->low_cost, $materials[$x]->high_cost);
      break;
    }
  }

  for ($x = 0; $x < count($objects); ++$x)
  {
    if ($roll2 >= $objects[$x]->low_per &&
        $roll2 <= $objects[$x]->high_per)
    {
      $obj = $objects[$x]->name;
      break;
    }
  }

  $item = a_an($obj) . " $obj made of $mat worth $cost GP.";
  $item = ucfirst($item);
  return($item);
}

$display = "Jewlery";
validate_amount();

$Data = fopen("./data/treasure/jewelry", "r");

if (!$Data)
{
  abort("Error reading datafile!");
}

// Fetch Materials
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if (empty($line))
  {
    continue;
  }

  if ($line == ":ITEM")
  {
    break;
  }
  else
  {
    list($low_per, $high_per, $low_cost, $high_cost, $name) = explode(" ", $line, 5);
    $materials[] = new Material($low_per, $high_per, $low_cost, $high_cost, $name);
  }
}

// Fetch Objects
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if (empty($line))
  {
    continue;
  }

  list($low_per, $high_per, $name) = explode(" ", $line, 3);
  $objects[] = new Obj($low_per, $high_per, $name);
}

fclose($Data);


print_list();
?>

<p align="center">
<a href="jewelry.php?amount=<?php print($amount); ?>">Generate More Jewelry</a>
</p>

<?php end_html();
