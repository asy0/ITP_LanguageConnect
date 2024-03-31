<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="root/css/style.css">
        <title>LanguageConnect</title>
    </head>

    <body>
     <header>
        <!--- Navbar --->
         <?php include './root/frontend/navbar.php'; ?>
     </header>

      <div class="contain"><br><br><br><div class="half-page-background"></div>
         <div class="row justify-content-end">
             <br/><div class="col-md-10">
                 <br/><br/><h1 class="welcome-text"><b>Willkommen bei LanguageConnect!</b></h1><br/>

                 <p class="box-shad"> Herzlich willkommen bei LanguageConnect – Ihrem Tor zur Welt der Sprachen!
                     Wir sind eine führende Sprachschule, die sich der Bereicherung des Lebens durch Sprachen
                     verschrieben hat. Egal, ob Sie Ihre Karrierechancen erweitern, reisen oder
                     einfach nur eine neue Kultur entdecken möchten, wir sind hier, um Sie auf Ihrer Sprachreise
                     zu begleiten.
                 </p>
             </div>

             <div class="col-md-12">
                 <br/><br/><br/>
                 <div class="container2"><br/>
                     <h2 class="header2"><b>Unsere Mission</b></h2>
                     <div class="image-container">
                         <div class="icon-box"> <!-- Box für das erste Icon -->
                             <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                             <lord-icon
                                     src="https://cdn.lordicon.com/pbbsmkso.json"
                                     trigger="hover"
                                     colors="primary:#c76f16,secondary:#c76f16"
                                     style="width:180px;height:170px">
                             </lord-icon>
                         </div>
                         <div class="icon-box"> <!-- Box für das zweite Icon -->
                             <img width="180" height="180" src="https://img.icons8.com/carbon-copy/100/language.png" alt="language"/>
                         </div>
                         <div class="icon-box"> <!-- Box für das dritte Icon -->
                             <lord-icon
                                     src="https://cdn.lordicon.com/kiynvdns.json"
                                     trigger="hover"
                                     stroke="light"
                                     colors="primary:#121331,secondary:#5c460a,tertiary:#ffc738,quaternary:#e88c30,quinary:#ebe6ef"
                                     style="width:180px;height:170px">
                             </lord-icon>
                         </div>
                     </div>
                 </div><br/> <br/>

                 <p class="alltext col-md-12" style="text-align: center">
                     Unsere Mission bei LanguageConnect ist es, unseren Schülern ein einzigartiges und
                     bereicherndes Sprachlernerlebnis zu bieten. Wir glauben daran, dass Sprachen nicht
                     nur ein Kommunikationswerkzeug sind, sondern auch eine Brücke zu neuen Erfahrungen und
                     Perspektiven darstellen. Durch unsere engagierten Lehrer und innovative Lernmethoden helfen wir
                     Ihnen dabei, Ihre Ziele zu erreichen und Ihr volles Potenzial zu entfalten.
                 </p>
             </div>


             <h2 class="header2"><b>Warum LanguageConnect?</b></h2>
             <div class="warum-all">
                 <div class="warum-text">
                     <div class="cover">
                         <ul>
                             <li>Erfahrene und qualifizierte Lehrkräfte</li>
                             <li>Kleine Klassengrößen für eine persönliche Lernerfahrung</li>
                             <li>Innovative Unterrichtsmethoden und modernste Lernressourcen</li>
                             <li>Eine unterstützende und motivierende Lernumgebung</li>
                             <li>Flexible Kurszeiten und maßgeschneiderte Programme</li>
                         </ul>
                     </div>
                 </div>
             </div>





             <!--NEWSLETTER falls wir das noch einbauen wollen
                 <div class="container">
                     <h2 class="header2"><b>Unsere Kurse</b></h2>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="card">
                                 <img src="./root/img/photo4.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <h5 class="card-title">Englischkurse</h5>
                                     <p class="card-text">Unsere Englischkurse sind darauf ausgerichtet, Ihre
                                         Kommunikationsfähigkeiten in der englischen Sprache zu verbessern und
                                         Ihnen die nötigen Fähigkeiten zu vermitteln, um sich in einem
                                         englischsprachigen Umfeld zurechtzufinden.</p>
                                     <a href="#" class="btn btn-primary">Mehr erfahren</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card">
                                 <img src="./root/img/photo5.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <h5 class="card-title
                                     ">Deutschkurse</h5>

 <p class="card-text">Unsere Deutschkurse sind darauf ausgerichtet, Ihre
                                         Kommunikationsfähigkeiten in der deutschen Sprache zu verbessern und
                                         Ihnen die nötigen Fähigkeiten zu vermitteln, um sich in einem
                                         deutschsprachigen Umfeld zurechtzufinden.</p>
                                     <a href="#" class="btn btn-primary">Mehr erfahren</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card">
                                 <img src="./root/img/photo6.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <h5 class="card-title
                                     ">Spanischkurse</h5>
                                     <p class="card-text">Unsere Spanischkurse sind darauf ausgerichtet, Ihre
                                         Kommunikationsfähigkeiten in der spanischen Sprache zu verbessern und
                                         Ihnen die nötigen Fähigkeiten zu vermitteln, um sich in einem
                                         spanischsprachigen Umfeld zurechtzufinden.</p>

 <a href="#" class="btn btn-primary">Mehr erfahren</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

   -->



             <h2 class="header2"><br/><b>Unser Angebot</b></h2>
                 <p class=" alltext col-md-12" style="text-align: center"> Bei LanguageConnect bieten wir eine breite Palette von Sprachkursen für alle Altersgruppen
                     und Sprachniveaus an. Von Anfänger- bis Fortgeschrittenenkursen in verschiedenen
                     Sprachen – darunter Englisch, Deutsch, Spanisch, Französisch und viele mehr – ist für
                     jeden etwas dabei. Unsere flexiblen Kurszeiten und maßgeschneiderten Lernprogramme
                     ermöglichen es Ihnen, Ihren Unterricht an Ihren individuellen Zeitplan anzupassen.</p>


                 <div class="col-md-6">
                     <img src="./root/img/photo7.png" alt="Bildbeschreibung">
                 </div>

                 <h2>Beginnen Sie Ihre Sprachreise noch heute</h2>
                 <p>Egal, ob Sie eine neue Sprache lernen, Ihre Kenntnisse verbessern oder sich auf internationale
                     Prüfungen vorbereiten möchten – bei LanguageConnect sind Sie genau richtig.
                     Treten Sie noch heute unserer Sprachgemeinschaft bei und entdecken Sie die endlosen
                     Möglichkeiten, die Ihnen die Beherrschung einer neuen Sprache eröffnet. Kontaktieren Sie uns,
                     um mehr über unsere Kurse und Angebote zu erfahren oder vereinbaren Sie gleich eine kostenlose
                     Probestunde!
                 </p>

               </div>
             </div>
         </div>
      </div>


     <!--- Footer --->
     <?php include './root/frontend/footer.php'; ?>
  </body>
</html>
