<?php
/* John's D&D Utilities
 * Copyright (C) 2001-2025, John Evans
 * Released under GPLv3.
 */

require("utils.php");
start_html("John's Dungeons and Dragons Utilities");
?>

<p>
<table cellpadding=3 cellspacing=0 border=1 align="center" width="70%" bordercolor="#BBBBFF">
  <tr>
<!-- ############### -->
<!-- name GENERATORS -->
<!-- ############### -->
    <td valign="top" width="50%">
      <table cellspacing=3 border=0 align="center">
      <tr><th>Name Generators</th></tr>
      <tr><td align="center"><a href="dwarf.php">Dwarf</a></td></tr>
      <tr><td align="center"><a href="mfnames.php?input=drow">Drow</a></td></tr>
      <tr><td align="center"><a href="twopartnames.php?input=elf">Elf</a></td></tr>
      <tr><td align="center"><a href="twopartnames.php?input=orc">Orc</a></td></tr>
      <tr><td align="center"><a href="mfnames.php?input=arabic">Arabic</a></td></tr>
      <tr><td align="center"><a href="mfnames.php?input=cornish">Cornish</a></td></tr>
      <tr><td align="center"><a href="twopartnames.php?input=gaelic">Gaelic</a></td></tr>
      <tr><td align="center"><a href="mfnames.php?input=german">German</a></td></tr>
      <tr><td align="center"><a href="korean.php">Korean</a></td></tr>
      <tr><td align="center"><a href="mfnames.php?input=viking">Viking</a></td></tr>
      <tr><td align="center"><a href="allnames.php">All Names</a></td></tr>
      <tr><td align="center"><a href="randomname.php">Random Names</a></td></tr>
      </table>
    </td>
<!-- ############### -->
<!-- name GENERATORS -->
<!-- ############### -->

<!-- ################ -->
<!-- DUNGEON DRESSING -->
<!-- ################ -->
    <td valign="top">
      <table cellspacing=3 border=0 align="center">
      <tr><th>Dungeon Dressing</th></tr>
      <tr><td align="center"><a href="dress.php?input=1">Air Current</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=2">Air Odor</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=3">Air Content</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=4">Sounds</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=5">General Items</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=6">Furniture</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=7">Religious Items</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=8">Torture Chamber</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=9">Mage Furnishings</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=10">Container Contents</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=11">Utensils</a></td></tr>
      <tr><td align="center"><a href="dress.php?input=0">Random Assortment of the Above</a></td></tr>
      </table>
    </td>
<!-- ################ -->
<!-- DUNGEON DRESSING -->
<!-- ################ -->
  </tr>

  <tr>
<!-- ##### -->
<!-- TRAPS -->
<!-- ##### -->
    <td valign="top">
      <table cellspacing=3 border=0 align="center">
      <tr><th>Traps</th></tr>
      <tr><td align="center"><a href="traps.php?input=harmless">Harmless Traps</a></td></tr>
      <tr><td align="center"><a href="traps.php?input=moderate">Moderate Traps</a></td></tr>
      <tr><td align="center"><a href="traps.php?input=deadly">Deadly Traps</a></td></tr>
      <tr><td align="center"><a href="tricks.php">Nasty Tricks</a></td></tr>
      </table>
    </td>
<!-- ##### -->
<!-- TRAPS -->
<!-- ##### -->

    <td valign="center" align="center">
    <div class="pt9">
    This is a Javascript initiative tracker that I wrote. The names/numbers that are
    automatically filled in were the names of the characters involved with the
    campaign that I was running at the time that I wrote this. Feel free to add/remove
    people and use it yourself.
    </div>
    <a href="init_tracker.html">Initiative Tracker</a>
    </td>
  </tr>

  <tr>
<!-- #################### -->
<!-- 3RD EDITION TREASURE -->
<!-- #################### -->
    <td valign="top">
      <div class="pt9">If you give bogus data, your input will be ignored without error messages.</div>
      <form action="treasure.php" method="post">
      <table cellspacing=3 border=0 align="center">
        <tr>
          <th colspan=3>D&amp;D 3e/3.5/Pathfinder 1 Treasure</th>
        </tr>
        <tr>
          <th>CR<br />(1 - 20)</th><th>&nbsp;&nbsp;</th><th>Quantity<br />(1 - 200)</th>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr0" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q0" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr1" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q1" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr2" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q2" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr3" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q3" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr4" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q4" size=2></td>
        </tr>
        <tr>
          <td colspan=3 align="center"><input type="submit" value="Generate Treasure"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- #################### -->
<!-- 3RD EDITION TREASURE -->
<!-- #################### -->

<!-- #################### -->
<!-- MAGIC ITEM GENERATOR -->
<!-- #################### -->
    <td valign="top">
      <form action="mi.php" method="get">
      <table cellspacing=3 border=0 align="center">
        <tr><th colspan=2>D&amp;D 3.0/3.5/Pathfinder 1 Magic Items</th></tr>
        <tr>
          <td>Minor Magic Items:</td>
          <td><input type="text" size=2 name="minor" value=0></td>
        </tr>
        <tr>
          <td>Medium Magic Items:</td>
          <td><input type="text" size=2 name="medium" value=0></td>
        </tr>
        <tr>
          <td>Major Magic Items:</td>
          <td><input type="text" size=2 name="major" value=0></td>
        </tr>
        <tr>
          <td colspan=2 align="center"><input type="submit" value="Generate Magic Items"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- #################### -->
<!-- MAGIC ITEM GENERATOR -->
<!-- #################### -->
  </tr>

  <tr>
<!-- #################### -->
<!-- 1ST EDITION TREASURE -->
<!-- #################### -->
    <td valign="top">
      <div class="pt9">If you give bogus data, your input will be ignored without error messages.</div>
      <form action="1st_treasure.php" method="post">
      <table cellspacing=3 border=0 align="center">
        <tr>
          <th colspan=3>1st Edition AD&amp;D Treasure</th>
        </tr>
        <tr>
          <th>Treasure Type<br />(A - Z)</th><th>&nbsp;&nbsp;</th><th>Quantity<br />(1 - 200)</th>
        </tr>
<?php
        foreach (range(0, 9) as $num)
        {
?>
          <tr>
            <td align="center">
              <select name="type<?php print($num);?>">
<?php
                foreach (range('A', 'Z') as $type)
                {
                  print("<option value=\"{$type}\">{$type}</option>\n");
                }
?>
              </select>
            </td>
            <td></td>
            <td align="center">
              <input type="text" size=2 name="q<?php print($num);?>" />
            </td>
         </tr>
<?php
            }
?>
        <tr>
          <td colspan=3 align="center"><input type="submit" value="Generate Treasure"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- #################### -->
<!-- 1ST EDITION TREASURE -->
<!-- #################### -->

<!-- ####################### -->
<!-- 1ST EDITION MAGIC ITEMS -->
<!-- ####################### -->
    <td valign="top">
      <form action="1st_mi.php" method="get">
      <table cellpadding=3 cellspacing=3 border=0 align="center">
        <tr><th>1st/2nd Edition AD&amp;D Magic Items</th></tr>
        <tr><th>Source: Encyclopedia Magica (the 4 volume set)</th></tr>
        <tr>
          <td align="center">
            Any Magic Item: (1-50) <input type="text" size="3" name="Any" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Weapon or Armor: (1-50) <input type="text" size="3" name="WeaponOrArmor" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Potion: (1-50) <input type="text" size="3" name="Potion" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Scroll: (1-50) <input type="text" size="3" name="Scroll" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Any, Except Weapon: (1-50) <input type="text" size="3" name="AnyExceptWeapon" />
          </td>
        </tr>
        <tr>
          <td align="center">
            1 of Each Magic Item Type,<br />Except Potion and Scroll: (1-50) <input type="text" size="3" name="AllExceptPotionScroll" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Misc. Magic Item: (1-50) <input type="text" size="3" name="MiscMagic" />
          </td>
        </tr>
        <tr>
          <td align="center">
            Specific Magic Category:
              <select name="specificType">
                <option value="armor">Armor</option>
                <option value="bag_bottle">Bags &amp; Bottles</option>
                <option value="book">Books</option>
                <option value="boot_glove">Boots &amp; Gloves</option>
                <option value="clothing">Clothing</option>
                <option value="dust_stone">Dusts &amp; Stones</option>
                <option value="gem_jewelry">Gems &amp; Jewelry</option>
                <option value="girdle_helm">Girdles &amp; Helms</option>
                <option value="household">Household Items</option>
                <option value="humorous">Humorous</option>
                <option value="musical_instrument">Musical Instruments</option>
                <option value="potion">Potions</option>
                <option value="ring">Rings</option>
                <option value="rod">Rods</option>
                <option value="scroll">Scrolls</option>
                <option value="staff">Staves</option>
                <option value="wand">Wands</option>
                <option value="weapon">Weapons</option>
                <option value="weird">Weird Items</option>
              </select>
            (1-50) <input type="text" size="3" name="Specific" />
          </td>
        </tr>
        <tr>
          <td align="center"><input type="submit" value="Generate Magic Items"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- ####################### -->
<!-- 1ST EDITION MAGIC ITEMS -->
<!-- ####################### -->
  </tr>

  <tr>
<!-- ####### -->
<!-- BAUBLES -->
<!-- ####### -->
    <td valign="top">
      <table cellspacing=3 border=0 align="center">
        <tr><th colspan=2>Baubles</th></tr>

        <tr><td align="center" class="pt8" colspan=2>(Enter quantity in box and click button)</td></tr>

        <tr><th class="pt8" colspan=2><B>3rd Edition Systems</th></tr>
<form action="gems3.php" method="get">
        <tr>
          <td align="right"><input type="text" name="amount" size=3 maxlength=3></td>
          <td align="center"><input type="submit" value="Generate Gemstones"></td>
        </tr>
</form>
<form action="art.php" method="get">
        <tr>
          <td align="right"><input type="text" name="amount" size=3 maxlength=3></td>
          <td align="center"><input type="submit" value="Generate Art Objects"></td>
        </tr>
</form>
<form action="mundane.php" method="get">
        <tr>
          <td align="right"><input type="text" name="amount" size=3 maxlength=3></td>
          <td align="center"><input type="submit" value="Generate Mundane Items"></td>
        </tr>
</form>

        <tr><th class="pt8" colspan=2>1st/2nd Edition Systems</th></tr>
<form action="gems2.php" method="get">
        <tr>
          <td align="right"><input type="text" name="amount" size=3 maxlength=3></td>
          <td align="center"><input type="submit" value="Generate Gemstones"></td>
        </tr>
</form>
<form action="jewelry.php" method="get">
        <tr>
          <td align="right"><input type="text" name="amount" size=3 maxlength=3></td>
          <td align="center"><input type="submit" value="Generate Jewelry"></td>
        </tr>
</form>
      </table>
    </td>
<!-- ####### -->
<!-- BAUBLES -->
<!-- ####### -->

<!-- ################## -->
<!-- INTELLIGENT WEAPON -->
<!-- ################## -->
    <td align="center">
      <a href="intelligent.php">Generate Intelligent Weapon</a>
    </td>
<!-- ################## -->
<!-- INTELLIGENT WEAPON -->
<!-- ################## -->
  </tr>

  <tr>
    <td valign="top">
<!-- ############# -->
<!-- DROW TREASURE -->
<!-- ############# -->
      <form action="drow_treasure.php" method="get">
      <table cellpadding=3 cellspacing=3 border=0 align="center">
        <tr><th colspan=2>Incidental Drow Treasure</th></tr>
        <tr>
          <th>Drow Level</th><th># of Drow</th>
        </tr>
        <tr>
          <td align="center">
            <select name="l1"><option value=1>1-2</option><option value=2>3-7</option><option value=3>8+</option></select>
          </td>
          <td align="center"><input type="text" name="q1" size=2></td>
        </tr>
        <tr>
          <td align="center">
            <select name="l2"><option value=1>1-2</option><option value=2>3-7</option><option value=3>8+</option></select>
          </td>
          <td align="center"><input type="text" name="q2" size=2></td>
        </tr>
        <tr>
          <td align="center">
            <select name="l3"><option value=1>1-2</option><option value=2>3-7</option><option value=3>8+</option></select>
          </td>
          <td align="center"><input type="text" name="q3" size=2></td>
        </tr>
        <tr>
          <td align="center" colspan=2><input type="submit" value="Generate Treasure"></td>
        </tr>
      </table>
      </form>
<!-- ############# -->
<!-- DROW TREASURE -->
<!-- ############# -->
    </td>
    <td valign="top">
<!-- ########## -->
<!-- GIANT BAGS -->
<!-- ########## -->
      <form method="get" action="giant_bag.php">
      <table cellpadding=3 cellspacing=3 border=0 align="center">
        <tr><th>Giant Bags</th></tr>
        <tr>
          <td align="center">
<select name="type">
<option value=1>Cloud Giant</option>
<option value=1>Fire Giant</option>
<option value=1>Frost Giant</option>
<option value=2>Hill Giant</option>
<option value=3>Stone Giant</option>
<option value=4>Storm Giant</option>
</select>
          </td>
        </tr>
        <tr>
          <td align="center"><input type="submit" value="Generate Bag Contents"></td>
        </tr>
      </table>
      </form>
<!-- ########## -->
<!-- GIANT BAGS -->
<!-- ########## -->
    </td>
  </tr>

  <tr>
<!-- ############################ -->
<!-- RANDOM WIZARD SPELLBOOKS 3.5 -->
<!-- ############################ -->
    <td valign="top" align="center">
      <form action="rnd_spellbook.php" method="post">
      <b>Random Wizard Spellbooks (D&amp;D 3.5)</b><br />
      <div class="pt10">
      Wizard Level: <select name="caster_level">
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
      <option value=10>10</option>
      <option value=11>11</option>
      <option value=12>12</option>
      <option value=13>13</option>
      <option value=14>14</option>
      <option value=15>15</option>
      <option value=16>16</option>
      <option value=17>17</option>
      <option value=18>18</option>
      <option value=19>19</option>
      <option value=20>20</option>
      </select><br />
      Intelligence: <select name="intel">
      <option value=10>10</option>
      <option value=11>11</option>
      <option value=12>12</option>
      <option value=13>13</option>
      <option value=14>14</option>
      <option value=15>15</option>
      <option value=16>16</option>
      <option value=17>17</option>
      <option value=18>18</option>
      <option value=19>19</option>
      <option value=20>20</option>
      <option value=21>21</option>
      <option value=22>22</option>
      <option value=23>23</option>
      <option value=24>24</option>
      <option value=25>25</option>
      <option value=26>26</option>
      <option value=27>27</option>
      <option value=28>28</option>
      <option value=29>29</option>
      <option value=30>30</option>
      </select><br />

      Gain spells via adventuring? <input type="checkbox" name="adventure" value=1><br />

      Specialist: <select name="specialist">
      <option value="none">None</option>
      <option value="abjuration">Abjuration</option>
      <option value="conjuration">Conjuration</option>
      <option value="divination">Divination</option>
      <option value="enchantment">Enchantment</option>
      <option value="evocation">Evocation</option>
      <option value="illusion">Illusion</option>
      <option value="necromancy">Necromancy</option>
      <option value="transmutation">Transmutation</option>
      </select><br />

      Restricted Schools (if any):<br />
      <select name="restricted[]" size=7 multiple>
      <option value="abjuration">Abjuration</option>
      <option value="conjuration">Conjuration</option>
      <option value="enchantment">Enchantment</option>
      <option value="evocation">Evocation</option>
      <option value="illusion">Illusion</option>
      <option value="necromancy">Necromancy</option>
      <option value="transmutation">Transmutation</option>
      </select><br />
      </div>

      Sourcebooks:<br /> <span class="pt8">(If you pick no sources, then you will get an empty spellbook.)</span>:<br />
      <table cellpadding=0 cellspacing=3>
        <tr>
          <td class="pt10" align="right">Player's Handbook (PHB)</td>
          <td align="left"><input type="checkbox" name="phb" checked></td>
        </tr>
        <tr>
          <td class="pt10" align="right">Book of Vile Darkness (BVD)</td>
          <td align="left"><input type="checkbox" name="bvd"></td>
        </tr>
      </table>

      <input type="submit" value="Generate Spellbook">
      </form>
    </td>
<!-- ############################ -->
<!-- RANDOM WIZARD SPELLBOOKS 3.5 -->
<!-- ############################ -->

<!-- ############################ -->
<!-- RANDOM WIZARD SPELLBOOKS 1.0 -->
<!-- ############################ -->
    <td valign="top" align="center">
      <form action="1st_spellbook.php" method="post">
      <b>Random Wizard Spellbooks (1e AD&amp;D)</b><br />
      <div class="pt10">
      Wizard Level: <select name="caster_level">
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
      <option value=10>10</option>
      <option value=11>11</option>
      <option value=12>12</option>
      <option value=13>13</option>
      <option value=14>14</option>
      <option value=15>15</option>
      <option value=16>16</option>
      <option value=17>17</option>
      <option value=18>18</option>
      </select><br />
      Intelligence: <select name="intel">
      <option value=9>9</option>
      <option value=10>10</option>
      <option value=11>11</option>
      <option value=12>12</option>
      <option value=13>13</option>
      <option value=14>14</option>
      <option value=15>15</option>
      <option value=16>16</option>
      <option value=17>17</option>
      <option value=18>18</option>
      <option value=19>19</option>
      </select><br />

      Always generate max # of spells per level based on intelligence? <input checked type="checkbox" name="always_max_num_spells" value=1><br />
      Gain spells via adventuring? <input type="checkbox" name="adventure" value=1><br /><br />

      Sourcebooks:<br /> <span class="pt8">(If you pick no sources, then you will get an empty spellbook.)</span>:<br />
      <table cellpadding=0 cellspacing=3>
        <tr>
          <td class="pt10" align="right">Player's Handbook (PHB)</td>
          <td align="left"><input type="checkbox" name="phb" checked value="on"></td>
        </tr>
        <tr>
          <td class="pt10" align="right">Unearthed Arcana (UA)</td>
          <td align="left"><input type="checkbox" name="ua" value="on"></td>
        </tr>
        <tr>
          <td class="pt10" align="right">Arden Vul (AV)</td>
          <td align="left"><input type="checkbox" name="av" value="on"></td>
        </tr>
      </table>

      Wizard's Name: <input type="text" value="" name="wizard_name" /><br /><br />

      <input type="submit" value="Generate Spellbook">
      </form>
    </td>
<!-- ############################ -->
<!-- RANDOM WIZARD SPELLBOOKS 1.0 -->
<!-- ############################ -->
  </tr>

  <tr>
<!-- ########################## -->
<!-- EXPERIENCE POINT CALCUATOR -->
<!-- ########################## -->
    <td>
      <div class="pt9">If you give bogus data, your input will be ignored without error messages.</div>
      <form action="xp.php" method="post">
      <table cellspacing=3 border=0 align="center">
        <tr>
          <th colspan=3>Experience Points</th>
        </tr>
        <tr>
          <th colspan=3>Party Level:&nbsp;&nbsp;<input type="text" name="pl" size=2></th>
        </tr>
        <tr>
          <th colspan=3># Party Members:&nbsp;&nbsp;<input type="text" name="ps" size=2></th>
        </tr>
        <tr>
          <th>CR<br />(1 - 20)</th><th>&nbsp;&nbsp;</th><th>Quantity<br />(1 - 200)</th>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr0" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q0" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr1" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q1" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr2" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q2" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr3" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q3" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr4" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q4" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr5" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q5" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr6" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q6" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr7" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q7" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr8" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q8" size=2></td>
        </tr>
        <tr>
          <td align="center"><input type="text" name="cr9" size=2></td>
          <td>&nbsp;</td>
          <td align="center"><input type="text" name="q9" size=2></td>
        </tr>
        <tr>
          <td colspan=3 align="center"><input type="submit" VALUE="Generate Experience"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- ########################## -->
<!-- EXPERIENCE POINT CALCUATOR -->
<!-- ########################## -->

<!-- ################ -->
<!-- CRAFT CALCULATOR -->
<!-- ################ -->
    <td Valign="TOP">
      <form action="craft.php" method=get>
      <table cellpadding=3 cellspacing=0 border=0 align="center">
        <tr>
          <th colspan=2>Craft Calculator</th>
        </tr>
        <tr>
          <td class="pt9" align="right">Finished Price in SP:</td>
          <td><input type="text" name="sp" size=5></td>
        </tr>
        <tr>
          <td class="pt9" align="right">Craft DC:</td>
          <td><input type="text" name="dc" size=2></td>
        </tr>
        <tr>
          <td class="pt9" align="right">Craft Skill Bonus (number only, no '+'):</td>
          <td><input type="text" name="skill" size=2></td>
        </tr>
        <tr>
          <td colspan=2 align="center"><input type="submit" value="Calculate Time"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- ################ -->
<!-- CRAFT CALCULATOR -->
<!-- ################ -->
  </tr>
  <tr>
<!-- ###################### -->
<!-- LOWER PLANES GENERATOR -->
<!-- ###################### -->
    <td valign="top">
      <form action="lowerplanes.php" method="get">
      <table cellpadding=3 cellspacing=0 border=0 align="center">
        <tr>
          <th colspan=2>Generate Creatures from the Lower Planes</th>
        </tr>
        <tr>
          <td class="pt9" align="right">Number to Generate:</td>
          <td><input type="text" name="num" size=5></td>
        </tr>
        <tr>
          <td colspan=2 align="center"><input type="submit" value="Generate Creatures"></td>
        </tr>
      </table>
      </form>
    </td>
<!-- ###################### -->
<!-- LOWER PLANES GENERATOR -->
<!-- ###################### -->

<!-- ############## -->
<!-- CITY GENERATOR -->
<!-- ############## -->
    <td Valign="TOP">
      <table cellspacing=3 border=0 align="center">
        <tr><th colspan=2>City Generator</th></tr>
        <form action="city.php" method="get">
        <tr>
          <td class="pt10" align="right">
            Name:
          </td>
          <td align="left">
            <input type="text" size=20 name="name">
          </td>
        </tr>
        <tr>
          <td class="pt10" align="right">
            Density:
          </td>
          <td align="left">
            <select name="density">
            <option value=0>Random</option>
            <option value=1>Sparse</option>
            <option value=2>Low</option>
            <option value=3>Average</option>
            <option value=4>High</option>
            <option value=5>Very High</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="pt10" align="right">
            Size:
          </td>
          <td align="left">
             <select name="size">
             <option value=0>Random</option>
             <option value=1>Village</option>
             <option value=2>Town</option>
             <option value=3>City</option>
             </select>
          </td>
        </tr>
        <tr><td class="pt10" align="right"><b>Make Establishment Names</b></td><td align="left"><input type="checkbox" name="estab" checked></td></tr>
        <tr><td class="pt10" align="right">Agricultural Area</td><td align="LEFT"><input type="checkbox" name="agri"></td></tr>
        <tr><td class="pt10" align="right">Wine Country</td><td align="LEFT"><input type="checkbox" name="wine"></td></tr>
        <tr><td class="pt10" align="right">Grazing/Herding Area</td><td align="LEFT"><input type="checkbox" name="herding"></td></tr>
        <tr><td class="pt10" align="right">Hills/Mountains</td><td align="LEFT"><input type="checkbox" name="hills"></td></tr>
        <tr><td class="pt10" align="right">Forest/Woodlands</td><td align="LEFT"><input type="checkbox" name="forest"></td></tr>
        <tr><td class="pt10" align="right">Port City</td><td align="LEFT"><input type="checkbox" name="port"></td></tr>
        <tr><td class="pt10" align="right">Military City</td><td align="LEFT"><input type="checkbox" name="military"></td></tr>
        <tr>
          <td align="center" colspan=2>
            <input type="submit" value="Generate City">
          </td>
        </tr>
        </form>
      </table>
      <br />
      <div align="center"><a href="estab.php">Generate Establishment Names</a></div>
    </td>
<!-- ############## -->
<!-- CITY GENERATOR -->
<!-- ############## -->
  </tr>

  <tr>
<!-- ################## -->
<!-- CALENDAR GENERATOR -->
<!-- ################## -->
    <td valign="top">
      <div align="center"><b>Calendar Generator</b></div>
      <form action="cal_laenwold.php" method="get">
      <table cellspacing=3 border=0 align="center">
        <tr><th>Laenwold</th></tr>
        <tr>
          <td align="center">
            Year: <input type="text" name="year" value=1051 size=5 maxlength=5><br />
            <input type="submit" value="Generate Calendar">
          </td>
        </tr>
      </table>
      </form>
    </td>
<!-- ################## -->
<!-- CALENDAR GENERATOR -->
<!-- ################## -->
    <td>&nbsp;</td>
  </tr>



</table>
</p>

<p>
Want to run a local copy of your own D&amp;D Tools? You can <a href="tools-1.8.tar.gz"><b>download them here</b></a>!!! Enjoy<br />
PS: The tools have been updated to work with PHP 8. Everything should be backward compatible to PHP 5 as well, but no promises on the older versions of PHP.
</p>

<p>
TODO
<ul>
<li>Magic: Random Sorcerer Known Spells</li>
<li>Magic: Choose Granted Domains, Prestige Domains and Banned Domains and get spell list.</li>
<li>Random Encounters based on terrain and CR</li>
<li>City: Add price shifts to each establishment. Cheap, Average, Expensive</li>
<li>City: Add race, gender, height, weight and age to proprietors</li>
</ul>
</p>
</body>
</html>
