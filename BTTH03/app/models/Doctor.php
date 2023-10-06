<?php
class Doctor{
    //properties
    private $id;
    private $nameDoctor;
    private $specialty;

    // Methods: khai bao cac phuong thuc
    // ham khoi tao ra cac doi tuong
    public function __construct($id, $nameDoctor, $specialty){
        $this->id = $id;
        $this->nameDoctor = $nameDoctor;
        $this->specialty = $specialty;

    }

    // Getter/Setter
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNameDoctor(){
        return $this->nameDoctor;
    }
    public function setNameDoctor($nameDoctor){
        $this->nameDoctor = $nameDoctor;
    }

    public function getSpecialy(){
        return $this->specialty;
    }
    public function setSpecialy($specialty){
        $this->specialty = $specialty;
    }
}
?>