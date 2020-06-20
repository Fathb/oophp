public $nick;
  
  public function __construct ($nama = "nama", $feeregist = "harga", $timeregist = "tanggal", $TM = "tanggal", $matchday = "tanggal", $rule = "peraturan", $nick, $payment= "OVO, DANA, GO-PAY, BRI"){
    
    parent::__construct($nama, $feeregist, $timeregist, $TM, $matchday, $rule, $nick, $payment);
    $this->nick=$nick;
