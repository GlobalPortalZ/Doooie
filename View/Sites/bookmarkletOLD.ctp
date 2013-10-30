
<?php 

header('Content-type: application/javascript'); 

if(!$user){
	$message = 'You are not logged in';
}else{
	$message= 'Your username is '.$user['username'];
}

// echo 'alert(10);';
?>



var strVar="";
strVar += "<form action=\"http:\/\/localhost\/doooie\/sites\/bkmkiframe\" id=\"SiteAddForm\" method=\"post\" accept-charset=\"utf-8\"><div style=\"display:none;\"><input type=\"hidden\" name=\"_method\" value=\"POST\"\/><\/div>	<fieldset>";
strVar += "		<legend>Add Site<\/legend>";
strVar += "	<div class=\"input select required\"><label for=\"SiteUserId\">User<\/label><select name=\"data[Site][user_id]\" id=\"SiteUserId\" required=\"required\">";
strVar += "<option value=\"1\">1<\/option>";
strVar += "<option value=\"2\">2<\/option>";
strVar += "<\/select><\/div><div class=\"input text required\"><label for=\"SiteTitle\">Title<\/label><input name=\"data[Site][title]\" maxlength=\"255\" type=\"text\" id=\"SiteTitle\" required=\"required\"\/><\/div><div class=\"input textarea\"><label for=\"SiteBody\">Body<\/label><textarea name=\"data[Site][body]\" cols=\"30\" rows=\"6\" id=\"SiteBody\"><\/textarea><\/div>	<\/fieldset>";
strVar += "<div class=\"submit\"><input id=\"doooieSubmitButton\" type=\"submit\" value=\"Submit\"\/><\/div><\/form>";

var framevar="";
framevar += "<iframe id=\"doooie_frame\" name=\"doooie_frame\" width=\"0\" height=\"0\" style=\"position:absolute;left:-10000px;visibility:hidden!important\"><\/iframe>";

var doooiebg = document.createElement('div');
doooiebg.setAttribute('id', 'doooiebg');
doooiebg.setAttribute('style', 'z-index:2147483647!important;position:fixed;left:0;top:0;height:100%;width:100%;background:rgba(0,0,0,0.8)!important;');


var testdiv = document.createElement('div');
testdiv.setAttribute('id', 'doooietestdiv');
/*testdiv.innerHTML='<span style="display:block!important;text-align:center!important;color:#fff!important;font-size:54px!important;line-height:54px!important;margin:8px 0 0 -2px!important;">✓</span>DOOOOIT!';*/
testdiv.setAttribute('style', "display:block!important;position:fixed!important;left:50%!important;top:0!important;width:300px!important;height:185px!important;margin:0 0 0 -150px!important;background:rgba(0,0,0,0)!important;color:#fff!important;font:700 12px/24px Helvetica Neue,Arial,Helvetica,sans-serif!important;text-align:center!important;z-index:2147483647!important;-webkit-border-radius:0 0 10px 10px!important;-moz-border-radius:0 0 10px 10px!important;border-radius:0 0 10px 10px!important;");

var testiframe = document.createElement('iframe');
testiframe.setAttribute('id', 'doooietestiframe');
testiframe.setAttribute('src', 'http://localhost/doooie/sites/add');
testiframe.setAttribute('style', 'width:100%;height:100%;overflow:scroll;border:0;');



document.body.appendChild(doooiebg);
doooiebg.appendChild(testdiv);
testdiv.appendChild(testiframe);
//testiframe.body.appendChild(testform);
//$('#doooietestdiv').fadeIn( "slow", function() {});






//$('body').html(strVar);

//console.log($("#doooieSubmitButton").closest("form").serialize());








/*
$("#doooieSubmitButton").bind("click", function (event) {
	$.ajax({  
		type: "POST",  
		url: "http:\/\/localhost\/doooie\/sites\/add",
		//crossDomain: true,
		data: {user_id:'1', title: "coofrl", body: "coooooddfol"},
		dataType:"html",
		success: function(data, textStatus) {
	    	alert('success!!');
	    	//$('body').html(data);
		},
	  	error: function (request) {
        	console.log(data);
    	},
    	complete: function(){

    	},
	});  
	return false; 
});*/
