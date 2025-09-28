<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

  require("utils.php");
  start_html("Random Names");
?>

<P>
All names are comprised of consonants and vowel. This allows you to build random names based off of prebuilt combinations of letters. All characters in the sequence will be shown as-is, except for the following:<br /> 
<table cellpadding=3 cellspacing=1 border=1 align="left">
<tr><th>-</th><td class="pt9">Consonant</td></tr>
<tr><th>=</th><td class="pt9">Vowel</td></tr>
<tr><th>.</th><td class="pt9">Repeat Previous Character</td></tr>
<tr><th>*</th><td class="pt9">Random Letter</td></tr>
</table>
</p>

<br clear="left">

<p>&nbsp;</p>

<p>
In addition to using the prebuilt combinations that you see here, you will be able to build your own as well.
</p>

<table cellpadding=3 cellspacing=3 border=0 align="center">
  <tr>
    <th>Select a Prebuilt Combo</th>
    <th style="width: 30px;"></th>
    <th>... or Build a Custom One</th>
  </tr>
  <tr>
    <td align="center">
    <form method="post" action="makename.php">
    <select name="data">
    <option value="-=--=-">-=--=-</option>
    <option value="-=-=-">-=-=-</option>
    <option value="-=-=-=">-=-=-=</option>
    <option value="-=-.=-">-=-.=-</option>
    <option value="-=-=">-=-=</option>
    <option value="-=-==">-=-==</option>
    <option value="-==-=-">-==-=-</option>
    <option value="-==-==">-==-==</option>
    <option value="-=--=-=">-=--=-=</option>
    <option value="=-=--=-=">=-=--=-=</option>
    <option value="-=- -=-.=-">-=- -=-.=-</option>
    <option value="-=-">-=-</option>
    <option value="-==--==-">-==--==-</option>
    <option value="=-==-">=-==-</option>
    <option value="=-=">=-=</option>
    <option value="=-=-">=-=-</option>
    <option value="=-=-=">=-=-=</option>
    <option value="=-.=-">=-.=-</option>
    <option value="=-=.-">=-=.-</option>
    <option value="****">****</option>
    <option value="Z=-.=-">Z=-.=-</option>
    </select>
    <br />&nbsp;<br />
    <input type="submit" value="Submit">
    </form>
    </td>

    <td style="width: 30px;"></td>

    <td align="center">
    <form method="post" action="makename.php">
    <input type="text" size=30 maxlength=30 name="data"><br /><br />
    <input type="submit" value="Submit">
    </form>
    </td>
  </tr>
</table>
</p>

<?php end_html();
