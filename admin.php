<?php
include "database.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == "admin" && $password == "helloworld") {
        $result = mysqli_query($connection, "SELECT * FROM travel");
        echo "<h2>List of People Who Booked</h2>";
        echo "<table border='1' cellpadding='5'>
              <tr><th>ID</th><th>Name</th><th>No. of People</th><th>Phone</th><th>Date</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Numberofpeople']}</td>
                    <td>{$row['Phonenumber']}</td>
                    <td>{$row['Date']}</td>
                  </tr>";
        }
        echo "</table>";
        exit;
    } else {
        echo "<p style='color:red;'>Wrong username or password!</p>";
    }
}
?>

<form method="POST">
  <h3>Admin Login</h3>
  <input type="text" name="username" placeholder="Username" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <button type="submit" name="login">Login</button>
</form>
