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

    function print(){
        echo "<pre>";
        var_dump($this->network);
    }
}

$myNet = new Network([1,1], [true,false]);
//$myNet ->forward([0,1]);
//$myNet ->print();
for($b = 0; $b<10000; $b++ ){
$myNet ->train([0],[1],0.3);
$myNet ->train([1],[0],0.3);
}
echo "<hr>";
$myNet ->forward([0]);
$myNet ->print();
echo "<hr>";
$myNet ->forward([1]);
$myNet ->print();

?>