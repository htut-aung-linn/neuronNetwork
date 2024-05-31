<?php 
include('loaddata.php');
    include('Network.php');
    $myNet = new Network([9,11,9], [false,false,false]);
    for($j=0;$j<10;$j++){
    for($i=0;$i<count($X);$i++){
        $myNet ->train($X[$i],$y[$i],1);
    }
    }
    $filename = 'data.txt';
    // The content to write to the file
    $content = $myNet->getWeight();
    var_dump($content);
    // Using the file_put_contents function to write content to the file
    file_put_contents($filename, $content);
    
    echo "Content written to the file successfully.\n"
?>
