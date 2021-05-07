<?php
class Bmi_model extends CI_Model {
    public $berat, $tinggi;

    public function nilaiBMI() {
        $tinggi = $this->tinggi/100;
        $bmi = ($this->berat / pow($tinggi,2));
        return (round($bmi, 2));
    }
    public function statusBMI() {
        if($this->nilaiBMI() < 18.5) {
            return "Kekurangan Berat Badan";
        }elseif($this->nilaiBMI() < 25.0) {
            return "Normal (Ideal)";
        }elseif($this->nilaiBMI() < 30.0) {
            return "Kelebihan Berat Badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }
}

?>