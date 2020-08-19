import Image from "./ToUrl";

setInterval(function(){
    var img=document.getElementById('img');
    img.src=Image();
},1000);