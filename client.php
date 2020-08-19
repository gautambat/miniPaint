<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>SharedImage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="main" >
            <div class="controls">
                <h1>Trial</h1>
                <img  id="image" alt="not found">
            </div>
            <br><br>
        </div>
    </body>
    <script >
        
        setInterval(() => {
            const xhr=new XMLHttpRequest();
        
        xhr.open('get','file.txt',true);    
        xhr.send();
        xhr.onreadystatechange=function() {
            if(xhr.readyState==4)
            {
                if(xhr.status==200)
                {

                    i=document.getElementById("image");
                    i.src=xhr.responseText;
                    console.log("updated");
                }
                if(xhr.status==404)
                {
                    console.log("Not found");
                }
            }
        
        };
        }, 1000);
    
    </script>
</html>
