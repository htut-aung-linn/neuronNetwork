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

    function forward($input){
        $var = 0;
        if($this->bais[0]){
            $var =1;
        }
        for($i = 0; $i<sizeof($input); $i++){
            $this ->network[0][$i+$var] -> value = $input[$i];
        }
        for($i=0; $i<sizeof($this->network)-1; $i++ ){
            $b = 0;
            if($this->bais[$i+1]){
                $b =1;
            }
            
            for($j=0+$b; $j<sizeof($this->network[$i+1]); $j++){
                $val = 0;
                
                for($x = 0; $x<sizeof($this->network[$i]); $x++){
                    $val += $this->network[$i][$x]->value * $this->network[$i][$x]->weight[$j-$b];
                }
                $val = 1/(1+exp(-$val));
                $this->network[$i+1][$j]->value = $val;
            }
        }
    }

    function train($input, $output, $rate){
        $this-> forward($input);
        $errors = (array) null; 
        for($i=0; $i<sizeof($output); $i++){
            $E = $this->network[sizeof($this->network )-1][$i]->value - $output[$i];
            $final =  $this->network[sizeof($this->network)-1][$i] -> value;
            $rateOfFinal = $final*(1-$final);
            $E *= $rateOfFinal;
            array_push($errors, $E);
        }
        $index = sizeof($this->network)-2;
        for($r = $index; $r > -1; $r--){
            $bn = 0;
            if($this->bais[$r+1]){
                $bn = 1;
            }
            $new_error = (array) null;
            if(sizeof($this->network)-$r>2){
                for($ce = 0; $ce <sizeof($this->network[$r+1])-$bn; $ce++ ){
                    $err = 0;
                    for($nw =0; $nw<sizeof($this->network[$r+1][$ce+$bn] -> weight); $nw++){
                        $err += $this->network[$r+1][$ce+$bn] -> weight[$nw] * $errors[$nw];
                    }
                    array_push($new_error, $err);
                }
                $errors = (array) null; 
                $errors = $new_error;
            }
            for($c = 0; $c < sizeof($this->network[$r]); $c++){
                for($w = 0; $w< sizeof($this->network[$r][$c]->weight); $w++){
                    
                    $final =  $this->network[$r+1][$w+$bn] -> value;
                    $rateOfFinal = $final*(1-$final);
                    $rateOfWeight = $this->network[$r][$c] -> value;
                    if(sizeof($this->network)-$r>2){
                        
                        $RateOfError = $errors[$w] *$rateOfFinal* $rateOfWeight;
                        
                        $this->network[$r][$c] -> weight[$w] -= ($rate * $RateOfError);
                    }else{
                        $RateOfError = $errors[$w] * $rateOfWeight;
                        $this->network[$r][$c] -> weight[$w] -= ($rate * $RateOfError);
                    }
                }
            }
        }
    }

    function getWeight(){
        $en = "";
        foreach($this->network as $layer){
            $el = "";
            foreach($layer as $cell){
                $ew = "";
                foreach($cell->weight as $w){
                    $ew .= ",".$w;
                }
                $el .= "/" .$ew;
            }
            $en .= "?".$el;
        }
        return $en;
    }
    function print(){
        echo "<pre>";
        var_dump($this->network);
    }
    function setWeight($inputString) { 
    $layers = explode('?', trim($inputString, '?')); 
    //$this->network = [];
    $layercount=0;
    foreach ($layers as $layerString) 
    { 
    $layer = [];
    $cells = explode('/', trim($layerString, '/'));
    $cellcount =0; 
        foreach ($cells as $cellString) { 
    $weights = array_map('floatval', explode(',', trim($cellString, ','))); 
    //var_dump($this->network);
   $this->network[$layercount][$cellcount]->weight = $weights; 
    $cellcount++;
    }
    $layercount++; 
    } 
    
    }
}
/*
$myNet = new Network([2,2,3], [false,true,false]);
//$myNet ->forward([0,1]);
//$myNet ->print();

for($b = 0; $b<10000; $b++ ){
    $myNet ->train([0,0],[0,0,1],0.1);
    $myNet ->train([0,1],[0,1,0],0.1);
    $myNet ->train([1,0],[1,0,1],0.1);
    $myNet ->train([1,1],[1,0,0],0.1);
}
echo "<hr>";
$myNet ->forward([0,0]);
$myNet ->print();
echo "<hr>";
$myNet ->forward([0,1]);
$myNet ->print();
echo "<hr>";
$myNet ->forward([1,0]);
$myNet ->print();
echo "<hr>";
$myNet ->forward([1,1]);
$myNet ->print();
var_dump($myNet->getWeight());*/

//$myNet ->forwardWithWeight([0,0], 
//"?/,-1.7383216197993,5.4267221819295,-3.5980568858604/,-3.7860643056909,-2.3765225145538,4.9657881831355?/,-7.6553195083611,-3.3758516386185,9.7897009066497,-1.136034700029/,5.9930094193469,-6.9197998722929,2.2697793321804,5.7594865615907/,-3.676897452525,3.7943567178836,-6.4375731873223,3.2407363078061?////"
//);
?>
