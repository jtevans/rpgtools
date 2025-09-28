<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$input = intval(get_var("input"));

$data = array();
$display = "Dungeon Dressing";

function fetch_data()
{
  global $input, $data, $display;

  if ($input <= 9)
  {
    $filename = "0" . $input;
  }
  else
  {
    $filename = $input;
  }

  $Data = fopen("./data/dressing/$filename", "r");
  if (!$Data)
  {
    abort("Error reading datafile!");
  }

  $display = chop(fgets($Data, 1024));
  $display = substr($display, 1);

  while (!feof($Data))
  {
    $line = chop(fgets($Data, 1024));
    $data[] = $line;
  }

  fclose($Data);
}

function print_data()
{
  global $display, $data;
  print("<p>\n<table cellpadding=3 cellspacing=0 align=\"center\" border=0 width=\"60%\">\n");
  print("  <tr><th colspan=3>$display</th></tr>\n");
  for($x = 1; $x <= 20; ++$x)
  {
    print ("  <tr>\n");
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", get_random($data));
    print ("  </tr>\n");
  }
  print("</table>\n</p>\n");
}

function grff($file)
{
  $Data = fopen("./data/dressing/$file", "r");
  if (!$Data)
  {
    abort("Error reading datafile!");
  }
  fgets($Data, 1024);
  while (!feof($Data))
  {
    $line = chop(fgets($Data, 1024));
    $mydata[] = $line;
  }
  fclose($Data);
  return(get_random($mydata));
}

function build_assortment()
{
  $air_current = $air_odor = $air_content = $religious_items = 0;
  $sound1 = $sound2 = $sound3 = $general_items = $furniture = 0;
  $utensils = $torture_mage = 0;
  $found = array();

  while ($air_current + $air_odor + $air_content + $religious_items +
         $sound1 + $sound2 + $sound3 + $general_items + $furniture +
         $utensils + $torture_mage == 0)
  {
    $air_current = (percent() <= 40);           // 01
    $air_odor = (percent() <= 40);              // 02
    $air_content = (percent() <= 20);           // 03
    $sound1 = (percent() <= 30);                // 04
    $sound2 = (percent() <= 30);                // 04
    $sound3 = (percent() <= 30);                // 04
    $general_items = (percent() <= 50);         // 05
    $furniture = (percent() <= 30);             // 06
    $religious_items = (percent() <= 20);       // 07
    $utensils = (percent() <= 40);              // 11
    $torture_mage = (percent() <= 30);          // 08/09
  }

  $output = "";
  if ($air_current)
  {
    $output = "There is " . grff("01");
  }

  if ($air_odor)
  {
    if ($air_current)
    {
      $output .= " that smells " . grff("02");
    }
    else
    {
      $output = "The air smells " . grff("03");
    }
  }
  if ($air_current || $air_odor)
  {
    $output .= ". ";
  }

  if ($air_content)
  {
    $output .= "The air is " . grff("03") . ". ";
  }

  if ($sound1 || $sound2 || $sound3)
  {
    $output .= "You can hear ";
    $count = $sound1 + $sound2 + $sound3;
    if ($count == 1)
    {
      $output .= grff("04");
    }
    else if ($count == 2)
    {
      $output .= grff("04") . " and " . grff("04");
    }
    else
    {
      $output .= grff("04") . ", " . grff("04") . " and " . grff("04");
    }
    $output .= " in the distance. ";
  }

  if ($general_items)
  {
    $found[] = grff("05");
  }
  if ($furniture)
  {
    $found[] = grff("06");
  }
  if ($religious_items)
  {
    $found[] = grff("07");
  }
  if ($utensils)
  {
    $found[] = grff("11");
  }

  if (count($found) != 0)
  {
    if (count($found) == 1)
    {
      $output .= "You find " . $found[0] . " here. ";
    }
    else
    {
      $output .= "You find ";
      for($x = 0; $x <= count($found) - 1; ++$x)
      {
        if ($x == count($found) - 1)
        {
          $output .= $found[$x];
        }
        else if ($x == count($found) - 2)
        {
          $output .= $found[$x] . " and ";
        }
        else
        {
          $output .= $found[$x] . ", ";
        }
      }
      $output .= " here. ";
    }
  }

  if ($torture_mage)
  {
    $output .= "You also see " . (percent() <= 50 ? grff("08") : grff("09")) .
              " in the room.";
  }

// There is a AIR_CURRENT that smells AIR_ODOR. The air is AIR_CONTENT. You
// can hear SOUNDS and SOUNDS and SOUNDS off in the distance. You find
// GENERAL_ITEM, FURNITURE, RELIGIOUS ITEMS and UTENSILS here. You also see
// TORTURE/MAGE in the room.

  print <<< END_HTML
<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr><th colspan=3>Dungeon Dressing</th></tr>
  <tr><td class="pt9">$output</td></tr>
</table>
</p>
END_HTML;
}

$types = explode(" ", "0 1 2 3 4 5 6 7 8 9 10 11");
start_html("Dungeon Dressing");

if (!input_valid($input, $types))
{
  print("Invalid type passed to script. Aborting.\n");
  end_html();
  exit();
}

if ($input == 0)
{
  build_assortment();
}
else
{
  fetch_data();
  print_data();
}
?>

<p align="center">
<a href="dress.php?input=<?php print($input); ?>">Generate More <?php print($display); ?></a>
</p>

<?php end_html();
