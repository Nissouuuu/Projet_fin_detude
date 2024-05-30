<?php 
          include("php/config.php");  ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Service</title>
</head>
<body>
<div class="container">
    <div style="overflow-x:auto;">
        
        <table class="table bg-white rounded shadow-sm  table-hover" id="myTable">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nom Utilisateur</th>
                <th>Email</th>
                <th>Télephone</th>
                <th>Detail</th>
                <th>Supprimer</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;

                 $get_locale=mysqli_query($con,"SELECT * FROM `users`");
                 if(mysqli_num_rows($get_locale) > 0)
                 {
     
                     while($data=mysqli_fetch_assoc($get_locale))
                     {
                         echo '
                         
                         
     
                         <tr>
                             <td>'.$data['Nom'].'</td>
                             <td>'.$data['Prenom'].'</td>
                             <td>'.$data['Username'].'</td>
                             <td>'.$data['Email'].'</td>
                             <td>'.$data['Télephone'].'</td>
                             
                             <div class="text-center p-3">
                             <!-- Button trigger modal -->
                             <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop' . $data["Id"] . '">
                             Detail
                             </button></td>
                             <td><a href="sup.php?c='.$data['Id'].'" class="btn btn-danger">Supprimer</a></td>
                             
                             <!-- Modal -->
                             <div class="modal fade" id="staticBackdrop'.$data["Id"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                       <p for="inputPrenom" class="col-sm text-start col-form-label">Nom Utilisateur</p>
                                         <div class="col-sm">
                                           <input type="text" name="" value="'.$data['Username'].'" class="form-control" id="inputPrenom" disabled>
                                         </div>
                                       </div>
                                      

                                       <div class="mb-1">
                                       <p for="in" class="col-sm text-start col-form-label">Email</p>
                                         <div class="col-sm">
                                         <select name="groupage" class="form-select" disabled>
                                         <option value="groupage" selected disabled>'.$data['Email'].'</option>
                                         
                                       </select>
                                         </div>
                                       </div>
                                       <div class="mb-1">
                                       <p for="inputMairie" class="col-sm text-start col-form-label">Numéro</p>
                                         <div class="col-sm">
                                           <input type="text" name="Mairie" value="'.$data['Télephone'].'" class="form-control" id="inputMairie" disabled>
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