<?php

class turnament {
  public  $nama,
          $feeregist,
          $timeregist,
          $TM,
          $matchday,
          $rule,
          $payment;
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $payment= "OVO, DANA, GO-PAY, BRI"){
    $this->nama=$nama;
    $this->feeregist=$feeregist;
    $this->timeregist=$timeregist;
    $this->TM=$TM;
    $this->matchday=$matchday;
    $this->rule=$rule;
    $this->payment=$payment;
  }
  
          
  public function getlabel (){
    return "$this->nama, $this->feeregist, $this->timeregist, $this->TM, $this->rule, $this->payment";
  }
}

$MCML = new turnament("MAGIC CHESS TOURNEY", 15000, "21-29 juni 2020", "30-6-2020", "1-3 juli 2020", "BO4 ke babak selanjutnya");
      
$ML = new turnament("MOBILE LEGENDS TOURNEY",40000,"21-29 juni 2020", "30-60-2020", "BO1, semifinala dan final BO3", "3-5 juli 2020");
$tour = new turnament("pes2020");
      
echo "<hr>";
echo $MCML->getlabel();
echo "<br>";
echo $ML->getlabel();
echo "<hr>";
echo $tour->nama ."<br>";
echo $tour->feeregist ."<br>";
echo $tour->timeregist ."<br>";
echo $tour->TM ."<br>";


?>