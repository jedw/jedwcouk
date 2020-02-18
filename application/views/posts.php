<?php include('top.php');?>
	
<div id="container">
<br/>
<header>
<?php include('smlinks.php');?>
<h1>Jonathan Edwards</h1>
</header>
<?php include 'navbar.php'; ?>
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
    $myArray = explode(', ', $csv);

    foreach ($myArray as $item)
    {
		echo anchor ("home/tagpost/$item", $item." ");
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
