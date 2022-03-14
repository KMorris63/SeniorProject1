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
	<h1 class="heroTxt">Preferences</h1>
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
    echo "<td><input type='text' class='form-control' id='topLeft' value='" . $layouts[$x]['TOP_LEFT'] . "' name='TopLeft'></td>";
    echo "<td><input type='text' class='form-control' id='topRight' value='" . $layouts[$x]['TOP_RIGHT'] . "' name='TopRight'></td>";
    echo "<td><input type='text' class='form-control' id='bottomLeft' value='" . $layouts[$x]['BOTTOM_LEFT'] . "' name='BottomLeft'></td>";
    echo "<td><input type='text' class='form-control' id='bottomRight' value='" . $layouts[$x]['BOTTOM_RIGHT'] . "' name='BottomRight'></td>";
    echo "<td><input type='submit' class='buttonLogin' value='Edit'></td>
    </form>";
    // pass ID as hidden value with each button
    echo "<td>
            <form action='../handlers/deleteLayout.php'>
                <input type='hidden' name='id' value='" . $layouts[$x]['ID'] . "'>
                <input type='submit' class='buttonLogin' value='Delete'>
            </form>
        </td>";
    echo "</tr>";
}
?>
</tbody>

</table>
</div>
</div>