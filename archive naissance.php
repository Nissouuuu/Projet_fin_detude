<?php 
include 'inc/connexion.php';

$une_semaine_avant = date('Y-m-d', strtotime('-1 week'));
$sql_select = "SELECT * FROM `déclarer naissance` WHERE Daten < '$une_semaine_avant'";
$result = mysqli_query($conn,$sql_select);

if ($result->num_rows > 0) {
    
    $sql_delete = "DELETE FROM `déclarer naissance` WHERE Daten < '$une_semaine_avant'";
   $daten=mysqli_query($conn,$sql_delete);
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

    <title>Archive Naissance</title>
</head>
<body>
<div class="container">
    <div style="overflow-x:auto;">
        
        <table class="table bg-white rounded shadow-sm  table-hover" id="myTable">
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
                <th>Heure</th>
                <th>Numero d'acte Pére</th>
                <th>Prénom Pére</th>
                <th>Date Naissance Pére</th>
                <th>Numero d'acte Mére</th>
                <th>Nom Mére</th>
                <th>Prénom Mére</th>
                <th>Date Naissance Pére</th>

                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;

                 $get_locale=mysqli_query($conn,"SELECT * FROM `déclarer Naissance`");
                 if(mysqli_num_rows($get_locale) > 0)
                 {
     
                     while($data=mysqli_fetch_assoc($get_locale))
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
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Sexe</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Sexe'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Cas Exceptionnele</p>
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
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Wilaya</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Wilaya'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputMairie" class="col-sm text-start col-form-label">Commune</p>
                                         <div class="col-sm">
                                           <input type="text" name="Mairie" value="'.$data['Mairie'].'" class="form-control" id="inputMairie" disabled>
                                         </div>
                                       </div>

                                       <div class="mb-1">
                                       <p for="inputMairie" class="col-sm text-start col-form-label">Date De Naissance</p>
                                         <div class="col-sm">
                                           <input type="text" name="Mairie" value="'.$data['Jour De Naissance'].'" class="form-control" id="inputMairie" disabled>
                                         </div>
                                       </div>


                                       <div class="mb-1">
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Heure </p>
                                         <div class="col-sm">
                                           <input type="text" name="prenom" value="'.$data['Heure de Naissance'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Numero acte pére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Numero acte pére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Prenom Pére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Prenom Pére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Date naissance pére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Date naissance pére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Numero acte Mére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Numero acte Mére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Nom Mére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Nom Mére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">prenom Mére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['prenom Mére'].'" class="form-control" id="inputNom" disabled>
                                             </div>
                                       </div>
                                       <div class="mb-1 text-center">
                                             <p for="inputNom" class="col-sm text-start col-form-label">Date naissance Mére</p>
                                             <div class="col-sm">
                                               <input type="text" name="nom" value="'.$data['Date naissance Mére'].'" class="form-control" id="inputNom" disabled>
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