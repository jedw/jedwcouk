<?php include('top.php');?>



<div id="container">

<br/>

<header>

<a href="http://www.twitter.com/jedw" style="margin:0"><img src="http://jedw.co.uk/public/img/twitter-128.png" alt="twitter" style="width:32px;margin:0 0 0 1em"/></a>

<a href="https://www.facebook.com/jonathan.edwards.uclan" style="margin:0"><img src="http://jedw.co.uk/public/img/facebook.png" alt="facebook" style="width:32px;margin:0 0 0 1em"/></a>

<h1>Jonathan Edwards</h1>

</header>

<?php include 'navbar.php'; ?>

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

