<?php

// Function to convert the best move to a one-hot encoded vector
function oneHotEncodeMove($move, $numClasses = 9) {
    $oneHot = array_fill(0, $numClasses, 0);
    $oneHot[$move] = 1/2;
    return $oneHot;
}

// Function to read the dataset from a file
function loadDataset($filename) {
    $X = [];
    $y = [];
    $file = fopen($filename, 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) {
            list($state, $move) = explode(' -> ', trim($line));
            $state = array_map('intval', explode(',', $state));
            $move = intval($move);

            $X[] = $state; // No normalization
            $y[] = oneHotEncodeMove($move);
        }
        fclose($file);
    } else {
        die("Error opening file");
    }

    return [$X, $y];
}

// Load the dataset
list($X, $y) = loadDataset('tic_tac_toe_dataset.txt');

// Print sample data to verify
echo "Sample board state and one-hot encoded move:\n";
print_r($X[0]);
print_r($y[0]);

?>
