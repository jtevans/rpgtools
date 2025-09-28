<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");
start_html("All Names");

$fh = fopen("./data/names/dwarf", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
### Fetch Prefixes
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $dwarf_pre[] = $line;
  }
}
### Fetch Male Suffixes
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $dwarf_male[] = $line;
  }
}
### Fetch Female Suffixes
while (!feof($fh))
  {
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  } 
  else
  {
    $dwarf_female[] = $line;
  }
}
fclose($fh);

// Fetch Drow Names
$fh = fopen("./data/names/drow", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch Male Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $drow_male[] = $line;
  }
}
// Fetch Female Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $drow_female[] = $line;
  }
}
fclose($fh);

// Fetch Elven Names
$fh = fopen("./data/names/elf", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch First Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $elf_prefix[] = $line;
  }
}
// Fetch Second Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $elf_postfix[] = $line;
  }
}
fclose($fh);

// Fetch Orc Names
$fh = fopen("./data/names/orc", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch First Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $orc_prefix[] = $line;
  }
}
// Fetch Second Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $orc_postfix[] = $line;
  }
}
fclose($fh);

// Fetch Gaelic Names
$fh = fopen("./data/names/gaelic", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch First Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $gaelic_prefix[] = $line;
  }
}
// Fetch Second Half
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $gaelic_postfix[] = $line;
  }
}
fclose($fh);

$fh = fopen("./data/names/arabic", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch Male Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $arabic_male[] = $line;
  }
}
// Fetch Female Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $arabic_female[] = $line;
  }
}
fclose($fh);

$fh = fopen("./data/names/german", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch Male Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $german_male[] = $line;
  }
}
// Fetch Female Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $german_female[] = $line;
  }
}
fclose($fh);

$fh = fopen("./data/names/viking", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
// Fetch Male Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $viking_male[] = $line;
  }
}
// Fetch Female Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $viking_female[] = $line;
  }
}
fclose($fh);

$fh = fopen("./data/names/korean", "r");
if (!$fh)
{
  abort("Error reading datafile!");
}
### Fetch Male Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $korean_male[] = $line;
  }
}
### Fetch Female Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  if ($line == ":")
  {
    break;
  }
  else
  {
    $korean_female[] = $line;
  }
}
### Fetch Family Names
while (!feof($fh))
{
  $line = chop(fgets($fh, 255));
  $korean_family[] = $line;
}
fclose($fh);

function print_dwarf()
{
  global $dwarf_pre, $dwarf_male, $dwarf_female;
  $name = "";
  $num = dice(1, 2);
  for ($x = 1; $x <= $num; ++$x)
  {
    $name .= get_random($dwarf_pre);
  }
  if (number(1, 2) == 1)
  {
    $name .= get_random($dwarf_male);
  }
  else
  {
    $name .= get_random($dwarf_female);
  }
  return($name);
}

function print_drow()
{
  global $drow_male, $drow_female;
  if (number(1, 2) == 1)
  {
    return(get_random($drow_male));
  }
  else
  {
    return(get_random($drow_female));
  }
}

function print_elf()
{
  global $elf_prefix, $elf_postfix;
  return(get_random($elf_prefix) . get_random($elf_postfix));
}

function print_orc()
{
  global $orc_prefix, $orc_postfix;
  return(get_random($orc_prefix) . get_random($orc_postfix));
}

function print_arabic()
{
  global $arabic_male, $arabic_female;
  if (number(1, 2) == 1)
    return(get_random($arabic_male));
  else
    return(get_random($arabic_female));
}

function print_gaelic()
{
  global $gaelic_prefix, $gaelic_postfix;
  return(get_random($gaelic_prefix) . get_random($gaelic_postfix));
}

function print_german()
{
  global $german_male, $german_female;
  if (number(1, 2) == 1)
  {
    return(get_random($german_male));
  }
  else
  {
    return(get_random($german_female));
  }
}

function print_korean()
{
  global $korean_male, $korean_female, $korean_family;
  $name = get_random($korean_family) . " ";

  if (number(1, 2) == 1)
  {
    $name .= get_random($korean_male);
  }
  else
  {
    $name .= get_random($korean_female);
  }

  return($name);
}

function print_viking()
{
  global $viking_male, $viking_female;
  if (number(1, 2) == 1)
  {
    return(get_random($viking_male));
  }
  else
  {
    return(get_random($viking_female));
  }
}

function print_name()
{
  switch(number(1, 9))
  {
    case 1:
      return(ucfirst(strtolower(print_dwarf())));
      break;
    case 2:
      return(ucfirst(strtolower(print_drow())));
      break;
    case 3:
      return(ucfirst(strtolower(print_elf())));
      break;
    case 4:
      return(ucfirst(strtolower(print_orc())));
      break;
    case 5:
      return(ucfirst(strtolower(print_arabic())));
      break;
    case 6:
      return(ucfirst(strtolower(print_gaelic())));
      break;
    case 7:
      return(ucfirst(strtolower(print_german())));
      break;
    case 8:
      return(print_korean());
      break;
    case 9:
      return(ucfirst(strtolower(print_viking())));
      break;
  }
}
?>

<p>
<table cellpadding=3 cellspacing=0 align="center" border=0 width="100%">
<?php
  for ($x = 1; $x <= 20; ++$x)
  {
    print("  <tr>\n");
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    printf("    <td align=\"center\" class=\"pt9\">%s</td>\n", print_name());
    print("  </tr>\n");
  }
?>
</table>
</p>

<p align="center"><a href="allnames.php">Generate More Random Names</a></p>

<?php
end_html();
