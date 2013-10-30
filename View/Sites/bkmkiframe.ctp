<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
::-webkit-input-placeholder { /* WebKit browsers */
    color:    rgba(255,255,255,0.2);
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    rgba(255,255,255,0.2);
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    rgba(255,255,255,0.2);
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    rgba(255,255,255,0.2);
}
span{
	color:#ccc;
	font-weight: normal;
	font-size:400%;
}

body{
	background:rgba(0,0,0,0.8)!important;');
display: none;
}
.blur-in{
	-webkit-filter: blur(8px);
    -webkit-transition: all .25s ease-in;
    -webkit-transition: all 0.25s ease-in;
    transition: all 0.25s ease-in;
}

input, textarea, select{
width:100%;
font-size: 200%;
color :#ccc;
background:transparent;

}
input:focus, textarea:focus, select:focus{
outline: none;

}
select{
	width:50%;
}
input[type='submit']{
	width:auto;
	margin: 0 auto;

}
input[type='text']{
text-overflow:ellipsis;
}
</style>


<div id="formdiv" class=" sites form" style="
color:white;
background:transparent!important;
width:1000px;
margin:50px auto;
font:15px helvetica,sans-serif;
">
<center><span>Doooie. Thats my name!</span></center><br>
<?php echo $this->Form->create('Site'); ?>
	<?php
		echo $this->Form->input('title',array('format'=>array('before', 'between', 'input', 'after', 'error'),'default'=>$_GET['doooietitle'],'placeholder'=>'Title'));
		echo $this->Form->input('description', array('format'=>array('before', 'between', 'input', 'after', 'error'),'placeholder'=>'Write a description and some tags if you want...'));
		echo $this->Form->input('subject_id',array('format'=>array('before', 'between', 'input', 'after', 'error')));

		echo $this->Form->input('url', array('type'=>'hidden','value'=>$_GET['doooieurl']));


	?>
	<br><br>
<center><?php echo $this->Form->end(__('Let me save this for you')); ?></center>
</div>

<script>
$.fn.animatecss = function(anim, time, cb) {

    if (time) this.css('-webkit-transition', time / 1000 + 's');

    this.addClass(anim);

    if ($.isFunction(cb)) {

        setTimeout(function() {

            // Ensure that the element is available inside the callback.
            $(this).each(cb);

        }, (time) ? time : 250);

    }

    return this;

};

$(this).animatecss('blur-in', 250, function() {

            console.log('callback');

});




$("body").fadeIn('1000',function(){});
// $("#formdiv").slideDown('1000',function(){});
// $("#SiteTitle").focus();
$("#SiteTitle").focus(function(){
     // $(this).select();
});
</script>