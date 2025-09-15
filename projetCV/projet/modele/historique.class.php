<?php
class Historique {
    private $id_historique;
    private $id_cv;
    private $iteration;
    private $statistique;
    private $date_iteration;

    public function __construct($id_historique = null, $id_cv = ' ', $iteration = ' ', $statistique = ' ', $date_iteration = ' '){
        $this->id_historique = $id_historique;
        $this->id_cv = $id_cv;
        $this->iteration = $iteration;
        $this->statistique = $statistique;
        $this->date_iteration = $date_iteration;
    }

    public function getIdHistorique(){
        return $this->id_historique;
    }

    public function setIdHistorique($id_historique){
        $this->id_historique = $id_historique;
    }

    public function getIdCv(){
        return $this->id_cv;
    }

    public function setIdCv($id_cv){
        $this->id_cv = $id_cv;
    }

    public function getIteration(){
        return $this->iteration;
    }

    public function setIteration($iteration){
        $this->iteration = $iteration;
    }

    public function getStatistique(){
        return $this->statistique;
    }

    public function setStatistique($statistique){
        $this->statistique = $statistique;
    }

    public function getDateIteration(){
        return $this->date_iteration;
    }

    public function setDateIteration($date_iteration){
        $this->date_iteration = $date_iteration;
    }

    public function __toString(){
        return "Historique [id_historique = ".$this->id_historique.", id_cv = ".$this->id_cv.", iteration = ".$this->iteration.", statistique = ".$this->statistique.", date_iteration = ".$this->date_iteration."]";
    }
}
?>