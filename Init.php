<?php 
include('loaddata.php');
    include('network.php');
    $myNet = new Network([9,11,9], [false,false,false]);
    for($i=0;$i<count($X);$i++){
        $myNet ->train($X[$i],$X[$i],0.2);
    }
    
    $filename = 'data.txt';
    // The content to write to the file
    $content = $myNet->getWeight();
    
    // Using the file_put_contents function to write content to the file
    file_put_contents($filename, $content);
    
    echo "Content written to the file successfully.\n"
?>
