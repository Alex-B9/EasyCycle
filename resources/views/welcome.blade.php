<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="flex justify-center">
        <div class="w-full h-screen bg-gray-100 p-4 cam">
            <!-- <div id='label-container'></div> -->
        <div id='webcam-container'></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8.3/dist/teachablemachine-image.min.js"></script>
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('js/ai.js')}}" type="text/javascript"></script>
</body>
</html>