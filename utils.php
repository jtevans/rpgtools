<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

srand(time());

// Some code to stop (useless and pointless) SQL injection attacks on the server
if (is_array($_SERVER)
    && isset($_SERVER['REQUEST_URI'])
    && isset($_SERVER['SERVER_NAME'])
    && strpos($_SERVER['REQUEST_URI'], '%') !== false
    && $_SERVER['SERVER_NAME'] == 'jtevans.kilnar.com'
   )
{
    header('Location: http://www.fbi.gov/');
    exit();
}

function pre_r($obj)
{
  print('<pre>');
  print_r($obj);
  print('</pre>');
}

function comma($str)
{
  $n = strlen($str); 
  if ($n <= 3)
  {
   $return = $str;
  }      
  else { 
    $pre = substr($str, 0, $n-3);
    $post = substr($str, $n-3, 3);
    $pre = comma($pre);  
    $return = "$pre,$post";
  }      
  return($return); 
}

function return_start_html($title)
{
  $html = "<html>\n<head>\n  <title>$title</title>";
  $fh = fopen("tools.css", "r");
  $html .= fread($fh, filesize("tools.css"));
  fclose($fh); 
  $html .= "</head>\n<body class=\"BodyFont\" text=\"#000000\" link=\"#0055FF\" vlink=\"#0055FF\" alink=\"#FF5500\">\n";
  return($html);
}

function start_html($title)
{
  print("<html>\n<head>\n  <title>$title</title>\n");
  require("tools.css");
  print("</head>\n<body class=\"BodyFont\" text=\"#000000\" link=\"#0055FF\" vlink=\"#0055FF\" alink=\"#FF5500\">\n");
}

function end_html()
{
  print("<p align=\"center\" CLASS=\"pt9\"><a href=\"index.php\">Return to Main Page</a></p>\n");
  print("</body>\n</html>\n");
}

function abort($msg)
{
  print("<p class=\"Header2\" align=\"center\">$msg</p>\n");
  end_html();
  exit();
}

function number($low, $high)
{
  if ($low == $high)
  {
    return($low);
  }

  if ($low > $high)
  {
    $temp = $low;
    $low = $high;
    $high = $temp;
  }

  return((rand() % ($high - ($low - 1))) + $low);
}

function dice($number, $size)
{
  $total = 0;

  for ($x = 1; $x <= $number; ++$x)
  {
    $total += number(1, $size);
  }

  return($total);
}

function percent()
{
  return(number(1, 100));
}

function input_valid($input, $types)
{
  $valid = 0;
  for ($x = 0; $x < count($types); ++$x)
  {
    if ($types[$x] == $input)
    {
      return(1);
    }
  }
  return(0);
}

function get_random($arr)
{
  return($arr[array_rand($arr)]);
}

function validate_amount()
{
  global $amount;
  if ($amount < 1)
    $amount = 1;
}

function a_an($word)
{
  if (preg_match("/^[aeiouAEIOU]/", $word))
  {
    return("an");
  }
  return("a");
}

function print_list()
{
  global $display, $amount;

  print("<p>\n<table cellpadding=3 cellspacing=0 align=\"center\" border=1>\n");
  print("  <tr><th colspan=2>$display</th></tr>\n");
  for($x = 1; $x <= $amount; ++$x)
  {
    print ("  <tr>\n");
    if ($x % 4 == 0)
    {
      print ("    <th bgcolor=\"#DDDDDD\">&nbsp;&nbsp;$x&nbsp;&nbsp;</th>\n");
      printf("    <td bgcolor=\"#DDDDDD\" class=\"pt9\">%s</td>\n", build_item());
    }
    else
    {
      print ("    <th>&nbsp;&nbsp;$x&nbsp;&nbsp;</th>\n");
      printf("    <td class=\"pt9\">%s</td>\n", build_item());
    }
    print ("  </tr>\n");
  }
  print("</table>\n</p>\n");
}

function rand_item($filename)
{
  $Data = fopen($filename, "r");
  if (!$Data)
  {
    abort("Cannot open datafile: $filename.\n");
  }

  $total = 0;
  while (!feof($Data))
  {
    $line  = chop(fgets($Data, 255));
    if (empty($line))
    {
      continue;
    }
    list($weight, $misc) = explode(" ", $line, 2);
    $total += $weight;
  }

  rewind($Data);
  $roll = number(1, $total);
  $total = 0;

  while (!feof($Data))
  {
    $line = chop(fgets($Data, 255));
    if (empty($line))
    {
      continue;
    }

    list($weight, $name) = explode(" ", $line, 2);
    $total += $weight;
    if ($roll <= $total)
    {
      fclose($Data);
      return($name);
    }
  }
  fclose($Data);
  return("Nothing Found!!!");
}

function get_var($var)
{
  global $_GET;

  $var = isset($_GET[$var]) ? $_GET[$var] : null;

  return($var);
}

function post_var($var)
{
  global $_POST;

  $var = isset($_POST[$var]) ? $_POST[$var] : null;

  return($var);
}

function make_treasure_quantity($percentage, $dice, $multiplier)
{
  if (rand(1, 100) <= $percentage)
  {
    list($num, $sides) = explode("d", $dice);    
    $quantity = dice($num, $sides);
    return $quantity * $multiplier;
  }
  return 0;
}
