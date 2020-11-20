<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
   

      .container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }

.container  {
  margin-top: 120px;
  max-width: 700px;
  
  border: 1px solid #9C9C9C;
  background-color: white;
  border-radius: 25px;
  
  
  
}
    </style>
    <title>Formulaire</title>
  </head>

  <body class="bg-light">

  
  
    <div class="p-3 my-3" style="margin-left: auto;
    margin-right: auto;
    width: 720px"
    >
    <img  src="image/img1.png" class="img-fluid" alt="Responsive image" style="border-radius: 10px; " > 
   </div>

<div class="container p-3 my-3" >
  <div class="">
    <h1  class="cover-heading">DEFAR Sci Formulaire d'inscription aux 50 stages en bio-informatique.</h1><br>
    <p class="">Salam, Dallal ak Jàmm ci sa Kër Kori.
    <br><br>

KOR::I est un nouveau programme de formation qui sera lancé dans DEFAR Sci en Décembre 2020 offrant 50 stages dans les domaines de la bioinformatique.
<br><br>

Nous offrons des stages en binôme de la Licence 3 & Pro au Master 1 & 2 en plus de 2 postes de thèse de doctorat.
<br><br>

Si vous êtes intéressés, merci de bien vouloir rester en contact en remplissant le formulaire et surtout en cochant le domaine qui vous intéresse le plus. 
<br><br>

Vous recevrez ensuite un mail d'information et une proposition d'entretien.</p>
  </div>
</div>


    <div class="container p-3 my-3">
      <form action="form.php" method="POST" enctype="multipart/form-data">
    


      <div class="form-group">
         <h6>Adresse e-mail</h6>
         <input type="email" class="form-control " name="email" required>
      </div> <br><br>

      <div class="form-group">
      <h6>Numéro de téléphone</h6>
        <input type="text" class="form-control " name="tel"required>
    </div><br><br>

    <div class="form-group">
         <h6>Nom</h6>
         <input type="text" class="form-control" name="nom" required> 
    </div><br><br>

    <div class="form-group">
        <h6>Prénom</h6>
         <input type="text" class="form-control" name="prenom"   required> 
    </div><br><br>


    <div class="form-group">
        <h6>Âge</h6><br>
        <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value="Moins de 15 ans" >
          <label class="form-check-label" >
          Moins de 15 ans
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value="15 à 25 ans" >
          <label class="form-check-label" >
          15 à 25 ans
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value="26 à 35 ans" >
          <label class="form-check-label" >
          26 à 35 ans
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value="36 à 45 ans" >
          <label class="form-check-label" >
          36 à 45 ans
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value=" 46 à 55 ans" >
          <label class="form-check-label" >
          46 à 55 ans
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="age" id="age" value="55 ans ou plus" >
          <label class="form-check-label" >
          55 ans ou plus
          </label>
          </div>
    </div> <br><br>

    <div class="form-group">
        <h6>Quel est votre niveau d'étude ?</h6><br>

        <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="niveau"  value="Licence 3 ou Pro" >
          <label class="form-check-label" >
          Licence 3 ou Pro
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="niveau"  value=" Master 1" >
          <label class="form-check-label" >
          Master 1
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="niveau"  value="Master 2" >
          <label class="form-check-label" >
          Master 2
          </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="niveau"  value="  PhD" >
          <label class="form-check-label" >
          PhD
          </label>
          </div>        
    </div>  <br><br>

    <div class="form-group">
         <h6>Votre spécialité ou domaine d'étude ?</h6>
         <input type="text" class="form-control" name="specialite"  required>
   
    </div> <br><br> 

    <div class="form-group">
        <h6 >Quel est votre projet professionnel ? Que voulez-vous devenir ou faire dans 5 ans ?</h6>
        <textarea name="projet" id="projet" cols="20" rows="4"  class="form-control" name="projet" value="projet" required ></textarea>
           
    </div><br><br> 

    <div class="form-group">
        <h6>Dans lequel de ces domaines voulez-vous effectuer un stage ?</h6><br>
        <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="domaine" id="domaine" value="Assemblage de différents génomes de virus, plantes et animaux" required>
          <label class="form-check-label">Assemblage de différents génomes de virus, plantes et animaux </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="domaine" id="domaine" value="Reconstruction de données phylogénétiques" required>
          <label class="form-check-label">Reconstruction de données phylogénétiques </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="domaine" id="domaine" value="Développement d’outils bioinformatiques (algorithmes, scripts, applications, logiciels etc)" required>
          <label class="form-check-label">Développement d’outils bioinformatiques (algorithmes, scripts, applications, logiciels etc) </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="domaine" id="domaine" value="Capteurs, drones et analyse d'images" required>
          <label class="form-check-label">Capteurs, drones et analyse d'images </label>
          </div><br>

          <div class="col-sm-10">
        <input class="form-check-input" type="radio" name="domaine" id="domaine" value="Modélisation de flux électriques chez les végétaux" required>
          <label class="form-check-label">Modélisation de flux électriques chez les végétaux </label>
          </div>
   </div> <br><br>   


     
     
   <div class="form-group">
         <h6>Date de début ?</h6>
         <input type="date" class="form-control " name="date" required>
      </div><br><br>

   <div class="form-group">
         <h6>Disponible pour combien de temps ? (1 mois, 2 mois, 3 mois, etc)</h6>
         <input type="text" class="form-control" name="disponible" required>

  </div><br><br>

<h6>Jour(s) et créneaux de la semaine auxquels vous êtes disponibles ?</h6><br>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col" style="left: 100%;transform: translateX(-30%);">08h-17h</th>
      <th scope="col" style="left: 100%;transform: translateX(-30%);" >17h-00h</th>
      <th scope="col" style="left: 100%;transform: translateX(-30%);">00h-08h</th>
      <th></th>
              
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Lundi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Lundi 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Lundi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Lundi 00h-08h" ></td>
    </tr>
    <tr>
      <th scope="row">Mardi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mardi 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mardi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mardi 00h-08h" ></td>
    </tr>
    <tr>
      <th scope="row">Mercredi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mercredi 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mercredi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Mercredi 00h-08h" ></td>
    </tr>
    <tr>
      <th scope="row">Jeudi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Jeudi 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Jeudi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Jeudi 00h-08h" ></td>
    </tr>
    <tr>
      <th scope="row">Vendredi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Vendredi 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Vendredi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Vendredi 00h-08h" ></td>
    </tr>
    <tr>
      <th scope="row">Samedi</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Samedi 08h-17h"></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Samedi 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Samedi 00h-08h"></td>
    </tr>
    <tr>
      <th scope="row">Dimanche</th>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Dimanche 08h-17h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Dimanche 17h-00h" ></td>
      <td><input class="form-check-input" type="checkbox" name="jour[]" id="jour" value="Dimanche 00h-08h" ></td>
    </tr>
  </tbody>
</table>
</div><br><br>
  


  


  <div class="form-group">
          <h6>Comment avez-vous eu connaissance de l'offre de stage ?</h6>
         <input type="text" class="form-control" name="offre" required>

  </div><br><br>


  <div class="form-group">
         <h6>Qu'est-ce qui vous intéresse ou attire le plus dans DEFAR Sci ?</h6>
         <input type="text" class="form-control" name="interesse" required>

  </div><br><br>

  <div class="form-group">
         <h6>Qu'attendez-vous de DEFAR Sci ?</h6>
         <input type="text" class="form-control" name="attente1" required>

  </div><br><br>

  
  <div class="form-group">
           <h6>Qu'est-ce que DEFAR Sci peut attendre de vous?</h6>
         <input type="text" class="form-control" name="attente2" required>

  </div><br><br>

  <div class="form-group">
         <h6>Votre CV</h6>
         <input type="file" class="form-control " name="cv"  required style="width:400px">
  </div><br><br> 

      <div class="form-group">
      <h6>Motivation</h6>
         <input type="file" class="form-control " name="motivation"required style="width:400px">
      </div> <br>



      <h7>Une copie de vos réponses sera envoyée par e-mail à l'adresse indiquée.</h7>
      <br><br>



  
   
          
           
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" id="submit" style="width:200px">Envoyer</button>
      </form>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>