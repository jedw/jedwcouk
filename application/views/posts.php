<?php include('top.php');?>
	
<div id="container">
<br/>
<header>
<?php include('smlinks.php');?>
<h1>Jonathan Edwards</h1>
</header>
<nav>
<ul>
<li><a href="../../..">Home</a></li>
<li><a class="current" href="/index.php/home/posts">POSTS</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
</ul>
</nav>
<main>
<?php 


foreach ($posts as $row){
	echo '<div class="post">';
	echo '<div class="posttitle">';
	echo anchor ("home/post/$row->id", "<h2>$row->title</h2>");
	echo'</div>';
	echo '<p>'.$row->date.'</p>';
	echo '<p>'.$row->body.'</p>';
    
    $csv = $row->tags;
    $myArray = explode(',', $csv);

    foreach ($myArray as $item)
    {
      echo'<a href="#"><p style="display:inline">'.$item.'</p></a>';
    }
    //echo '<p class="tags">'.$row->tags.'</p>';
	echo '</div>';			
}
    
    
	?>
</main>
<br/>
</div>
	
</body>
</html>
