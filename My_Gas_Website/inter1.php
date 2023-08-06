<!DOCTYPE html>
<html lang="en">
  
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="calculate.js"></script>
    <title>Αρχική Σελίδα</title>
</head>

<body>

  <h1> Welcome to my site! This is the site of PAP-GAS Company!</h1>

  <!-- Navigation Menu-->
 
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
  

      
      <!--Section1: Poioi eimaste?-->
      
          <section id="who-we-are">
            <h2>Ποιοι Είμαστε;</h2>
            <p>Διαγράφοντας μία συνεχόμενα δυναμική πορεία ανάπτυξης, διαθέτει ιδιόκτητες εγκαταστάσεις αποθήκευσης πετρελαιοειδών στους Αγίους Θεοδώρους Κορινθίας
              και αριθμεί περισσότερα από 500 πρατήρια καυσίμων σε ολόκληρη την Ελλάδα. 
              Είναι μέλος του Ομίλου της Motor Oil Hellas ενός από τους πιο δυναμικούς Ομίλους στο χώρο της διύλισης 
              και της εμπορίας προϊόντων πετρελαίου στην Ελλάδα και στην ευρύτερη περιοχή της Ανατολικής Μεσογείου.
              Το όραμά μας στην PAP-GAS είναι να καταξιωθούμε ως κορυφαία ελληνική εταιρία πετρελαιοειδών, που στηρίζει τον άνθρωπο,
              προσφέροντας με έντιμο και υπεύθυνο τρόπο, ποιοτικά προϊόντα και υπηρεσίες σε προσιτές τιμές, αξιοποιώντας τη δύναμη 
              και την τεχνολογία του διυλιστηρίου της Motor Oil Hellas.</p>
          </section>
       
      <!--Section2: Ta programmata mas-->

      <section class="programs">
        <div class="container">
          <h2>Προγράμματα</h2>
          <div class="program-cards">
            <div class="program-card">
              <img src="xrisima_stoixeia/program1.png" alt="Οικιακό Πρόγραμμα">
              <h3 class="h3">Οικιακό Πρόγραμμα</h3>
            </div>
            <div class="program-card">
              <img src="xrisima_stoixeia/program2.png" alt="Επαγγελματικό Πρόγραμμα">
              <h3 class="h3">Επαγγελματικό Πρόγραμμα</h3>
            </div>
            <div class="program-card">
              <img src="xrisima_stoixeia/program3.png" alt="Φοιτητικό Πρόγραμμα">
              <h3 class="h3">Φοιτητικό Πρόγραμμα</h3>
            </div>
            <div class="program-card">
              <img src="xrisima_stoixeia/program4.png" alt="Πρόγραμμα για Αγρότες">
              <h3 class="h3">Πρόγραμμα για Αγρότες</h3>
            </div>
          </div>
          <!--Neo button gia nea selida - rediarect sto interface2-->
          <a class="cta" href="inter2.html" target="_blank">Δείτε Περισσότερα</a>
        </div>
      </section>
      
  
      <!--Section3: Photo gallery-->
      <section id="image-gallery">
        <h2>Image Gallery από τις εγκαταστάσεις της εταιρίας</h2>
        <div class="gallery">
          <img src="xrisima_stoixeia/img_gal1.jpg" alt="Εικόνα 1">
          <img src="xrisima_stoixeia/img_gal2.jpg" alt="Εικόνα 2">
          <img src="xrisima_stoixeia/img_gal3.jpeg" alt="Εικόνα 3">
          <img src="xrisima_stoixeia/img_gal4.jpg" alt="Εικόνα 4">
        </div>
      </section>
  
      <!--Section4: Tips gia eksikonomisi-->
      <section id="tips">
        <h2>Συμβουλές Εξοικονόμησης</h2>
        <ul>
          <li class="tips"><b>Υλικά μόνωσης:</b> Ελέγξτε τη μόνωση των τοίχων, των παραθύρων και των πορτών του σπιτιού σας. Μια καλή μόνωση μπορεί να συμβάλλει στη διατήρηση της θερμότητας 
            μέσα στο σπίτι και να μειώσει την απώλεια φυσικού αερίου. Σφραγίστε τυχόν ρωγμές ή κενά γύρω από παράθυρα και πόρτες για να αποτρέψετε τη διαρροή αέρα.</li>
          <br>
          <li class="tips"><b>Έλεγχος του θερμοστάτη:</b> Ρυθμίστε τον θερμοστάτη στην κατάλληλη θερμοκρασία για το σπίτι σας. Μειώνοντας τη θερμοκρασία λίγο χαμηλότερα το χειμώνα, μπορείτε να εξοικονομήσετε αξιοσημείωτη ποσότητα φυσικού αερίου. Επίσης, σκεφτείτε να χρησιμοποιήσετε ένα προγραμματιζόμενο 
            θερμοστάτη που να προσαρμόζει αυτόματα τη θερμοκρασία ανάλογα με τις ώρες που βρίσκεστε στο σπίτι ή όχι.</li>
          <br>
          <li class="tips"><b>Αποφυγή υπερθέρμανσης του νερού: </b> Ρυθμίστε τον θερμοστάτη του θερμοσίφωνα σε μια σωστή θερμοκρασία, που να είναι αρκετή για τις ανάγκες σας αλλά όχι υπερβολικά ψηλή. Η υπερθέρμανση του νερού σπαταλά πολύτιμη ενέργεια. Επίσης, μπορείτε να εξοικονομήσετε ενέργεια χρησιμοποιώντας ντους αντί για μπανιέρα
             και ελέγχοντας τον χρόνο που περνάτε υπό το νερό.</li>
          <br>
        </ul>

         <!--Video apo YouTube -- iframe-->
         <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VHb6Aio6a3s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

      </section>
  
      <!--Section5: NewsLetter-->
      <section id="newsletter">
        <h2>Εγγραφή στο Newsletter</h2>
       
          <form action="inter1.php" method="POST">
            
              <label for="username">Όνομα Χρήστη:</label>
              <input type="text" id="username" name="username" required><br>
      
              <label for="name">Όνομα:</label>
              <input type="text" id="name" name="name" required><br>
      
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required><br>
      
              <input type="submit" name="submit" id="submit" value="Εγγραφή">
         
          </form>
      </section>
          <!-- php-->
<?php   

    if($_SERVER['REQUEST_METHOD'] === 'POST'){


            $username = $_POST['username'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $conn = new mysqli('localhost', 'root', '', 'gasdb');
            if ($conn->connect_error) {
                die("Error with the connection: " . $conn->connect_error);
            } else {
                $stmt = $conn->prepare("INSERT INTO subscribers (username, name, email) VALUES(?, ?, ?)");
                $stmt->bind_param("sss", $username, $name, $email);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    //EPITIXIS EGGRAFI
                    echo '<script>alert("Εγγραφήκατε με επιτυχία!");</script>';
                } else {
                    //mi EPITIXIS EGGRAFI
                    echo '<script>alert("Η εγγραφή απέτυχε. Παρακαλώ προσπαθήστε ξανά.");</script>';
                }

                $stmt->close();
                $conn->close();
              
            }
      }
?>



    
        <!--Vazw css mesa se html-->
        <form style="margin-bottom:80px"> </form>
       


      </section>


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