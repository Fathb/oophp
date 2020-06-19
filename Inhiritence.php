<?php
class turnament {
  public  $nama,
          $feeregist,
          $timeregist,
          $TM,
          $matchday,
          $rule,
          $tim,
          $nick,
          $tipe,
          $payment;
          
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $tim, $nick, $tipe, $payment= "OVO, DANA, GO-PAY, BRI"){
    $this->nama=$nama;
    $this->feeregist=$feeregist;
    $this->timeregist=$timeregist;
    $this->TM=$TM;
    $this->matchday=$matchday;
    $this->rule=$rule;
    $this->tim=$tim;
    $this->nick=$nick;
    $this->tipe=$tipe;
    $this->payment=$payment;
  }
  
          
  public function getlabel (){
    return "$this->nama, $this->feeregist, $this->timeregist, $this->TM, $this->matchday, $this->payment";
  }
}

class cetakinfotour {
  public function cetak (turnament $tour){
    $str = "{$tour->getlabel()} | {$tour->rule} | (tipe tourney : {$tour->tipe})";
    if ($tour->tipe == "team") {
      $str .= " | (nama tim : {$tour->tim})";
    }elseif ($tour->tipe == "individu") {
      $str .= " | (nick ML : {$tour->nick})";
    }
    return "$str";
  }
}

$MCML = new turnament("MAGIC CHESS TOURNEY", 15000, "21-29 juni 2020", "30-6-2020", "1-3 juli 2020", "BO4 ke babak selanjutnya", null, "lemon", "individu");
      
$ML = new turnament("MOBILE LEGENDS TOURNEY",40000,"21-29 juni 2020", "30-60-2020", "3-5 juli 2020", "BO1, semifinala dan final BO3", "RRQ", null, "team");
      
//echo "<hr>";
//echo $MCML->getlabel();
//echo "<br>";
//echo $ML->getlabel();
echo "<hr>";
$info = new cetakinfotour();
echo $info->cetak ($MCML);
echo "<hr>";
echo $info->cetak ($ML);
echo "<hr>";

?>
