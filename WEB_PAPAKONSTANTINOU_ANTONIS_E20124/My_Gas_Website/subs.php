<!-- php-->
<?php   
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  if (!empty($username) && !empty($name) && !empty($email)) {
    $conn = new mysqli('localhost', 'root', '', 'gasdb');
    if ($conn->connect_error) {
      die("Error with the connection: " . $conn->connect_error);
    } else {
      $stmt = $conn->prepare("INSERT INTO subscribers (username, name, email) VALUES(?, ?, ?)");
      $stmt->bind_param("sss", $username, $name, $email);
      $stmt->execute();

      if ($stmt->affected_rows > 0) {
        // EPITIXIS EGGRAFI
        echo '<script>alert("Εγγραφήκατε με επιτυχία!");</script>';
      } else {
        // mi EPITIXIS EGGRAFI
        echo '<script>alert("Παρακαλώ συμπληρώστε την φόρμα.");</script>';
      }
      echo '<script type="text/javascript">  location="inter1.html"; </script>';

      $stmt->close();
      $conn->close();
    }
  }
}
?>