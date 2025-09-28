<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$input = get_var("input");

$types = array("arabic", "drow", "german", "viking", "cornish");
$display = ucfirst($input);

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

### Fetch Male Names
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

### Fetch Female Names
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

fclose($Data);
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr>
    <th colspan=3>Male Names</th>
    <td>&nbsp;</td>
    <th colspan=3>Female Names</th>
  </tr>
<?php
for ($x = 1; $x <= 20; ++$x) {
  print("  <tr>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", get_random($male));
  print ("    <td style=\"width: 5px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", get_random($male));

  print ("    <td style=\"width: 30px;\"></td>\n");

  printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", get_random($female));
  print ("    <td style=\"width: 5px;\"></td>\n");
  printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", get_random($female));

  print("  </tr>\n");
}
?>
</table>
</p>

<p align="center"><a href="mfnames.php?input=<?php print($input); ?>">Generate More <?php print($display); ?> Names</a></p>

<?php end_html();
