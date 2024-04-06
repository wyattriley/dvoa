<?php

//sidebar menu for info site


function SideBarMenu()
{
?>

	<div id="sidebar">


<h3 align="center">Results</h3>
	<div class="buttonscontainer">
	<div class="buttons">
	<a href="../event/index.php">Schedule Home</a>
	<a href="../print/index.php">Printable Schedule</a>
	<a href="../kit/index.php">Kit Schedule</a>
</div>
</div>


<?php
	srand((double)microtime()*1000000);
	$id = rand(0,80);
	GetSubPagePix($id);
?>
	</div>

<?php
}


function NewsSideBarMenu()
{
?>
	<div id="sidebar">
	<br />
	
	<?php 
	GetPhotoOfTheDay(2); 
	?>

<h2 align="center">&nbsp;</h2>
	<div class="buttonscontainer">
	<div class="buttons">
</div>
</div>

	</div>

<?php
}
?>
