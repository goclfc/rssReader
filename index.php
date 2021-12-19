<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rss Feed</title>
    <link rel="stylesheet" href='css/style.css'>
</head>
<body>
    <h1> Hello</h1>
    <form action="index.php" method="post">
        <label > input rss </label>
        <input type="text" name="url" placeholder="enter rss url">
        <button type="submit" name="submit" > Submit </button>

    </form>
    <div id="wrapper">
<div id="feed_div">

<?php
session_start();
if(isset($_POST["url"])){
    $rss = simplexml_load_file($_POST['url']);
    $count=0;
    echo '<h2>'. $rss->channel->title . '</h2>';	
   
    
  
    for($x=0; $x<10; $x++) {
        $item=$rss->channel->item;
        echo '<p class="title"><a href="'.$item[$x]->link .'">' . $item[$x]->title. "</a></p>";
     echo "<p class='desc'>" . $item[$x]->description. "</p>";
     };


}else{echo "<h1> asdasdasd </h1>";}
?>
</div>
</div>
</body>
</html>