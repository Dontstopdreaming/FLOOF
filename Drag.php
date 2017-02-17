<!DOCTYPE html>
<html lang="en">
<head>


<link rel = "stylesheet" href="Drag.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  	$( function() {
    $( "#dragme1" ).draggable();
  	} );
  
    $( function() {
    $( "#dragme2" ).draggable();
  	} );
  
    $( function() {
    $( "#dragme3" ).draggable();
  	} );
  
  	$( function() {
    $( "#dragme4" ).draggable();
  	} );
	
	$( function() {
    $( "#dragme5" ).draggable();
  	} );
	
	$( function() {
    $( "#dragme6" ).draggable();
  	} );
  
  	$( function() {
    $( "#dragme7" ).draggable();
  	} );
	
	$( function() {
    $( "#dragme8" ).draggable();
  	} );
	
	$( function() {
    $( "#dragme9" ).draggable();
  	} );
  
 function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
  
  </script>

</head>
<canvas id="canvas"> 

</canvas>

<div id="dragme1"><img src="images\glasses.png"></div>
<div id="dragme2"><img src="images\hat.png"></div>
<div id="dragme3"><img src="images\flower.png"></div>
<div id="dragme4"><img src="images\bowtie.png"></div>
<div id="dragme5"><img src="images\egg.png"></div>
<div id="dragme6"><img src="images\crown.png"></div>
<div id="dragme7"><img src="images\weirdhat.png"></div>
<div id="dragme8"><img src="images\moustache.png"></div>
<div id="dragme9"><img src="images\comb.png"></div>

<script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1227636970657330',
                cookie: true,
                xfbml: true,
                version: 'v2.8'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>

  <a href="javascript:void(0)" id="shareFB" class="share btn blue facebook" style="width: 100%;"><span></span>Share on Facebook</a>

</body>
<script src="Drag.js"></script>
</html>