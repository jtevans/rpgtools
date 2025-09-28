<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");
start_html("Dwarven Names");

$Data = fopen("./data/names/dwarf", "r");
if (!$Data)
{
  abort("Error reading datafile!");
}

### Fetch Prefixes
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $pre[] = $line;
  }
}

### Fetch Male Suffixes
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $male[] = $line;
  }
}

### Fetch Female Suffixes
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $female[] = $line;
  }
}

### Fetch Stronghold Suffixes
while (!feof($Data))
{
  $line = chop(fgets($Data, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $stronghold[] = $line;
  }
}
fclose($Data);

function print_base()
{
  global $pre;
  $base = "";
  $num = dice(1, 4);
  for ($x = 1; $x <= $num; ++$x)
  {
    $base .= get_random($pre);
  }
  return(ucfirst(strtolower($base)));
}
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr>
    <th colspan=3>Male Names</th>
    <td>&nbsp;</td>
    <th colspan=3>Female Names</th>
    <td>&nbsp;</td>
    <th colspan=3>Stronghold Names</th>
  </tr>
<?php
for ($x = 1; $x <= 20; ++$x)
{
  print("  <tr>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($pre), get_random($male));
  print ("    <td style=\"width: 5px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($pre), get_random($male));

  print ("    <td style=\"width: 30px;\"></td>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($pre), get_random($female));
  print ("    <td style=\"width: 5px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", get_random($pre), get_random($female));

  print ("    <td style=\"width: 30px;\"></td>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", print_base(), get_random($stronghold));
  print ("    <td style=\"width: 5px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s%s</td>\n", print_base(), get_random($stronghold));

  print("  </tr>\n");
}
?>
</table>
</p>

<p align="center"><a href="dwarf.php">Generate More Dwarven Names</a></p>

<?php
end_html();
