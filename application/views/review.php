<?php include('top.php');?>

<div id="container">
<br/>
<header>
<?php include('smlinks.php');?>
<h1>Jonathan Edwards</h1>
</header>
<nav>
<ul>
<li><a href="<?php echo site_url();?>">Home</a></li>
<li><a class="current" href="<?php echo site_url('/home/posts');?>">POSTS</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
</ul>
    <ul><li><a href="<?php echo site_url('/secret/newpost');?>">NEW POST</a></li>
	<li><a href="<?php echo site_url('/secret/destroy');?>">LOGOUT</a></li>
    </ul>
</nav>
<main>

	
<?php
foreach ($posts as $row){
	echo '<div class="post">';
	echo '<div class="posttitle">';
	echo anchor ("home/post/$row->id", "<h2>$row->title</h2>");
	echo '</div>';
	echo '<p>'.$row->date.'</p>';
	echo '<p>'.$row->body.'</p>';
    
    $csv = $row->tags;
    $myArray = explode(',', $csv);

    foreach ($myArray as $item)
    {
      echo'<a href="#"><p style="display:inline">'.$item.'</p></a>';
    }
    echo '<br/><p style="display:inline">';
    echo anchor ("secret/delete/$row->id", "delete");
	echo '</p></div>';

}
?>
</main>
<br/>
</div>
</body>
</html>