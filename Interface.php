<?php

interface infoturnament {
    public function infotour ();
}

abstract class turnament {
  public  $nama;
  private $feeregist;
  public  $timeregist,
          $TM,
          $matchday,
          $rule,
          $payment;
  protected $disc;
          
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $payment= "OVO, DANA, GO-PAY, BRI", $disc=0){
    $this->nama=$nama;
    $this->feeregist=$feeregist;
    $this->timeregist=$timeregist;
    $this->TM=$TM;
    $this->matchday=$matchday;
    $this->rule=$rule;
    $this->payment=$payment;
    $this->disc=$disc;
  }
  
          
  public function getlabel (){
    return "$this->nama, $this->feeregist, $this->timeregist";
  }
  
  abstract public function tourinfo ();
  
  public function setdisc ($disc){
    $this->disc = $disc;
  }
  public function getfee (){
    return $this->feeregist-$this->disc;
  }
}

//class child

class MC extends turnament implements infoturnament {
  public $nick;
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $nick, $payment= "OVO, DANA, GO-PAY, BRI"){
    
    parent::__construct($nama, $feeregist, $timeregist, $TM, $matchday, $rule, $payment);
    $this->nick=$nick;
  }
  
  public function tourinfo () {
    $str = "{$this->getlabel()} | {$this->TM} | {$this->matchday} <br> (peraturan : {$this->rule} | {$this->payment}";
    return "$str";
  }
  
  public function infotour(){
    $str = "{$this->tourinfo()} <br> kategori tourney : individu <br> peserta : {$this->nick}";
    return "$str";
  }
}

class ML extends turnament implements infoturnament {
  public $tim;
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $tim, $payment= "OVO, DANA, GO-PAY, BRI"){
    
    parent::__construct($nama, $feeregist, $timeregist, $TM, $matchday, $rule, $payment);
    $this->tim=$tim;
  }
  
  public function tourinfo () {
    $str = "{$this->getlabel()} | {$this->TM} | {$this->matchday} <br> (peraturan : {$this->rule} | {$this->payment}";
    return "$str";
  }
  
  public function infotour(){
    $str = "{$this->tourinfo()} <br> kategori tourney : tim <br> peserta : {$this->tim}";
    return "$str";
  }
}

//object type

class cetakinfotour {
  public $listtour = array ();
  public function tambahtour (turnament $tour){
    $this->listtour[]=$tour;
  }
  public function cetak(){
    $str = "list tourney : <br>";
    $ak = 1;
    
    foreach ($this->listtour as $lt){
      $str .= $ak++. ". {$lt->infotour()} <br>";
    }
    return $str;
  }
}


//cetak
$MCML = new MC ("MAGIC CHESS TOURNEY", 15000, "21-29 juni 2020", "30-6-2020", "1-3 juli 2020", "BO4 ke babak selanjutnya", "lemon");
      
$ML = new ML("MOBILE LEGENDS TOURNEY",40000,"21-29 juni 2020", "30-60-2020", "3-5 juli 2020", "BO1, semifinala dan final BO3", "RRQ");
      
echo "<hr>";
echo $MCML->getlabel();
echo "<br>";
echo $ML->getlabel();
echo "<hr>";
$info = new cetakinfotour();
echo $info->cetak ($MCML);
echo "<hr>";
echo $info->cetak ($ML);
echo "<hr>";
$MCML->setdisc(1000);
echo $MCML->getfee();
echo "<hr>";

$ctk = new cetakinfotour;
$ctk->tambahtour ($MCML);
$ctk->tambahtour ($ML);
echo $ctk->cetak ();
?>
