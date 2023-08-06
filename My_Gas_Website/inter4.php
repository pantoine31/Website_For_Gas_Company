<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Επικοινωνία</title>
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


      <!-- Contact Details -->
      <h3>Στοιχεία επικοινωνίας</h3>
      <div class="contact-info">
        <p><strong>Διεύθυνση:</strong> Χρυσοστόμου Σμύρνης 17Α, Ταύρος - Αθήνα , 17778</p>
        <p><strong>Τηλέφωνο:</strong> <a href="tel:+6986680496">+6986680496</a></p>
        <p><strong>Email:</strong> <a href="mailto:antonhspap@icloud.com">antonhspap@icloud.com</a></p>
      </div>




      <!-- FORMA EPIKOINONIAS -->


      <h3>Για επικοινωνία παρακαλώ συμπληρώστε τα ακόλουθα πεδία</h3>

      <div class="fo">
        <form class="contact" action="inter4.php" method="POST">
          <label for="name">Όνομα:</label>
          <input type="text" id="name" name="name" required>
        
          <label for="phone">Τηλέφωνο:</label>
          <input type="tel" id="phone" name="phone" required>
        
          <label for="department">Αρμόδιο Τμήμα:</label>
          <select id="department" name="department" required>
            <option value="">Επιλέξτε Τμήμα</option>
            <option value="Τμήμα Υποστήριξης">Τμήμα Υποστήριξης</option>
            <option value="Τμήμα Πωλήσεων">Τμήμα Πωλήσεων</option>
            <option value="Τμήμα Βλαβών">Τμήμα Βλαβών</option>
            <option value="Λογιστήριο">Λογιστήριο</option>
          </select>
        
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        
          <label for="subject">Θέμα:</label>
          <input type="text" id="subject" name="subject" required>
        
          <label for="message">Μήνυμα:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        
          <input type="submit" value="Υποβολή">
        </form>
      </div>

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
  }
?>


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