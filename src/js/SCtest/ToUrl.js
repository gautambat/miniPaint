

export default function Image() {
  var canvas1 = document.getElementById("MyCanvas");
  if (canvas1.getContext) {
     var ctx = canvas1.getContext("2d");                // Get the context for the canvas.
     var myImage = canvas1.toDataURL("image/png"); 
     console.log(myImage);
  
     return myImage;
  }
}