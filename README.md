# neuronNetwork
for deep learning
Define your inputs and outputs. 
And set your network.
[2,3,4] = 2 cells in first layer(input), 3 cells in second layer, 4 cells in third layer (output)
[true, false, false] = there is bais cell in first layer. Always set the last layer as false.
Train your data. Network->train(input, output); 
Get output from your network.

function setWeight($inputString) {
    $layers = explode('?', trim($inputString, '?'));
    $this->network = [];
    
    foreach ($layers as $layerString) {
        $layer = [];
        $cells = explode('/', trim($layerString, '/'));
        
        foreach ($cells as $cellString) {
            $weights = array_map('floatval', explode(',', trim($cellString, ',')));
            $cell = new stdClass();
            $cell->weight = $weights;
            $layer[] = $cell;
        }
        
        $this->network[] = $layer;
    }
}

// Example usage:
// Assuming $this->network is an array of layers, each layer is an array of cells, 
// and each cell has an array of weights.

// Sample input string produced by getWeight()
// $inputString = "?/,0.1,0.2,0.3/?/,0.4,0.5,0.6/?/,0.7,0.8,0.9";

// Call the function to set the network
// $this->setWeight($inputString);
