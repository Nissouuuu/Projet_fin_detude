<?php 
include 'inc/connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Archive Décès</title>
</head>
<body>
<style>
    #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#anis {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>
  <center><h1 >Archive Décès</h1></center>
<div class="container">
<input type="text" id="myInput" onkeyup="Amine()" placeholder="Search for names..">
    <div style="overflow-x:auto;">
        <table class="table bg-white rounded shadow-sm  table-hover" id="myTable">
            <thead>
              <tr>
                <th>N° d'acte</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date De Naissance</th>
                <th>Sexe</th>
                <th>Cas Exceptionelle</th>
                <th>Wilaya</th>
                <th>Commune</th>
                <th>Date De Déce</th>
                <th>Heure De Déce</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;

                 $get_locale=mysqli_query($conn,"SELECT * FROM `déclarer décès`");
                 if(mysqli_num_rows($get_locale) > 0)
                 {
     
                     while($data=mysqli_fetch_assoc($get_locale))
                     {
                         echo '
                         
                         
     
                         <tr>
                         
                             <td>'.$data["Numero acte"].'</td>
                             <td>'.$data['Nom'].'</td>
                             <td>'.$data['Prenom'].'</td>
                             <td>'.$data['Date De Naissance'].'</td>
                             <td>'.$data['Sexe'].'</td>
                             <td>'.$data['exp'].'</td>
                             <td>'.$data['Wilaya'].'</td>
                             <td>'.$data['Mairie'].'</td>
                             <td>'.$data['Jour de Déce'].'</td>
                             <td>'.$data['Heure De Déce'].'</td>
                            
                             <div class="text-center p-3">
                             <!-- Button trigger modal -->
                             <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop' . $data["id"] . '">
                                Detail
                             </button></td>
                             
                             <!-- Modal -->
                             <div class="modal fade" id="staticBackdrop'.$data["id"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <form method="post">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h1 class="modal-title fs-5" id="staticBackdropLabel">informations</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body  justify-content-center">
                                     <input type="hidden" value="'.$data["Numero acte"].'" name="bs" id="">
                                     <div class="mb-1">
                                     <p for="inputPrenom" class="col-sm text-start col-form-label">Numero acte</p>
                                       <div class="col-sm">
                                         <input type="text" name="prenom" value="'.$data["Numero acte"].'" class="form-control" id="inputPrenom" disabled>
                                       </div>
                                     </div>

                                         <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Nom</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Nom'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Prenom</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Prenom'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                     <p for="inputPrenom" class="col-sm text-start col-form-label">Date De Naissance</p>
                                       <div class="col-sm">
                                         <input type="text" name="Date" value="'.$data["Date De Naissance"].'" class="form-control" id="inputDateDeNaissance" disabled>
                                       </div>
                                     </div>

                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Sexe</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Sexe'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                      
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Cas Exceptionelle</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['exp'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="in" class="col-sm text-start col-form-label">Wilaya</p>
                                         <div class="col-sm">
                                         <select name="groupage" class="form-select" disabled>
                                         <option value="groupage" selected disabled>'.$data['Wilaya'].'</option>
                                         
                                       </select>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Mairie</p>
                                         <div class="col-sm">
                                           <input type="text" name="Mairie" value="'.$data["Mairie"].'" class="form-control" id="inputMairie" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="inputNumber" class="col-sm text-start col-form-label">Date de Déce</p>
                                         <div class="col-sm">
                                         <select name="jour" id="" class="form-select" disabled>
                                         <option value="jour" selected disabled>'.$data['Jour de Déce'].'</option>
                                         
                                             </select>
                                          

                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Heure De Déce</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Heure De Déce'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                   </div>
                                   <div class="modal-footer">
                                      
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                   </div>
                                   

                                 </div>
                               </div>
                               <form>
                             </div>
                             
                         </tr>';
                         $i++;
                         
                     }
                     
                     
                 }
     
            ?>
            </tbody>
          </table>
          </div>
          <script>
function Amine() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                break; // Si une correspondance est trouvée dans une colonne, afficher la ligne
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

</script>           
          <div class="container">
          <center><h1 >Archive Naissance</h1></center>
<input type="text" id="anis" onkeyup="myFunction()" placeholder="Search for names..">
<div style="overflow-x:auto;">
<table class="table bg-white rounded shadow-sm  table-hover" id="hatem">
    <thead>
      <tr>
         
         <th>Nom</th>
         <th>Prénom</th>
        
         <th>Sexe</th>
         <th>Cas Exceptionnel</th>
         <th>Description</th>
         <th>Wilaya</th>
         <th>Commune</th>
         <th>Date De Naissance</th>
         <th>Heure </th>
         <th>Numero acte pére</th>
         
         <th>Prenom Pére</th>
         <th>Date Naissance Pére</th>
         <th>Numero acte Mére</th>
         <th>Nom Mére</th>
         <th>Prenom Mére</th>
         <th>Date Naissance Mére</th>
         <th>Detail</th>

        
         

        


                
      </tr>
    </thead>
    <tbody>
      <?php
      
      $i=1;

      $get_local=mysqli_query($conn,"SELECT * FROM `déclarer naissance`");
      if(mysqli_num_rows($get_local) > 0)
                 {
     
                     while($data=mysqli_fetch_assoc($get_local))
                     {
                         echo '
                         
                         
     
                         <tr>
                         
                             <td>'.$data['Nom'].'</td>
                             <td>'.$data['Prenom'].'</td>
                             <td>'.$data['Sexe'].'</td>
                             <td>'.$data['exp'].'</td>
                             <td>'.$data['Description'].'</td>
                             <td>'.$data['Wilaya'].'</td>
                             <td>'.$data['Mairie'].'</td>
                             <td>'.$data['Jour De Naissance'].'</td>
                             <td>'.$data['Heure de Naissance'].'</td>
                             <td>'.$data['Numero acte pére'].'</td>
                             <td>'.$data['Prenom Pére'].'</td>
                             <td>'.$data['Date naissance pére'].'</td>
                             <td>'.$data['Numero acte Mére'].'</td>
                             <td>'.$data['Nom Mére'].'</td>
                             <td>'.$data['prenom Mére'].'</td>

                             <td>'.$data['Date naissance Mére'].'</td>


                            
                             <div class="text-center p-3">
                             <!-- Button trigger modal -->
                             <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop' . $data["id"] . '">
                                Detail
                             </button></td>
                             
                             <!-- Modal -->
                             <div class="modal fade" id="staticBackdrop'.$data["id"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <form method="post">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h1 class="modal-title fs-5" id="staticBackdropLabel">informations</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body  justify-content-center">

                                         <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Nom</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Nom'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Prenom</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Prenom'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                     <p for="inputPrenom" class="col-sm text-start col-form-label">Date De Naissance</p>
                                       <div class="col-sm">
                                         <input type="text" name="Date" value="'.$data["Jour De Naissance"].'" class="form-control" id="inputDateDeNaissance" disabled>
                                       </div>
                                     </div>
                                     <div class="mb-1">
                                     <p for="inputPrenom" class="col-sm text-start col-form-label">Heure De Naissance</p>
                                       <div class="col-sm">
                                         <input type="text" name="prenom" value="'.$data['Heure de Naissance'].'" class="form-control" id="inputPrenom" disabled>
                                       </div>
                                     </div>

                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Sexe</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Sexe'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                      
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Cas Exceptionnel</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['exp'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Description</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Description'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="in" class="col-sm text-start col-form-label">Wilaya</p>
                                         <div class="col-sm">
                                         <select name="groupage" class="form-select" disabled>
                                         <option value="groupage" selected disabled>'.$data['Wilaya'].'</option>
                                         
                                       </select>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Mairie</p>
                                         <div class="col-sm">
                                           <input type="text" name="Mairie" value="'.$data["Mairie"].'" class="form-control" id="inputMairie" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="inputNumber" class="col-sm text-start col-form-label">Numero acte pére	</p>
                                         <div class="col-sm">
                                         <select name="jour" id="" class="form-select" disabled>
                                         <option value="jour" selected disabled>'.$data['Numero acte pére'].'</option>
                                         
                                             </select>
                                          

                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Preom Pére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Prenom Pére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Date naissance pére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Date naissance pére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Numero acte Mére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Numero acte Mére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Nom Mére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Nom Mére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Preom Mére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['prenom Mére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Date naissance Mére</p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Date naissance Mére'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                   </div>
                                   <div class="modal-footer">
                                      
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                   </div>
                                   

                                 </div>
                               </div>
                               <form>
                             </div>
                             
                         </tr>';
                         $i++;
                         
                     }
                     
                     
                 }


      ?>
   
    </tbody>
  </table>
  </div>

  </div>

  

<script>
function myFunction() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("anis");
    filter = input.value.toUpperCase();
    table = document.getElementById("hatem");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                break; // Si une correspondance est trouvée dans une colonne, afficher la ligne
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

</script>           
                
            </div>
            </div>



</body>
</html>