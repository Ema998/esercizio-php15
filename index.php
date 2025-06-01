<?php 
trait Calculator{
    public function sum($a, $b) {
        return $a + $b;
    }
    
    public function sub($a, $b) {
        return $a - $b;
    }
    
    public function mul($a, $b) {
        return $a * $b;
    }
    
    public function div($a, $b) {
        return $a / $b;
    }
    
    public function sqr($a){
        return sqrt($a);
    }
}

class Rettangolo {
    use Calculator;
    
    private $base;
    private $altezza;
    
    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }
    
    public function area() {
        return $this->mul($this->base, $this->altezza);
    }
    
    public function perimetro() {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }

    public function diagonale() {
        return $this->sqr($this->sum($this->sqr($this->base), $this->sqr($this->altezza)));
    }
}

$forma = new Rettangolo(4, 8);
echo "area" . $forma->area();
echo "perimetro" . $forma->perimetro();
echo "diagonale" . $forma->diagonale();

?>
