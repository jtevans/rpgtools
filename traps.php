<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

$input = get_var("input");

$types = explode(" ", "harmless moderate deadly");
$display = htmlentities(ucfirst($input));

start_html("$display Trap");

if (!input_valid($input, $types))
{
  print("Invalid type passed to script. Aborting.\n");
  end_html();
  exit();
}

$Data = fopen("./data/traps/$input", "r");
if (!$Data)
{
  abort("Error reading datafile!");
}

while (!feof($Data))
{
  $line = chop(fgets($Data, 1024));
  $data[] = $line;
  fgets($Data, 1024);   // Skipping blank lines
}

fclose($Data);
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr><th><?php print($display); ?> Trap</th></tr>
  <tr><td class="pt9"><?php print(get_random($data)); ?></td></tr>
</table>

</p>

<p align="center">
<a href="traps.php?input=<?php print(htmlentities($input)); ?>">Generate Another <?php print($display); ?> Trap</a>
</p>

<?php end_html();
