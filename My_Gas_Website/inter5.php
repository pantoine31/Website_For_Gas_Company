<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Σελίδα Διαχείρισης</title>
</head>
<body>
  
      <nav class="menu">
        <div class="hamburger">
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
        </div>
        <ul>
          <li><a href="inter1.php">Αρχικη Σελιδα</a></li>
          <li><a href="inter2.html">Προφιλ Εταιριας</a></li>
          <li><a href="inter3.html">Υπολογισμος Κοστους Φυσικου Αεριου</a></li>
          <li><a href="inter4.php">Επικοινωνια</a></li>
          <li><a href="inter5.php">Σελιδα Διαχειρισης</a></li>
        </ul>
      </nav>

      <script>
                  document.querySelector('.hamburger').addEventListener('click', function() {
                    document.querySelector('.menu').classList.toggle('open');
                  });
      </script>

      <!--LOGIN FORM-->

      <h1>Καλωσήρθατε στην σελίδα του Διαχειριστή</h1>
      <div class="container">
 
        <form form method="post" action="inter5.php">
 
            
            <label for="username">Όνομα Χρήστη:</label>
            <input type="text" id="username" name="username"><br>
    
            <label for="name">Κωδικός Πρόσβασης:</label>
            <input type="password" id="password" name="password"><br>
            <button class="btnLogin" type="submit" name="login">Σύνδεση Διαχειριστή</button>
         
        </form>
      </div>
      
      <?php
// Έλεγχος αν πατήθηκε το κουμπί "Σύνδεση Διαχειριστή"

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Έλεγχος αν τα στοιχεία ταυτίζονται με τον διαχειριστή
    if ($username === 'admin' && $password === 'Root123') {
        // Σύνδεση επιτυχής, εμφάνιση των αιτημάτων χρηστών από τη βάση δεδομένων

        // Δημιουργία σύνδεσης με τη βάση δεδομένων
        $conn = new mysqli('localhost', 'root', '', 'gasdb');

        // Έλεγχος της σύνδεσης
        if ($conn->connect_error) {
            die("Σφάλμα Σύνδεσης: " . $conn->connect_error);
        }

        // Εκτέλεση ερωτήματος για την ανάκτηση των αιτημάτων από τον πίνακα requests
        $sql = "SELECT * FROM requests";
        $result = $conn->query($sql);

      
        $result = $conn->query($sql);

        if ($result === false) {
            echo "Σφάλμα κατά την εκτέλεση της ερώτησης: " . $conn->error;
            // Εδώ μπορείτε να χειριστείτε το σφάλμα κατάλληλα
        } else {
            if ($result->num_rows > 0) {
                echo "<h1>Πίνακας με τα αιτήματα των πελατών μας</h1>";
                echo "<table>";
                echo "<tr>";
                  echo "<th>Όνομα Αιτούντος</th>";
                  echo "<th>Αριθμός Επικοινωνίας</th>";
                  echo "<th>Τμήμα στο οποίο απευθύνεται το αίτημα</th>";
                  echo "<th>Διεύθυνση Ηλεκτρονικού Ταχυδρομείου (E-mail)</th>";
                  echo "<th>Θέμα Μηνύματος/Αιτήματος</th>";
                  echo "<th>Αιτήματα</th>";
                echo "</tr>";
            
                
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["phone_number"] . "</td>";
                  echo "<td>" . $row["department"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["subject"] . "</td>";
                  echo "<td>" . $row["message"] . "</td>";
                  echo "</tr>";


                }
                echo "</table>";
            } else {
                echo "Δεν υπάρχουν αιτήματα.";
            }
        }


        // Κλείσιμο της σύνδεσης με τη βάση δεδομένων
        $conn->close();
    } else {
        // Σφάλμα: Ο χρήστης δεν είναι διαχειριστής
        echo '<script>alert("Λυπούμαστε, δεν είστε διαχειριστής της διαδικτυακής εφαρμογής.");</script>';
    }
}
?>

<!-- Table style and btn style-->
<style>

  .btnLogin{
    display: inline-block;
    padding: 10px 20px;
    background-color: #337ab7;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
  }

  .btnLogin:hover{
    cursor: pointer;
    background-color: #477093;

  }

      
  
  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #b1c4d6;
    margin-bottom: 10px;
    margin-top: 10px;
  }

  table th,
  table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  table th {
    background-color: #f2f2f2;
  }

</style>















  <style>

   .container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  margin-bottom: 24px;
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  text-align: left;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}


  </style>




      <!--Footer stathero gia kathe html page-->
      <footer>
        <div class="cont">
          <div class="gr2">
            <div class="col">
              <h3>Στοιχεία Επικοινωνίας</h3>
              <ul class="c">
                <li><a  href="tel:6986680496">Τηλέφωνο: 6986680496</a></li>
                <li><a  href="mailto:antonhspap@icloud.com">Email: antonhspap@icloud.com</a></li>
              </ul>
            </div>
            <div class="col">
              <h4>Χάρτης</h4>
              <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.5409907289077!2d23.696532576491315!3d37.964502301207325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bcf6b6876267%3A0xd3eda5fbbbcffe97!2zzqfPgc-Fz4POv8-Dz4TPjM68zr_PhSDOo868z43Pgc69zrfPgiAxNywgzqTOsc-Nz4HOv8-CIM6Rz4TPhM65zrrOrs-CIDE3NyA3OA!5e0!3m2!1sel!2sgr!4v1684270196121!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <p class="f">© 2023 My Webpage for HTML lesson. All rights reserved to Antonis Papakonstantinou.</p>
      </footer>
    
</body>
</html>