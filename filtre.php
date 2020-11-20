<?php 
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table etudiants
$reponse = $bdd->query('SELECT * FROM form');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>


<!--datatables-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<div class="container p-3 my-3" >
  <div class="">
    <h1  class="cover-heading">DEFAR Sci recrute 50 stagiaires en Bioinformatique</h1>
  </div>
</div>




<div class="container">



<div class="card" >
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">les filtres</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

            
            <table id="example" class="table table-bordered table-responsive-md table-striped" style="width:100%">
  <thead >
    <tr>
      <th class="th-sm">Âge

      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td class="pt-3-half" contenteditable="true"><?php echo $donnees['age']; ?></td>
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>
<br><br>


<?php 
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table etudiants
$reponse = $bdd->query('SELECT * FROM form');
?>

           
<table id="example4" class="table table-bordered table-responsive-md table-striped" style="width:100%">
  <thead >
    <tr>
      <th class="th-sm">Niveau d'étude (L3, M1, M2, PhD)

      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td class="pt-3-half" contenteditable="true"><?php echo $donnees['niveau']; ?></td>
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>
<br><br>

<?php 
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table etudiants
$reponse = $bdd->query('SELECT * FROM form');
?>

<table id="example1" class="table table-bordered table-responsive-md table-striped" style="width:100%">
  <thead >
    <tr>
      <th class="th-sm">Disponible pour combien de temps ? (1 mois, 2 mois, 3 mois, etc)

      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td class="pt-3-half" contenteditable="true"><?php echo $donnees['disponible']; ?></td>
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>
<br><br>


<?php 
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table etudiants
$reponse = $bdd->query('SELECT * FROM form');
?>

           
<table id="example2" class="table table-bordered table-responsive-md table-striped" style="width:100%">
  <thead >
    <tr>
      <th class="th-sm">Domaine de stage

      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td class="pt-3-half" contenteditable="true"><?php echo $donnees['domaine']; ?></td>
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>
<br><br>


<?php 
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table etudiants
$reponse = $bdd->query('SELECT * FROM form');
?>

           
<table id="example3" class="table table-bordered table-responsive-md table-striped" style="width:100%">
  <thead >
    <tr>
      <th class="th-sm">Jour de la semaine et Créneaux disponible (Lundi à Dimanche)

      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td class="pt-3-half" contenteditable="true"><?php echo $donnees['jour']; ?></td>
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>
<br><br>








<!--datatables plugin -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script >

$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false
    } );
} );


$(document).ready(function() {
    $('#example1').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false
    } );
} );


$(document).ready(function() {
    $('#example2').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false
    } );
} );


$(document).ready(function() {
    $('#example3').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false
    } );
} );

$(document).ready(function() {
    $('#example4').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false
    } );
} );





    </script>
