<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../modele/tachesDAO.php';
require_once '../modele/analyseDAO.php';
require_once '../modele/taches.class.php';
require_once '../modele/analyse.class.php';

header('Content-Type: application/json');

$idCv = 10;
$idOffre = 9;
$idtache = 4;
error_log("ID CV: $idCv, ID Offre: $idOffre");

$tachesDAO = new TachesDAO();
$analyseDAO = new AnalyseDAO();

$response = array('etat' => 'En attente');
if ($idtache === null) {
    error_log("Erreur: Aucune tâche en attente trouvée pour le CV $idCv et l'offre $idOffre");
} else {
    error_log("ID Tâche en attente: $idtache");
        if ($tachesDAO->checkTaskStatusByIdAndStatus($idtache, 'Termine')) {
            $uneAnalyse = $analyseDAO->getAnalysisByIdCvAndIdOffre($idCv, $idOffre);
            //error_log($uneAnalyse->getIdAnalyse());
            if ($uneAnalyse !== null) {
                error_log("vfgvggbbg".$uneAnalyse->getSuggession());
                $_SESSION['suggestions'] = $uneAnalyse->getSuggession();
                $_SESSION['statistiques'] = $uneAnalyse->getStatistique();
                $_SESSION['lettreDeMotivation'] = $uneAnalyse->getLettreDeMotivation();
                $response = array('etat' => 'Terminé');
            } else {
                error_log("Erreur: Aucune analyse trouvée pour le CV $idCv et l'offre $idOffre");
            }
    }
}

echo json_encode($response);
?>