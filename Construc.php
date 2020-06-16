<?php

class turnament {
  public  $nama = "nama",
          $feeregist = "harga",
          $timeregist = "tanggal",
          $matchday = "tanggal",
          $rule = "peraturan",
          $winner = "juara",
          $payment = "OVO, DANA, GO-PAY, BRI";
  
  public function __construct ($nama, $feeregist, $timeregist, $matchday, $rule, $payment){
    $this->nama=$nama;
    $this->feeregist=$feeregist;
    $this->timeregist=$timeregist;
    $this->matchday=$matchday;
    $this->rule=$rule;
    $this->payment=$payment;
  }
  
          
  public function getlabel (){
    return "$this->nama, $this->feeregist, $this->timeregist, $this->timeregist,$this->rule, $this->payment";
  }
}

$MCML = new turnament("MAGIC CHESS TOURNEY", 15000, "21-29 juni 2020", "1-3 juli 2020", "BO4 ke babak selanjutnya");
      $ML->TM="30-6-2020";
      
$ML = new turnament("MOBILE LEGENDS TOURNEY",40000,"21-29 juni 2020", "BO1, semifinala dan final BO3", "3-5 juli 2020");
      $ML->TM="30-6-2020";
      
echo "<hr>";
echo $MCML->getlabel();
echo "<br>";
echo $ML->getlabel();


?>