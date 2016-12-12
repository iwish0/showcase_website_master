<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XENON-IT - Gestion électronique de vos documents, dématérialisation...</title>
    <link rel="stylesheet" href="assets/stylesheets/_bootstrap.css" />
    <link rel="stylesheet" href="assets/stylesheets/_style.css" />
    <meta name="keywords" content="gestion électronique des documents, ged, dématérialisation, dématérialisation des factures fournisseurs, signature électronique" />
    <meta name="description" content="Gestion électronique de vos documents, dématérialisation de vos factures fournisseurs, signature électronique... "/>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">XENON-IT</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Notre société<span class="sr-only">(current)</span></a></li>
             <li><a href="#">Notre expertise</a></li>
          <li><a href="#">Nos solutions</a></li>
          <li><a href="#" data-toggle="modal" data-target="#modalContact">Contact</a></li>
        </ul>
       </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- modal for contact link -->
  <div class="modal fade" id="modalContact" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Formulaire de contact</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <form method="post" action="">
                <div class="form-group col-md-6">
                  <label for="lname" class="control-label">Nom:</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="form-group col-md-6">
                  <label for="fname" class="control-label">Prenom:</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group col-md-6">
                  <label for="company" class="control-label">Entreprise:</label>
                  <input type="text" class="form-control" id="company" name="company" />
                </div>
                <div class="form-group col-md-6">
                  <label for="department" class="control-label">Fonction:</label>
                  <input type="text" class="form-control" id="department" name="department" />
                </div>
                <div class="form-group col-md-6">
                  <label for="tel" class="control-label">Téléphone:</label>
                  <input type="text" class="form-control" id="tel" name="tel" />
                </div>
                <div class="form-group col-md-6">
                  <label for="email" class="control-label">Email:</label>
                  <input type="text" class="form-control" id="email" name="email" />
                </div>
                <div class="form-group col-md-12">
                  <label for="message" class="control-label">Message:</label>
                  <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="col-md-6">
                  <button type="button" class="btn btn-primary">Valider</button>
                </div>
             </form>
            </div> <!-- col -->
            <div class="col-md-6">
              <address>
                <strong>XENON-IT</strong><br>
                60 rue du méréchal Foch<br>
                code postal ville<br>
                <abbr title="Phone">tél:</abbr>06 01 32 44 66
                 <abbr title="Phone">tél:</abbr>09 86 16 70 32
              </address>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.466599778452!2d3.0095478157381557!3d50.637024979501554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5571dc54f9d%3A0x2b1829e8464fc10d!2s60+Rue+du+Mar%C3%A9chal+Foch%2C+59160+Lille!5e0!3m2!1sfr!2sfr!4v1481362934094" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div><!-- row -->
        </div> <!-- modal body -->
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <header class="text-center">
    <h1>XENON-IT | Notre société <img src="assets/images/business-building.svg" class="hidden-xs" /> </h1>
  </header>
  <div class="hidden-xs hidden-sm arrow-down"></div>
  <!-- main container -->
  <div class="container-fluid" id="companyDescription">
    <div class="row">
    <div class="col-sm-6 col-md-offset-1 col-md-4 img-left-slide">
      <h2>Nos métiers</h2>
      <ul>
        <li>Modulation des process métiers BP</li>
        <li>Gestion électronique des documents (ged)</li>
        <li>Dématérialisation (factures fournisseur...)</li>
        <li>Extraction des données (Image/Document) OCR/ICR/LAD/OBR</li>
        <li>Développement des applications</li>
        <li>Intéropérabilité des données</li>
        <li>Signature électronique</li>
      </ul>
    </div>
    <div class="col-sm-6 col-md-offset-2 col-md-4 img-right-slide">
      <h3>Nos valeurs</h3>
      <ul class="list-unstyled">
        <li><img src="assets/images/hq.svg" />Qualité de service</li>
        <li><img src="assets/images/agilite.svg" />Agilité (Ecoute et adaptation)</li>
        <li><img src="assets/images/interactivite.svg" />Interactivité</li>
         <li><img src="assets/images/result.svg" />Sens du résultat</li>
        <li></li>
      </ul>
    </div>
  </div>
  </div>

   <div id="social-media" class="container-fluid text-center">
   <div class="row">
  <ul class="list-inline text-center">
      <li><a href=""><img src="assets/images/facebook_icon.png"/></a></li>
      <li><a href=""><img src="assets/images/google_plus_icon.png" /></a></li>
      <li><a href=""><img src="assets/images/twitter_icon.png" /></a></li>
      <li><a href=""><img src="assets/images/linkedin_icon.png" /></a></li>
   </ul>
   <a href="#modalContact" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-map-marker"></span> Nous trouver</a>
 </div>  
 </div>
 </body>

  <div class="container-fluid">
    <div class="row showcase tab-content">
    <div class="tab-pane fade in active" id="ged1">
      <div class="col-sm-6 col-md-offset-1 col-md-5">
        <img src="assets/images/ged.jpg" alt="ged" class="img-responsive img-left-slide">
      </div>
      <div class="col-sm-6 col-md-5">
       <h3>Gestion électronique des documents</h3>
          <div class="text-justify">
            <p>La gestion électronique de documents ou GED est un système informatisé qui permet la numérisation et l'archivage des documents de votre entreprise.</p>
            <p>La GED participe aux processus de collaboration, de capitalisation et d'échange d'informations. Elle prend en compte le besoin de gestion des documents selon leur cycle de vie, de la création à l'archivage en passant par la gestion des différentes versions.</p>
            <p>Les solutions et projets de GED peuvent permettre des gains en qualité et en coût rapide pour les organisations, qu'il s'agisse d'entreprises privées ou d'administrations.</p>
            <p>Nous mettons notre expertise à votre service pour vous accompagner dans votre projet.</p>
            <a href="#ged2" data-toggle="tab" class="btn btn-primary">En savoir plus <span class="glyphicon glyphicon-chevron-right"></a>
            <a href="#" data-toggle="modal" data-target="#modalContact" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
          </div>
      </div>
    </div> <!-- ged1-->

        <!-- test -->
    <div class="tab-pane fade" id="ged2">
        <div class="col-sm-6 col-md-offset-1 col-md-5">
          <img src="assets/images/ged.jpg" alt="ged" class="img-responsive img-left-slide">
        </div>
        <div class="col-sm-6 col-md-5">
        <h3>GEDKKKKK</h3>
          <div class="text-justify">
            <p>La gestion électronique de documents ou GED est un système informatisé permettant la numérisation et l'archivage des documents de votre entreprise.</p>

             <a href="#ged1" data-toggle="tab" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour</a>
              <a href="#" data-toggle="modal" data-target="#modalContact" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
          </div>
        </div>
      </div> <!-- ged2-->







    
    </div> <!-- row -->
   <div class="row showcase tab-content">
    <div class="tab-pane fade in active" id="demat1">
     <div class="col-sm-6 col-md-offset-1 col-md-push-5 col-md-5">
        <img src="assets/images/dematerialisation.png" alt="dematerialisation" class="img-responsive img-right-slide">
    </div> <!-- col -->
    <div class="col-sm-6 col-md-pull-5 col-md-5">
      <h3>Dématérialisation</h3>
        <div class="text-justify">
            <p>Factures clients et fournisseurs, contrats, documents rh... notre plateforme de dématérialisation sécurisée permet de traiter, de manière intégrée, l'ensemble de vos flux entrants et sortants ainsi que leur archivage à vocation probatoire.</p>
              <a href="#demat2" data-toggle="tab" class="btn btn-primary">En savoir plus <span class="glyphicon glyphicon-chevron-right"></span></a>
                <a href="#" data-toggle="modal" data-target="#modalContact" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        </div>
    </div> <!-- col -->
    </div> <!-- demat1 -->
    <div class="tab-pane fade" id="demat2">
     <div class="col-sm-6 col-md-offset-1 col-md-push-5 col-md-5">
        <img src="assets/images/dematerialisation.png" alt="dematerialisation" class="img-responsive img-right-slide">
    </div> <!-- col -->
    <div class="col-sm-6 col-md-pull-5 col-md-5">
      <h3>Dématérialisation 2</h3>
        <div class="text-justify">
            <p>Factures clients et fournisseurs, contrats, documents rh... notre plateforme de dématérialisation sécurisée permet de traiter, de manière intégrée, l'ensemble de vos flux entrants et sortants ainsi que leur archivage à vocation probatoire.</p>
             <p>Factures clients et fournisseurs, contrats, documents rh... notre plateforme de dématérialisation sécurisée permet de traiter, de manière intégrée, l'ensemble de vos flux entrants et sortants ainsi que leur archivage à vocation probatoire.</p>
              <a href="#demat1" data-toggle="tab" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour</a>
                <a href="#" data-toggle="modal" data-target="#modalContact" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        </div>
    </div> <!-- col -->
    </div> <!-- demat2 -->
  </div> <!-- row -->
  
  

  


  <div class="row showcase">
    <div class="col-sm-6 col-md-offset-1 col-md-5">
        <img src="assets/images/signature_electronique.jpg" alt="signature électronique" class="img-responsive img-left-slide">
    </div> <!-- col -->
    <div class="col-sm-6 col-md-5">
      <h3>Signature électronique</h3>
        <div class="text-justify">
            <p>Depuis 2000, la signature électronique d'un document a en France la même valeur légale qu'une signature manuscrite.</p>
        </div>
    </div> <!-- col -->
  </div> <!-- row -->
</div> <!-- container -->

<footer class="container-fluid">
  <div class="row text-center">
    <ul class="list-inline">
      <li><a href="">Mention légale</a></li>
      <li><a href="">Text</a></li>
      <li><a href="">Text</a></li>
    </ul>
  </div>
</footer>
<script type="text/javascript" src="assets/javascripts/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/javascripts/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/javascripts/main.js"></script>
</body>
</html>