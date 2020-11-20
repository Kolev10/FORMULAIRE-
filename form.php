<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>FORMULAIRE D'INSCRTIPTION</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
    </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <!--  <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>  -->

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Inscription avec Succès.</h1><br><br>
        <?php
include('connection/db.php');
if (isset($_POST['submit'])) {
 
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $niveau=$_POST['niveau'];
    $specialite=$_POST['specialite'];
    $projet=$_POST['projet'];
    $domaine=$_POST['domaine'];
    $date=$_POST['date'];
    $disponible=$_POST['disponible'];
    $jour = implode(", ",$_POST['jour']);
    $offre=$_POST['offre'];
    $interesse=$_POST['interesse'];
    $attente1=$_POST['attente1'];
    $attente2=$_POST['attente2'];
    $cv=$_FILES['cv']['name'];
    $tmp_name=$_FILES['cv']['tmp_name'];
    $motivation=$_FILES['motivation']['name'];
    $tmp_name=$_FILES['motivation']['tmp_name'];
    

    
    
		

move_uploaded_file($_FILES["cv"]["tmp_name"],'cv/'.$cv);
move_uploaded_file($_FILES["motivation"]["tmp_name"],'motivation/'.$motivation);
$query=mysqli_query($conn,"insert into form(email,tel,nom,prenom,age,niveau,specialite,projet,domaine,date,
disponible,jour,offre,interesse,attente1,attente2,cv,motivation)
values('$email','$tel','$nom','$prenom','$age','$niveau','$specialite','$projet','$domaine','$date','$disponible',
'$jour','$offre','$interesse','$attente1','$attente2','$cv','$motivation')");


if ($query){ ?>
 <h2 class="cover-heading">Inscription  avec succès</h2><br><br>
<?php    
}
else{
    echo "Not";
}     

 }
?>
       




        <p class="lead">
          <a href="formulaire.php" class="btn btn-lg btn-secondary">Retour</a>
        </p>
      </main>

     
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
