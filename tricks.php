<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");

start_html("Tricks");

$Data = fopen("./data/traps/tricks", "r");
if (!$Data)
{
  abort("Error reading datafile!");
}

while (!feof($Data))
{
  $line = chop(fgets($Data, 1024));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $objects[] = $line;
  }
}

while (!feof($Data))
{
  $line = chop(fgets($Data, 1024));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $actions[] = $line;
  }
}

while (!feof($Data))
{
  $line = chop(fgets($Data, 1024));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $effects[] = $line;
  }
}

fclose($Data);
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="60%">
  <tr><th>Trick</th></tr>
  <tr>
    <td class="pt9">
<?php printf("      If the character %s the %s, then %s.\n", get_random($actions), get_random($objects), get_random($effects)); ?>
    </td>
  </tr>
  <tr>
    <td class="pt8">
      Some of the things that this will produce are just plain silly. This 
      section is here to inspire new ideas and thoughts, not to be taken 
      literally. Then again.... If your game is silly, taking the results 
      literally could work out great! Use it however you see fit.
    </td>
  </tr>
</table>
</p>

<p align="center">
<a href="tricks.php">Generate Another Trick</a>
</p>

<?php end_html();
