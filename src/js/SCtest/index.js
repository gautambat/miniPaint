var b=document.querySelector("body");
b.addEventListener("click",click);

function click()
{
    var can=document.querySelector("canvas");
    var img=can.toDataURL("image/png");
    var w=window.open('about:blank','image from canvas');
    w.document.write("<img src='"+img+"' alt='from canvas'/>");
}