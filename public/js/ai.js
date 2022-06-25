 const URL = '/js/'
 let model, webcam, labelContainer, maxPredictions;	
 let cam = document.querySelector(".cam")
 let isIos = false; 

 if (window.navigator.userAgent.indexOf('iPhone') > -1 || window.navigator.userAgent.indexOf('iPad') > -1) isIos = true;
 
 async function init() {
     const modelURL = URL + 'model.json';
     const metadataURL = URL + 'metadata.json';

     model = await tmImage.load(modelURL, metadataURL);
     maxPredictions = model.getTotalClasses();

     const flip = true; 
     const width = cam.offsetWidth;
     const height = cam.offsetHeight;
     webcam = new tmImage.Webcam(width, height, flip);
     await webcam.setup(); // request access to the webcam

     if (isIos) {
         document.getElementById('webcam-container').appendChild(webcam.webcam); 
         const webCamVideo = document.getElementsByTagName('video')[0];
         webCamVideo.setAttribute("playsinline", true); 
         webCamVideo.muted = "true";
         webCamVideo.style.width = width + 'px';
         webCamVideo.style.height = height + 'px';
     } else {
         document.getElementById("webcam-container").appendChild(webcam.canvas);
     }
    
     webcam.play();
     window.requestAnimationFrame(loop);

 }

 async function loop() {
     webcam.update(); 
     await predict();
     window.requestAnimationFrame(loop);
 }

 async function predict() {

     let prediction;

     if (isIos) prediction = await model.predict(webcam.webcam);
     else prediction = await model.predict(webcam.canvas);
    
     for (let i = 0; i < maxPredictions; i++) {
        // console.log(`${prediction[i].className} : ${prediction[i].probability.toFixed(2)}`) 
        if(prediction[i].probability.toFixed(2) >= 0.90) {
            $.ajax({
                'url': '/trash',
                'type': 'GET',
            });
        }
        
     }
 }

 init()
