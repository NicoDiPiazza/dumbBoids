<?php
// PHP code goes here

$nBoids = 20;
$nFrames = 100;

// these are the values that can be found by inspecting the page, at least on my machine
$screenW = 1900;
$screenH = 880;

// initializing the arrays
$boidsXPHP = array_fill(0, $nBoids, 0);
$boidsYPHP = array_fill(0, $nBoids, 0);

// populating the arrays
for($i = 0; $i < $nBoids; $i++){
    $boidsXPHP[$i] = rand(0, $screenW);
    $boidsYPHP[$i] = rand(0, $screenH);
};


?>
<!DOCTYPE html>

<html>
<head>
    <title>BOIDS!</title> 
<style>
#deto{
position: absolute;
}
#detom{
position: absolute;
}
</style>
</head>
<body>
    <p align="center"> 
	<!--This draws the Canvas on the webpage -->
      <canvas id="mycanvas"></canvas> 
    </p>
    
<script src="https://cdn.jsdelivr.net/processing.js/1.4.8/processing.min.js"></script>
<script>
    var sketchProc = function(processingInstance) {
     with (processingInstance) {
        size(screen.width - 20, screen.height - 200); 
        frameRate(30);
// Javascript code goes here

var boidsXJS = <?php echo json_encode($boidsXPHP)?>;
var boidsYJS = <?php echo json_encode($boidsYPHP)?>;

fill(250, 0, 0);
    draw = function(){
        background(0, 0, 0);
        
        for( i = 0; i < boidsXJS.length; i++){
        rect(boidsXJS[i], boidsYJS[i], 30, 30);
        };

        
        
    }




     };
    };
    // Get the canvas that Processing-js will use
    var canvas = document.getElementById("mycanvas"); 
    // Pass the function sketchProc (defined in myCode.js) to Processing's constructor.
    var processingInstance = new Processing(canvas, sketchProc); 
</script>

</body>
</html>