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
    <link rel="stylesheet" href="Style/css/style.css">
    <title>Тренажёр устной части</title>
</head>

<body>



    <div class="container contF1">
        <p></p>
        <input class="inputF1" type="text" placeholder="Введите идентификатор">
        <a class="btn btn-outline-primary buttonF1" href="First/T1.php">Start</a>

    </div>
    <?php
      
      require  '../service_bd\services.php';
      $foo = new Foo();
      $func = array(new  Foo, "get_data");
      $func();
       
    ?>



    <script>
        body = document.querySelector('body');

        var para = document.querySelector('p');

        if (document.documentElement.clientWidth <= '425') {
            para.textContent = 'Mobile';
            document.body.style.display = "none";
        } else {

        }
    </script>
</body>

</html>