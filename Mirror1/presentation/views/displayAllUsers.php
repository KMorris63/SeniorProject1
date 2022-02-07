<?php

 /*
 * displayAllUsers.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page displays all users in a table.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

$bs = new UserBusinessService();
// call business service and save array 
$users = $bs->getAllUsers();

echo "<div class='container'> <h1>Users</h1>";

?>

<!-- start of the table -->

<div class="container" padding="50px">

<table class="table table-hover">

<thead>

<tr>

<!-- table header data -->

<th scope="col">
ID
</th>

<th scope="col">
Username
</th>

<th scope="col">
Password
</th>

<th scope="col">
Email
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
<!-- populate the table with the appropriate user information -->
<?php 
for ($x = 0; $x < count($users); $x++) {
    echo "<tr>";
    echo "<form action='../handlers/updateUser.php'>
            <input type='hidden' name='id' value='" . $users[$x]['ID'] . "'>";
    echo "<th scope='row'>" . $users[$x]['ID'] . "</th>";
    echo "<td><input type='text' class='form-control' id='username' value='" . $users[$x]['USERNAME'] . "' name='Username'></td>";
    echo "<td><input type='text' class='form-control' id='password' value='" . $users[$x]['PASSWORD'] . "' name='Password'></td>";
    echo "<td><input type='text' class='form-control' id='email' value='" . $users[$x]['EMAIL'] . "' name='Email'></td>";
    echo "<td><input type='submit' value='Edit'></td>
    </form>";
    // pass ID as hidden value with each button
    echo "<td>
            <form action='../handlers/deleteUser.php'>
                <input type='hidden' name='id' value='" . $users[$x]['ID'] . "'>
                <input type='submit' value='Delete'>
            </form>
        </td>";
    echo "</tr>";
}
?>
</tbody>

</table>
</div>

</div>