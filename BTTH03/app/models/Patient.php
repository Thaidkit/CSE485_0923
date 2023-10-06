<?php

class Patient{
    //properties
    private $id;
    private $namePatient;
    private $date;
    private $symptom;
    private $idDoctor;

    // Methods: khai bao cac phuong thuc
    // ham khoi tao ra cac doi tuong
    public function __construct($id, $namePatient, $date, $symptom, $idDoctor){
        $this->id = $id;
        $this->namePatient = $namePatient;
        $this->date = $date;
        $this->symptom = $symptom;
        $this->idDoctor = $idDoctor;

    }

    // Getter/Setter
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNamePatient(){
        return $this->namePatient;
    }
    public function setNamePatient($namePatient){
        $this->namePatient = $namePatient;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getSymptom(){
        return $this->symptom;
    }
    public function setSymptom($symptom){
        $this->symptom = $symptom;
    }
    public function getIdDoctor(){
        return $this->idDoctor;
    }
    public function setIdDoctor($idDoctor){
        $this->idDoctor = $idDoctor;
    }
}

?>