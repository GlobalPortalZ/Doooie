
<?php 

header('Content-type: application/javascript'); 

if(!$user){
	$message = 'You are not logged in';
}else{
	$message= 'Your username is '.$user['username'];
}

// echo 'alert(10);'
?>

//prompt('<?php echo $message; ?>','www.website.com');


