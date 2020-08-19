

function getScreenshot(){
    html2canvas(document.body).then(function(canvas) {
        document.body.appendChild(canvas);
    });
}
var button=document.getElementById("button");
button.addEventListener("click",getScreenshot);