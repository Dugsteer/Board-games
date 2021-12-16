<?php include "db2.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Acme|Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scripts.css">
</head>

<body>
    <div id="title1" class="jumbotron jumbotron-fluid text-white p-3" style="background-color: orange;">
        <div class="container text-center">
            <h2 class="display-5-xs display-4-s  d-inline-block" style="font-family: 'Bangers', cursive; color: blue;">action kids...</h2>
        </div>
        <div class="image1 text-center mb-"><img src="images/angels.png" width="300"></div>

        <div class="header text-center">
            <h2 class='' style="font-family: 'Acme', sans-serif"><img class='mr-3 border border-dark rounded' src='images/Gigi3.jpg' width='60'>Georgina <?php echo "<span class='currentScore ml-3' style='font-family: Bangers; color: blue; font-size: 3rem'>$int</span></h2>" 
            ?>

                    <div class>
                        <form method="post">
                            <input type="submit" name="button1" id="button1" value="Oops" class="btn mr-2 text-white" style="background:red"></button>
                            <input type="submit" name="button2" id="button2" value="YAY!" class="btn btn-primary ml-2 text-white" style="color: blue;"></button></form>
                    </div><br>


                <h2 class="mt-2" style="font-family: 'Acme', sans-serif"><img class='mr-4 border border-dark rounded' src="images/Jim3.jpg" width="60">&nbsp&nbsp Jimmy &nbsp &nbsp <?php echo "<span class='currentScore ml-2' style='font-family: Bangers; color: blue; font-size: 3rem'>$int1</span></h3>" ?>

                    <div class>
                        <form method="post">
                            <input type="submit" name="button3" id="button3" value="Oops" class="btn mr-2 text-white" style="background:red"></button>
                            <input type="submit" name="button4" id="button4" value="YAY!" class="btn btn-primary ml-2 text-white" style="color: blue;"></button></form>
                    </div>
      </script>
</body>
</html>

