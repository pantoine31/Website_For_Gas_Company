
 function showAlert(){

    var form = document.getElementById("calc");
    var kilovat = form.elements["kWh"].value;
    var days = form.elements["days"].value;
    var tm = form.elements["area"].value;


    var message1 = "Οι τιμές για τις οποίες θα γίνει ο υπολογισμός είναι οι:\n" +
    "Οι κιλοβατώρες που έχετε βάλει είναι: " + kilovat + "\n" +
    "Οι μέρες που έχετε βάλει είναι: " + days + "\n" +
    "Ο χώρος που έχετε βάλει είναι: " + tm + "Τετραγωνικά Μέτρα";

    
    
    alert(message1);


    // ypologismos kathe metavlitis gia na vroume to sinoliko

    let kostos_dimou;
    if (tm >= 0 && tm<50) {
        kostos_dimou = tm * 0.12 * days/365;
      } else if (tm >= 50 && tm<90) {
        kostos_dimou = tm * 0.20 * days/365;
      } else {
        kostos_dimou = tm * 0.31 * days/365;
      }

      let ikw;
      if (kilovat >= 0 && kilovat<=1600) {
        ikw = kilovat * 0.01315  * days/365;
      } else if (kilovat >1600  && kilovat<=2000) {
        ikw = kilovat * 0.01480  * days/365;
      } else {
        ikw = kilovat * 0.01625 * days/365;
      }

      let synol_xr;
      if (kilovat >= 0 && kilovat<=1600) {
        synol_xr = kilovat * 0.00623  ;
      } else if (kilovat >1600  && kilovat<=2000) {
        synol_xr = kilovat * 0.00768 ;
      } else {
        synol_xr = kilovat * 0.00915 ;
      }

      var message2 = "Ακολουθούν οι επιμέρους χρεώσεις , πριν την τελική χρέωση:\n" +
      "Το κόστος προς τον Δήμο είναι: " + kostos_dimou.toFixed(2) + "€" +"\n" +
      "Το Συνολικό Κόστος ΥΚΩ είναι: " + ikw.toFixed(2) + "€" + "\n" +
      "Οι συνολικές Χρεώσεις είναι: " + synol_xr.toFixed(2) + "€" + "\n";
  
      alert(message2);


      // ypologismos telikoy posou meta apo prosthesi twn parapanw
      
      let final;

      final=kostos_dimou+ikw+synol_xr;

      var message3 = "Η τελική χρέωση παγίου κάθε μήνα είναι:" + final.toFixed(2) +"€";

      alert(message3);





}