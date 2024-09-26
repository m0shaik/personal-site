
<?php

$page = getPage();





?>

<nav class='site-menu'>
	<a class='<?=isPage('home')?>' href="?page=home">Home</a>
	<a class='<?=isPage('list')?>' href="?page=list">Game Section</a>
	<a class='<?=isPage('create')?>' href="?page=create">Game Info</a>
</nav>
