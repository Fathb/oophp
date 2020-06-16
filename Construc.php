<?php

class turnament {
  public  $nama = "nama",
          $feeregist = "harga",
          $matchday = "tanggal",
          $timeregist = "tanggal",
          $rule = "peraturan",
          $winner = "juara",
          $payment = "OVO, DANA, GO-PAY, BRI";
  
          
  public function getlabel (){
    return "$this->nama, $this->feeregist, $this->timeregist, $this->timeregist,$this->rule, $this->payment";
  }
}

$MCML = new turnament();
      $MCML->nama="MAGIC CHESS TOURNEY";
      $MCML->feeregist="15000";
      $MCML->timeregist="21-29 juni 2020";
      $MCML->TM="30 - 6 - 2020";
      $MCML->rule="BO4 ke babak selanjutnya";
      $MCML->matchday="1-3 juli 2020";
$ML = new turnament();
      $ML->nama="MOBILE LEGENDS TOURNEY";
      $ML->feeregist="40.000";
      $ML->timeregist="21-29 juni 2020";
      $ML->TM="30-6-2020";
      $ML->rule="BO1, semifinala dan final BO3";
      $ML->matchday="3-5 juli 2020";

var_dump($MCML);
echo "<br><hr><br>";
var_dump($ML);
echo "<hr>";
echo $MCML->getlabel();
echo "<br>";
echo $ML->getlabel();


?>