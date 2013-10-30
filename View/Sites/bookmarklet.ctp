
<?php header('Content-type: application/javascript'); ?>
<?php if(!$user){ ?>
	var r=confirm("You are not logged in. Would you like to login?");
	if (r==true){
	var win = window.open('','_self');
	thesrc="http://localhost/doooie/users/login";
	win.open(thesrc);

	}else{

	}
<?php }else{ //$message= 'Your username is '.$user['username'];?>
	thesrc="http://localhost/doooie/sites/bkmkiframe?doooietitle="+document.title+"&doooieurl="+document.URL;
	var doooiebg = document.createElement('div');
	doooiebg.setAttribute('id', 'doooiebg');
	doooiebg.setAttribute('style', 'z-index:2147483647!important;position:fixed;left:0;top:0;height:100%;width:100%;background:transparent!important;');

	var doooieiframe = document.createElement('iframe');
	doooieiframe.setAttribute('id', 'doooietestiframe');
	doooieiframe.setAttribute('src', thesrc);
	doooieiframe.setAttribute('style', 'width:100%;height:100%;overflow:scroll;border:0;');

	document.body.appendChild(doooiebg);
	doooiebg.appendChild(doooieiframe);

<?php } ?>




