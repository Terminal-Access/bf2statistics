<?php
	$query = "SELECT id,name,rank,captureassists+captures+neutralizes+defends as flagwork,country FROM player WHERE 1=1 ORDER BY flagwork DESC LIMIT 5;";
?>