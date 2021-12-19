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
    <header> 
    <h1> Hello World! </h1>
</header>
<div id="form"> 
    <form action="index.php" method="post">
        <label > Please Enter Rss.xml  </label>
        <input type="text" name="url" placeholder="Paste rss.xml">
        <button type="submit" name="submit" > Submit </button>

    </form>
</div>
    <div id="wrapper">
<div id="feed_div">

<?php
session_start();
if(isset($_POST["url"])){
    $rss = simplexml_load_file($_POST['url']);
    $count=0;
    echo '<h2>'. $rss->channel->title . '</h2>';	
   
    
  
    for($x=1; $x<11; $x++) {
        $item=$rss->channel->item;
        
        echo '<p class="title"><a href="'.$item[$x-1]->link .'">'.$x.") : " . $item[$x-1]->title. "</a></p>";
     echo "<p class='desc'>" . $item[$x-1]->description. "</p>";
     };


}else{echo "<h1> Here will be loaded Feed </h1>";}
?>
</div>
</div>
</body>
</html>