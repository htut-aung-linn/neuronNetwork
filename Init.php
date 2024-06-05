<?php 
include('loaddata.php');
    include('Network.php');
    $myNet = new Network([9,9], [true,false]);
/*
for($j=0;$j<1;$j++){
    for($i=0;$i<count($X);$i++){
        $myNet ->train($X[$i],$y[$i],0.1);
    }
    }*/
    $myNet ->forward($X[5]);
    $myNet->print();
for($j=0;$j<1;$j++){
     $myNet ->train([0,0,0,0,0,0,0,0,0],[1,0,0,0,0,0,0,0,0],0.1);
}
    $filename = 'data.txt';
    // The content to write to the file
    $content = $myNet->getWeight();

    var_dump($content);
    // Using the file_put_contents function to write content to the file
    file_put_contents($filename, $content);
    
    echo "Content written to the file successfully.\n"
?>
