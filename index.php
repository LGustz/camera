<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Application</title>
    <style>
      video {
        width: 500px;
        height: auto;
        border: 2px solid black;
        border-radius: 6px;
      }
      canvas {
        display: none;
      }
    </style>
  </head>
  <body>

    <video id="camera-feed" autoplay></video>
  
<?php
include("telaCliente.php");
?>

    
    <script>

      window.addEventListener('load', function startCamera() {
        navigator.mediaDevices.getUserMedia({ video: true })
          .then(stream => {
            const videoElement = document.getElementById('camera-feed');
            videoElement.srcObject = stream;
          })
          .catch(error => {
            console.error('Error accessing camera:', error);
          });
      });
    </script>
  </body>
</html>