<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$q0 = intval(post_var("q0"));
$q1 = intval(post_var("q1"));
$q2 = intval(post_var("q2"));
$q3 = intval(post_var("q3"));
$q4 = intval(post_var("q4"));
$q5 = intval(post_var("q5"));
$q6 = intval(post_var("q6"));
$q7 = intval(post_var("q7"));
$q8 = intval(post_var("q8"));
$q9 = intval(post_var("q9"));

start_html("Random Treasure");

$types = range('A', 'Z');
foreach (range(0, 9) as $set)
{
  $type_var = "type" . $set;
  $q_var = "q" . $set;
  $input[$set]["type"] = in_array(post_var($type_var), $types) ? post_var($type_var) : "";
  $input[$set]["q"] = max(0, min(200, intval(post_var($q_var))));
}

$cp = 0;
$sp = 0;
$ep = 0;
$gp = 0;
$pp = 0;
$gems = 0;
$jewelry = 0;
$map = 0;
$magic = [
  "Any" => 0,
  "WeaponOrArmor" => 0,
  "Potion" => 0,
  "Scroll" => 0,
  "AnyExceptWeapon" => 0,
  "AllExceptPotionScroll" => 0,
  "MiscMagic" => 0,
];

foreach (range(0, 9) as $set)
{
  if (empty($input[$set]["type"]))
  {
    continue;
  }
  if ($input[$set]["q"] == 0)
  {
    continue;
  }

  foreach (range(1, $input[$set]["q"]) as $iter)
  {
    switch ($input[$set]["type"])
    {
      case 'A':
        $cp += make_treasure_quantity(25, "1d6", 1000);
        $sp += make_treasure_quantity(30, "1d6", 1000);
        $ep += make_treasure_quantity(35, "1d6", 1000);
        $gp += make_treasure_quantity(40, "1d10", 1000);
        $pp += make_treasure_quantity(25, "1d4", 1000);
        $gems += make_treasure_quantity(60, "4d10", 1);
        $jewelry += make_treasure_quantity(50, "3d10", 1);
        $magic["Any"] += make_treasure_quantity(30, "1d1", 3);
        break;
      case 'B':
        $cp += make_treasure_quantity(50, "1d8", 1000);
        $sp += make_treasure_quantity(25, "1d6", 1000);
        $ep += make_treasure_quantity(25, "1d4", 1000);
        $gp += make_treasure_quantity(25, "1d3", 1000);
        $gems += make_treasure_quantity(30, "1d8", 1);
        $jewelry += make_treasure_quantity(20, "1d4", 1);
        $magic["WeaponOrArmor"] += make_treasure_quantity(10, "1d1", 1);
        break;
      case 'C':
        $cp += make_treasure_quantity(20, "1d12", 1000);
        $sp += make_treasure_quantity(30, "1d6", 1000);
        $ep += make_treasure_quantity(10, "1d4", 1000);
        $gems += make_treasure_quantity(25, "1d6", 1);
        $jewelry += make_treasure_quantity(20, "1d3", 1);
        $magic["Any"] += make_treasure_quantity(20, "2d1", 1);
        break;
      case 'D':
        $cp += make_treasure_quantity(10, "1d8", 1000);
        $sp += make_treasure_quantity(15, "1d12", 1000);
        $ep += make_treasure_quantity(15, "1d8", 1000);
        $gp += make_treasure_quantity(50, "1d6", 1000);
        $gems += make_treasure_quantity(30, "1d10", 1);
        $jewelry += make_treasure_quantity(25, "1d6", 1);
        if (rand(1, 100) <= 15)
        {
          $magic["Any"] += make_treasure_quantity(100, "1d1", 2);
          $magic["Potion"] += make_treasure_quantity(100, "1d1", 1);
        }
        break;
      case 'E':
        $cp += make_treasure_quantity(5, "1d10", 1000);
        $sp += make_treasure_quantity(25, "1d12", 1000);
        $ep += make_treasure_quantity(25, "1d6", 1000);
        $gp += make_treasure_quantity(25, "1d8", 1000);
        $gems += make_treasure_quantity(15, "1d12", 1);
        $jewelry += make_treasure_quantity(10, "1d8", 1);
        if (rand(1, 100) <= 25)
        {
          $magic["Any"] += make_treasure_quantity(100, "1d1", 3);
          $magic["Scroll"] += make_treasure_quantity(100, "1d1", 1);
        }
        break;
      case 'F':
        $sp += make_treasure_quantity(10, "1d20", 1000);
        $ep += make_treasure_quantity(15, "1d12", 1000);
        $gp += make_treasure_quantity(40, "1d10", 1000);
        $pp += make_treasure_quantity(35, "1d8", 1000);
        $gems += make_treasure_quantity(20, "3d10", 1);
        $jewelry += make_treasure_quantity(10, "1d10", 1);
        if (rand(1, 100) <= 30)
        {
          $magic["AnyExceptWeapon"] += make_treasure_quantity(100, "1d1", 3);
          $magic["Potion"] += make_treasure_quantity(100, "1d1", 1);
          $magic["Scroll"] += make_treasure_quantity(100, "1d1", 1);
        }
        break;
      case 'G':
        $gp += make_treasure_quantity(50, "10d4", 1000);
        $pp += make_treasure_quantity(50, "1d20", 1000);
        $gems += make_treasure_quantity(30, "5d4", 1);
        $jewelry += make_treasure_quantity(25, "1d10", 1);
        if (rand(1, 100) <= 35)
        {
          $magic["Any"] += make_treasure_quantity(100, "1d1", 4);
          $magic["Scroll"] += make_treasure_quantity(100, "1d1", 1);
        }
        break;
      case 'H':
        $cp += make_treasure_quantity(25, "5d6", 1000);
        $sp += make_treasure_quantity(40, "1d100", 1000);
        $ep += make_treasure_quantity(40, "10d4", 1000);
        $gp += make_treasure_quantity(55, "10d6", 1000);
        $pp += make_treasure_quantity(25, "5d10", 1000);
        $gems += make_treasure_quantity(50, "1d100", 1);
        $jewelry += make_treasure_quantity(50, "10d4", 1);
        if (rand(1, 100) <= 15)
        {
          $magic["Any"] += make_treasure_quantity(100, "1d1", 4);
          $magic["Potion"] += make_treasure_quantity(100, "1d1", 1);
          $magic["Scroll"] += make_treasure_quantity(100, "1d1", 1);
        }
        break;
      case 'I':
        $pp += make_treasure_quantity(30, "3d6", 1000);
        $gems += make_treasure_quantity(55, "2d10", 1);
        $jewelry += make_treasure_quantity(50, "1d12", 1);
        $magic["Any"] += make_treasure_quantity(15, "1d1", 1);
        break;
      case 'J':
        $cp += make_treasure_quantity(100, "3d8", 1);
        break;
      case 'K':
        $sp += make_treasure_quantity(100, "3d6", 1);
      case 'L':
        $ep += make_treasure_quantity(100, "2d6", 1);
        break;
      case 'M':
        $gp += make_treasure_quantity(100, "2d4", 1);
        break;
      case 'N':
        $pp += make_treasure_quantity(100, "1d6", 1);
        break;
      case 'O':
        $cp += make_treasure_quantity(25, "1d4", 1000);
        $sp += make_treasure_quantity(20, "1d3", 1000);
        break;
      case 'P':
        $sp += make_treasure_quantity(30, "1d6", 1000);
        $ep += make_treasure_quantity(25, "1d2", 1000);
        break;
      case 'Q':
        $gems += make_treasure_quantity(50, "1d4", 1);
        break;
      case 'R':
        $gp += make_treasure_quantity(40, "2d4", 1000);
        $pp += make_treasure_quantity(50, "10d6", 1000);
        $gems += make_treasure_quantity(55, "4d8", 1);
        $jewelry += make_treasure_quantity(45, "1d12", 1);
        break;
      case 'S':
        $magic["Potion"] += make_treasure_quantity(40, "2d4", 1);
        break;
      case 'T':
        $magic["Scroll"] += make_treasure_quantity(50, "1d4", 1);
        break;
      case 'U':
        $gems += make_treasure_quantity(90, "10d8", 1);
        $jewelry += make_treasure_quantity(80, "5d6", 1);
        $magic["AllExceptPotionScroll"] += make_treasure_quantity(70, "1d1", 1);
        break;
      case 'V':
        $magic["AllExceptPotionScroll"] += make_treasure_quantity(85, "1d1", 2);
        break;
      case 'W':
        $gp += make_treasure_quantity(60, "5d6", 1000);
        $pp += make_treasure_quantity(15, "1d8", 1000);
        $gems += make_treasure_quantity(60, "1d8", 1);
        $jewelry += make_treasure_quantity(50, "5d8", 1);
        $map += make_treasure_quantity(55, "1d1", 1);
        break;
      case 'X':
        if (rand(1, 100) <= 60)
        {
          $magic["MiscMagic"] += make_treasure_quantity(100, "1d1", 1);
          $magic["Potion"] += make_treasure_quantity(100, "1d1", 1);
        }
        $magic["Any"] += make_treasure_quantity(30, "1d1", 3);
        break;
      case 'Y':
        $gp += make_treasure_quantity(70, "2d6", 1000);
        break;
      case 'Z':
        $cp += make_treasure_quantity(20, "1d3", 1000);
        $sp += make_treasure_quantity(25, "1d4", 1000);
        $ep += make_treasure_quantity(25, "1d4", 1000);
        $gp += make_treasure_quantity(30, "1d4", 1000);
        $pp += make_treasure_quantity(30, "1d6", 1000);
        $gems += make_treasure_quantity(55, "10d6", 1);
        $jewelry += make_treasure_quantity(50, "5d6", 1);
        $magic["Any"] += make_treasure_quantity(50, "1d1", 3);
        break;
    } // end Treasure Type switch
  } // end quantity iteration
} // end set for loop.

if ($cp > 0) { print("CP: $cp<br />\n"); }
if ($sp > 0) { print("SP: $sp<br />\n"); }
if ($ep > 0) { print("EP: $ep<br />\n"); }
if ($gp > 0) { print("GP: $gp<br />\n"); }
if ($pp > 0) { print("PP: $pp<br />\n"); }
if ($gems > 0) { print("Gems: $gems (<a href=\"gems2.php?amount=$gems\" class=\"pt8\" target=\"_blank\">1st/2nd Edition Generator</a>)<br />\n"); }
if ($jewelry > 0) { print("Jewelry: $jewelry (<a href=\"jewelry.php?amount=$jewelry\" class=\"pt8\" target=\"_blank\">Jewelry Generator</a>)<br />\n"); }
if ($map > 0) { print("Maps: $map<br />\n"); }

$mi_args = "";
foreach ($magic as $type => $amount)
{
  if ($amount == 0)
  {
    continue;
  }
  $mi_args .= "{$type}={$amount}&";
  $display_type = preg_replace('([A-Z])', ' ${0}', $type);
  print("Magic: {$display_type}: {$amount}<br />\n");
}

if ( ! empty($mi_args))
{
  $mi_args = rtrim($mi_args, '&');
  print("<a href=\"1st_mi.php?{$mi_args}\" class=\"pt8\" target=\"_blank\">Generate All Magic Items</a><br />\n");
}

if ($cp === 0 && $sp === 0 && $ep === 0 && $gp === 0 && $pp === 0 && $gems === 0 && $jewelry === 0 && $map === 0 && empty($mi_args))
{
  print("So sad. No treasure!<br />\n");
}

end_html(); 
