<!DOCTYPE html>
<html>
<head>
    <title>Page de chargement</title>
    <style>
        /* Ajoutez ici votre CSS personnalisé pour la page de chargement */
        #loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }
        .loader-animation {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .loading-text {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="loader">
        <div class="loader-animation"></div>
        <div class="loading-text">Chargement en cours...</div>
    </div>
    <?php
    // Ajoutez ici votre logique de chargement, si nécessaire
    ?>
    <script>
        function checkTache() {
            fetch('../controleur/chek_tach.php')
                .then(response => {
                    console.log('Statut de la réponse:', response.etat);
                    console.log('Contenu de la réponse:', response);
                    return response.json();
                })
                .then(response => {
                    console.log('Données reçues:', response); // Ajoutez un log pour vérifier la réponse
                    if (response.etat === 'Terminé') {
                        window.location.href = '../controleur/affichageAnalyse.php'; // Rediriger vers la page des résultats
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la vérification de la tâche:', error);
                });
        }
        // Vérifier toutes les 5 secondes
        let intervalId = setInterval(checkTache, 5000);
    </script>
</body>
</html>