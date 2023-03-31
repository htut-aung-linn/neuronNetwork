<?php 
class Cell{
    public $value;
    public $weight;
    function __construct(){
        $this->value = 0;
        $this->weight = (array) null;
    }
    function setWeight($num){
        for($i=0; $i<$num; $i++){
            $w = rand(-5, 5);
            array_push($this->weight, $w);
        }
    }
}

class Network{
    public $network;
    public $bais;
    function __construct($numCellInLayer, $bais){
        $this->network = (array) null;
        $this->bais = (array) null;
        $this->bais = $bais;
        $l = 0;
        
        foreach($numCellInLayer as $num){
            $layer = (array) null;
            $b = 0;
            if($bais[$l]){
                $cell = new Cell();
                $cell -> value = 1;
                array_push($layer, $cell);
                $b = 1;
            }
            for($i = 0; $i < $num; $i++){
                $cell = new Cell();
                array_push($layer, $cell);
            }
            if($l<sizeof($numCellInLayer)-1){
                for($i=0; $i<sizeof($layer); $i++){
                    $layer[$i]->setWeight($numCellInLayer[$l+1]);
                }
            }
            array_push($this->network , $layer);
            $l++;
        }
    }

    function forward(){
        for($i=0; $i<sizeof($this->network)-1; $i++ ){
            $b = 0;
            if($this->bais[$i+1]){
                $b =1;
            }
            
            for($j=0+$b; $j<sizeof($this->network[$i+1]); $j++){
                $val = 0;
                for($x = 0; $x<sizeof($this->network[$x]); $x++){
                    $val += $this->network[$i][$x]->value * $this->network[$i][$x]->weight[$j-$b];
                }
                $this->network[$i+1][$j]->value = $val;
            }
        }
    }

    function train($input, $output){

    }
    
    function print(){
        echo "<pre>";
        var_dump($this->network);
    }
}

$myNet = new Network([2,2,2], [false,true,false]);
$myNet ->print();
$myNet ->forward();
echo "<hr>";
$myNet ->print();
?>