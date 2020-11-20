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
    <h1  class="cover-heading">Liste des inscription en bio-informatique.</h1>
  </div>
</div>




<div class="container">


<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">ID

      </th>
      </th>
      <th class="th-sm">Nom

      </th>
      <th class="th-sm">Prénom

      </th>
      <th class="th-sm">Numéro téléphone

      </th>
      <th class="th-sm">Email

      </th>
      <th class="th-sm">Domaine d'étude

      </th>
      <th class="th-sm">Projet professionnel

      </th>
    </tr>
  </thead>
  <tbody>
  <?php  // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
      <td><?php echo $donnees['id']; ?></td>
    	<td><?php echo $donnees['nom']; ?></td>
    	<td> <?php echo $donnees['prenom']; ?></td>
      <td><?php echo $donnees['tel']; ?></td>
      <td><?php echo $donnees['email']; ?></td>
    	<td><?php echo $donnees['domaine']; ?></td>
      <td><?php echo $donnees['projet']; ?></td>
      
    </tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

    
   
  </tbody>
  <tfoot>
   
  </tfoot>
</table>

</div>

<div></div>

<!--datatables plugin -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script >
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  
});

    </script>
    
</body>
</html>