<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    </head>
    <body>
        <div id="main" >
            <div class="controls">
                <h1>Game</h1>
            </div>
            <br><br>
            <canvas id="board" height="800px" width="1000px" ></canvas>
            <p id="result"></p>
        </div>
        <script type="text/javascript">
        var c = document.getElementById("board");
        
        
        var ctx = c.getContext("2d");
        ctx.moveTo(0,0);
        ctx.lineTo(1000,100);
        ctx.fillRect(50,50,500,500);
        ctx.stroke();
        var img=c.toDataURL("image/png");
        console.log(img);
        $.post('save.php',{data:img},
        function(ret)
        {
          $('#result').html(ret);
        });
        </script>
        
    </body>
</html>
