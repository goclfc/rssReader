<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rss Feed</title>
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
if(isset($_POST["submit"])){
    $rss = simplexml_load_file('http://talkerscode.com/rss.xml');
    $count=0;
    echo '<h2>'. $rss->channel->title . '</h2>';	
    foreach ($rss->channel->item as $item) 
    {
        $count++;

     echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
     echo "<p class='desc'>" . $item->description . "</p>";
     if(count>7){
         die;
     };
    } }


?>
</div>
</div>
</body>
</html>