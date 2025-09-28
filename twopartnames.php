<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$input = get_var("input");

$types = array("elf", "gaelic", "orc");
$display = htmlentities(ucfirst($input));

start_html("$display Names");

if (!input_valid($input, $types))
{
  print("Invalid type passed to script. Aborting.\n");
  end_html();
  exit();
}

$Data = fopen("./data/names/$input", "r");
if (!$Data)
{
  abort("Error reading datafile!");
}

### Fetch First Half
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $before[] = $line;
  }
}

### Fetch Second Half
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $after[] = $line;
  }
}
fclose($Data);
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr>
    <th colspan=5><?php print($display); ?> Names</th>
  </tr>
<?php
for ($x = 1; $x <= 20; ++$x) {
  print("  <tr>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($before), get_random($after));
  print ("    <td style=\"width: 8px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($before), get_random($after));
  print ("    <td style=\"width: 8px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($before), get_random($after));

  print("  </tr>\n");
}
?>
</table>
</p>

<p align="center"><a href="twopartnames.php?input=<?php print(htmlentities($input)); ?>">Generate More <?php print($display); ?> Names</a></p>

<?php end_html();
