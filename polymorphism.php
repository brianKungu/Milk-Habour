<?php
interface Solution{
    public function add();
}
 $a;
 $b;

class Num implements Solution{
    
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function add(){
        return $this->a+$this->b;
    }
}

class Str implements Solution{

    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }

    public function add(){
        return $this->a." ".$this->b;
    }
    
        
}

$add_num=new Num(5,6);
$add_sum=new Str("brian","kungu");

echo $add_num->add();
echo $add_sum->add();


?>