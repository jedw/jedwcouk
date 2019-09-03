<?php include('top.php');?>

<div id="container">
<br/>
<header>
<a href="http://www.twitter.com/jedw" style="margin:0"><img src="http://jedw.co.uk/public/img/twitter-128.png" alt="twitter" style="width:32px;margin:0 0 0 1em"/></a>
<a href="https://www.facebook.com/jonathan.edwards.uclan" style="margin:0"><img src="http://jedw.co.uk/public/img/facebook.png" alt="facebook" style="width:32px;margin:0 0 0 1em"/></a>
<h1>Jonathan Edwards</h1>
</header>
<nav>
<ul>
<li><a class="current" href="#">Home</a></li>
<li><a href="/index.php/home/posts">POSTS</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
<li><a href="#">LINK</a></li>
</ul>
</nav>
<main>
<?php
echo form_open('/secret/verify');
?>
<label for="title">Passcode:</label>
<br/><input type="password" id="passcode" name="passcode"/><br/>
<br/><input type="submit" value="insert"/>

</form>
</main>
<br/>
</div>
</body>
</html>
