<?php

 /*
 * displayAllLayouts.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page displays all layouts in a table.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

$bs = new LayoutBusinessService();
// call business service and save array 
$layouts = $bs->getAllLayouts();

?>

<div class="hero">
	<h1 class="heroTxt">Layouts</h1>
</div>

<!-- start of the table -->

<div class="container">

<table class="table table-hover">

<thead>

<tr>

<!-- table header data -->

<th scope="col">
ID
</th>

<th scope="col">
Label
</th>

<th scope="col">
Image
</th>

<th scope="col">
Top Left
</th>

<th scope="col">
Top Right
</th>

<th scope="col">
Bottom Left
</th>

<th scope="col">
Bottom Right
</th>

<th scope="col">
Update
</th>

<th scope="col">
Delete
</th>

<th scope="col">
Select
</th>

</tr>

</thead>

<tbody>
<!-- populate the table with the appropriate layout information -->
<?php 
for ($x = 0; $x < count($layouts); $x++) {
    echo "<tr>";
    echo "<form action='../handlers/updateLayout.php'>
            <input type='hidden' name='id' value='" . $layouts[$x]['ID'] . "'>";
    echo "<th scope='row'>" . $layouts[$x]['ID'] . "</th>";
    echo "<td><input type='text' class='form-control' id='label' value='" . $layouts[$x]['LABEL'] . "' name='Label'></td>";
    echo "<td><input type='text' class='form-control' id='image' value='" . $layouts[$x]['IMAGE'] . "' name='Image'></td>";
    // echo "<td><input type='text' class='form-control' id='topLeft' value='" . $layouts[$x]['TOP_LEFT'] . "' name='TopLeft'></td>";
    // echo "<td><input type='text' class='form-control' id='topRight' value='" . $layouts[$x]['TOP_RIGHT'] . "' name='TopRight'></td>";
    // echo "<td><input type='text' class='form-control' id='bottomLeft' value='" . $layouts[$x]['BOTTOM_LEFT'] . "' name='BottomLeft'></td>";
    // echo "<td><input type='text' class='form-control' id='bottomRight' value='" . $layouts[$x]['BOTTOM_RIGHT'] . "' name='BottomRight'></td>";
    
    ?>
    <td>
    <div class="form-group">
    <select name="TopLeft" id="topLeft" class="layoutDrop">
    <option value="" class="layoutDropItem">None</option>
    <option value="Clock" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Clock') echo " selected";?>>Clock</option>
    <option value="Calendar" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Calendar') echo " selected";?>>Calendar</option>
    <option value="Compliments" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Compliments') echo " selected";?>>Compliments</option>
    <option value="Weather" class="layoutDropItem"<?php if($layouts[$x]['TOP_LEFT'] == 'Weather') echo " selected";?>>Weather</option>
    <option value="Forecast" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Forecast') echo " selected";?>>Forecast</option>
    <option value="News" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'News') echo " selected";?>>News</option>
    <option value="Text" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Text') echo " selected";?>>Text</option>
    <option value="Moon" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Moon') echo " selected";?>>Moon</option>
    <option value="Globe" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Globe') echo " selected";?>>Globe</option>
    <option value="Bible" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Bible') echo " selected";?>>Bible</option>
    <option value="Insults" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Insults') echo " selected";?>>Insults</option>
    <option value="Sports" class="layoutDropItem" <?php if($layouts[$x]['TOP_LEFT'] == 'Sports') echo " selected";?>>Sports</option>
    </select>
    </div>
    </td>
    
    <td>
    <div class="form-group">
    <select name="TopRight" id="topRight" class="layoutDrop">
    <option value="" class="layoutDropItem">None</option>
    <option value="Clock" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Clock') echo " selected";?>>Clock</option>
    <option value="Calendar" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Calendar') echo " selected";?>>Calendar</option>
    <option value="Compliments" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Compliments') echo " selected";?>>Compliments</option>
    <option value="Weather" class="layoutDropItem"<?php if($layouts[$x]['TOP_RIGHT'] == 'Weather') echo " selected";?>>Weather</option>
    <option value="Forecast" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Forecast') echo " selected";?>>Forecast</option>
    <option value="News" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'News') echo " selected";?>>News</option>
    <option value="Text" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Text') echo " selected";?>>Text</option>
    <option value="Moon" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Moon') echo " selected";?>>Moon</option>
    <option value="Globe" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Globe') echo " selected";?>>Globe</option>
    <option value="Bible" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Bible') echo " selected";?>>Bible</option>
    <option value="Insults" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Insults') echo " selected";?>>Insults</option>
    <option value="Sports" class="layoutDropItem" <?php if($layouts[$x]['TOP_RIGHT'] == 'Sports') echo " selected";?>>Sports</option>
    </select>
    </div>
    </td>
    
    <td>
    <div class="form-group">
    <select name="BottomLeft" id="bottomLeft" class="layoutDrop">
    <option value="" class="layoutDropItem">None</option>
    <option value="Clock" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Clock') echo " selected";?>>Clock</option>
    <option value="Calendar" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Calendar') echo " selected";?>>Calendar</option>
    <option value="Compliments" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Compliments') echo " selected";?>>Compliments</option>
    <option value="Weather" class="layoutDropItem"<?php if($layouts[$x]['BOTTOM_LEFT'] == 'Weather') echo " selected";?>>Weather</option>
    <option value="Forecast" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Forecast') echo " selected";?>>Forecast</option>
    <option value="News" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'News') echo " selected";?>>News</option>
    <option value="Text" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Text') echo " selected";?>>Text</option>
    <option value="Moon" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Moon') echo " selected";?>>Moon</option>
    <option value="Globe" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Globe') echo " selected";?>>Globe</option>
    <option value="Bible" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Bible') echo " selected";?>>Bible</option>
    <option value="Insults" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Insults') echo " selected";?>>Insults</option>
    <option value="Sports" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_LEFT'] == 'Sports') echo " selected";?>>Sports</option>
    </select>
    </div>
    </td>
    
    <td>
    <div class="form-group">
    <select name="BottomRight" id="bottomRight" class="layoutDrop">
    <option value="" class="layoutDropItem">None</option>
    <option value="Clock" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Clock') echo " selected";?>>Clock</option>
    <option value="Calendar" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Calendar') echo " selected";?>>Calendar</option>
    <option value="Compliments" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Compliments') echo " selected";?>>Compliments</option>
    <option value="Weather" class="layoutDropItem"<?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Weather') echo " selected";?>>Weather</option>
    <option value="Forecast" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Forecast') echo " selected";?>>Forecast</option>
    <option value="News" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'News') echo " selected";?>>News</option>
    <option value="Text" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Text') echo " selected";?>>Text</option>
    <option value="Moon" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Moon') echo " selected";?>>Moon</option>
    <option value="Globe" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Globe') echo " selected";?>>Globe</option>
    <option value="Bible" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Bible') echo " selected";?>>Bible</option>
    <option value="Insults" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Insults') echo " selected";?>>Insults</option>
    <option value="Sports" class="layoutDropItem" <?php if($layouts[$x]['BOTTOM_RIGHT'] == 'Sports') echo " selected";?>>Sports</option>
    </select>
    </div>
    </td>
    
    <?php 
    
    echo "<td><input type='submit' class='buttonLogin' value='Edit'></td>
    </form>";
    // pass ID as hidden value with each button
    echo "<td>
            <form action='deleteConfirmation.php'>
                <input type='hidden' name='id' value='" . $layouts[$x]['ID'] . "'>
                <input type='submit' class='buttonLogin' value='Delete'>
            </form>
        </td>";
    // pass ID as hidden value
    echo "<td>
            <form action='../handlers/selectLayout.php'>
                <input type='hidden' name='id' value='" . $layouts[$x]['ID'] . "'>
                <input type='submit' class='buttonLogin' value='Select'>
            </form>
        </td>";
    echo "</tr>";
}
?>
</tbody>

</table>
</div>