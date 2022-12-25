<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style/Style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="entry-title">Английский ОГЭ</h1>

    <div>
    </div>
    <div>
        
        <audio src="../mp3/9520.mp3" autoplay="autoplay"></audio>
        <p onclick="soundClick()"></p>
        <script>
            function soundClick() {
                var audio = new Audio(); 
                audio.src = 'click.mp3'; 
                audio.autoplay = true; 
            }
        </script>
    </div>

    <div id="myProgress">
        <div id="myBar"></div>
    </div>

    <br>

    <script src="Style/Style.js"></script>
</body>

</html>