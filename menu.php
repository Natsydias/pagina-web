
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<li><a href='#'>".$row["name"]."</a></li>";
  }
} else {
  echo "0 results";
}
$conn->close();
<nav>
    <ul id="menu">
        <?php
        $dir = 'pages';
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false)
?>