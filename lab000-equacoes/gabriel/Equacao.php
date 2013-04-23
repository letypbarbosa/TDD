<?php 
/**
 * 
 */

class Equacao{
    
    public $delta;
    
    public $a;
    public $b;
    public $c;
    
    public $x1;
    public $x2;
    
    public $xV;
    public $yV;


    public function Equacao($a, $b, $c){
   
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $this->delta = $this->getDelta();
    
        $this->x1    = $this->getX1();
        $this->x2    = $this->getX2();
        
        $this->xV    = $this->getXv();
        $this->yV    = $this->getYv();
    }
    
    public function getDelta(){
        
        if ($this->a != 0) {
            return ($this->b * $this->b) - 4 * ($this->a * $this->c);    
        }
        else{
            return null;
        }
    }
    
    public function getX1(){
        
        if ($this->delta >= 0) {
            return (-$this->b + sqrt($this->delta) ) / (2 * $this->a);
        }
        else{
            return null;
        }
    }
    
    public function getX2(){
        
        if ($this->delta >= 0) {
            return (-$this->b - sqrt($this->delta) ) / (2 * $this->a);
        }
        else{
            return null;
        }
    }
    
    public function getXv(){
        return -$this->b/ (2 * $this->a); 
    }
    
    public function getYv(){
        return -$this->delta / (4 * $this->a);
    }
    
    
    

//    public function executa(){
//        
//        # ax2 + bx + c = 0
//        $fX = ($this->a*($this->x1 * $this->x1) + $this->b * $this->x1 + $this->c = 0);
//    }
}
?>
