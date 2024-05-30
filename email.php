<?php
// Supposons que vous avez déjà établi une connexion à votre base de données MySQL avec $conn

// Requête pour récupérer toutes les adresses e-mail des agents
$query = "SELECT email FROM users WHERE email IS NOT NULL AND email != ''";

$result = mysqli_query($conn, $query);

if ($result) {
    // Parcours des résultats et envoi d'e-mails
    while ($row = mysqli_fetch_assoc($result)) {
        $agent_email = $row['email'];
        if (!empty($agent_email)) {
            $to = $agent_email;
            $subject = "Notification de nouvelle déclaration";
            $message = "Une nouvelle déclaration de décès ou de naissance a été enregistrée.";
            $headers = 'From: webmaster@votre-site.com' . "\r\n" .
                'Reply-To: webmaster@votre-site.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers)) {
                echo "Email envoyé à: $agent_email\n";
            } else {
                echo "L'email n'a pas pu être envoyé à: $agent_email\n";
            }
        }
    }
} else {
    echo "Erreur lors de l'exécution de la requête: " . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>