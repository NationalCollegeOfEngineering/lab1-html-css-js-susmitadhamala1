<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <?php
    echo'site open at:'.date('H:M:S');
    if(isset($_GET['clr'])){
        value=$_GET
    }
    echo '<style>body{background:pink;}</style>';
    ?>
    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" alt="">
    <form action="https://google.com/search"method="">
        search in google<input type="text" name="q">
    <h1>Hello, world!</h1>
    <form action="">type color <input type="text"name="color"></form>
    
        <input type="submit"value="search">
        <input type="submit" value="change color">
    </form>
  </body>
</html>