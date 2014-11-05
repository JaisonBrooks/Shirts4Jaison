<?php 
date_default_timezone_set("America/Boise");
$hour = date('G');

if ($hour < 12) {
	echo "Good Morning";
}

if ($hour >= 12 and $hour < 17) {
	echo "Good Afternoon";
}

if ($hour >= 17 and $hour <20) {
	echo "Good Evening";
}

if ($hour >= 20 and $hour < 24) {
	echo "Good Night!";
}

?> 