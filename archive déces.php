<?php 
include 'inc/connexion.php';

$une_semaine_avant = date('Y-m-d', strtotime('-1 week'));
$sql_select = "SELECT * FROM `déclarer décès` WHERE Dated < '$une_semaine_avant'";
$result = mysqli_query($conn,$sql_select);

if ($result->num_rows > 0) {
    
    $sql_delete = "DELETE FROM `déclarer décès` WHERE Dated < '$une_semaine_avant'";
   $dated=mysqli_query($conn,$sql_delete);
} 

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
<div class="container">
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
                <th>Heure</th>
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
                
    </div> 



</body>
</html>