<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$data = post_var("data");

$c = "b c d f g h j k l m n p q r s t v w x y z";
$ch = "ck ch th sh gh st qu ph";
$v = "a e i o u";
$vo = "ae ea oo ee ei ie ou";

$con = explode(" ", $c . " " . $c . " " . $ch);
$vow = explode(" ", $v . " " . $v . " " . $vo);
$all = explode(" ", implode(" ", $con) . " " . implode(" ", $vow));

function generate_random_name()
{
  global $con, $vow, $all, $data;
  $lastchar = "";
  $newchar = "";
  $name = "";

  for ($x = 0; $x <= strlen($data); ++$x)
  {
    $char = substr($data, $x, 1);
    if ($char == "-")
    {
      $lastchar = $newchar = get_random($con);
    }
    else if ($char == "=")
    {
      $lastchar = $newchar = get_random($vow);
    }
    else if ($char == "*")
    {
      $lastchar = $newchar = get_random($all);
    }
    else if ($char == ".")
    {
      $lastchar = $newchar = $lastchar;
    }
    else
    {
      $lastchar = $newchar = $char;
    }

    $name .= $newchar;
  }
  return(ucfirst(strtolower($name)));
}

start_html("Random Names");
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr><th colspan=6>Random Names</th></tr>
  <tr><th colspan=6>(<?php print($data); ?>)</th></tr>
<?php
for ($x = 1; $x <= 20; ++$x)
{
  print("  <tr>\n");
  for ($y = 1; $y <= 3; ++$y)
  {
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", generate_random_name());
    print ("    <td style=\"width: 8px;\"></td>\n");
  }
  print("  </tr>\n");
}
?>
</table>
</p>

<p align="center">
<form method="post" action="makename.php">
<input type="hidden" name="data" value="<?php print($data); ?>">
<input type="submit" value="Generate More Random Names">
</form>
<a href="randomname.php">Pick a different pattern for random names</a>
</p>

<?php end_html();
