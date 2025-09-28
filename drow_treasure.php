<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");
start_html("Incidental Drow Treasreu");

$l1 = intval(get_var("l1"));
$l2 = intval(get_var("l2"));
$l3 = intval(get_var("l3"));
$q1 = intval(get_var("q1"));
$q2 = intval(get_var("q2"));
$q3 = intval(get_var("q3"));

$sp = 0;
$gp = 0;
$pp = 0;
$gems = 0;

function calc_sp($l, $q)
{
  if ($q == 0)
  {
    return(0);
  }
  return((dice(1, 4) * 10) * $q);
}

function calc_gp($l, $q)
{
  if ($q == 0)
  {
    return(0);
  }
  if ($l == 2)
  {
    $mult = 5;
  }
  else if ($l == 3)
  {
    $mult = 10;
  }
  else
  {
    $mult = 1;
  }
  return((dice(1, 6) * $mult) * $q);
}

function calc_pp($l, $q)
{
  if ($q == 0)
  {
    return(0);
  }

  if ($l == 1)
  {
    return((max(0, dice(1, 4) - 2)) * $q);
  }

  if ($l == 2)
  {
    return(dice(1, 4) * $q);
  }

  if ($l == 3)
  {
    return(dice(2, 6) * $q);
  }

  return(0);
}

function calc_gems($l, $q)
{
  if ($q == 0 || $l == 1)
  {
    return(0);
  }

  if ($l == 2)
  {
    return(max(0, (dice(1, 6) - 3)) * $q);
  }

  if ($l == 3)
  {
    return((dice(1, 6) - 1) * $q);
  }
}

$sp += calc_sp($l1, $q1);
$sp += calc_sp($l2, $q2);
$sp += calc_sp($l3, $q3);
$gp += calc_gp($l1, $q1);
$gp += calc_gp($l2, $q2);
$gp += calc_gp($l3, $q3);
$pp += calc_pp($l1, $q1);
$pp += calc_pp($l2, $q2);
$pp += calc_pp($l3, $q3);
$gems += calc_gems($l1, $q1);
$gems += calc_gems($l2, $q2);
$gems += calc_gems($l3, $q3);

?>

<P>
SP: <?php echo $sp?><br />
GP: <?php echo $gp?><br />
PP: <?php echo $pp?><br />
Gems: <?php echo $gems?> (Each gem is a moonstone worth 10GP.)
</P>

<?php
end_html();
