<!-- PHP CODE -->

<?php   

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        

        $conn = new mysqli('localhost', 'root', '', 'gasdb');
        if ($conn->connect_error) {
            die("Error with the connection: " . $conn->connect_error);
            
        } else {
            $stmt = $conn->prepare("INSERT INTO requests (name, phone_number, department, email, subject, message) VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $phone, $department,$email, $subject, $message );
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                //EPITIXIS EGGRAFI
                echo '<script>alert("Το μήνυμα σας στάλθηκε με επιτυχία!");</script>';
            } else {
                //mi EPITIXIS EGGRAFI
                echo '<script>alert("Η αποστολή του μηνύματος απέτυχε. Παρακαλώ προσπαθήστε πάλι.");</script>';
            }

            $stmt->close();
            $conn->close();
          
        }
        echo '<script type="text/javascript">  location="inter4.html"; </script>';
  }
?>
