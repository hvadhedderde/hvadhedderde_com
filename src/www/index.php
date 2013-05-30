<?php $body_class = "front" ?>
<?php $page_description = "Hello, we are Hvadhedderde" ?>
<?php $page_title = "Hvadhedderde" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<div class="c">
		<div class="c300 section">
			<h1>Hi, are you our next client?</h1>
			<p>We are a small, but highly specialized, webdevelopment agency working out of Copenhagen.</p>
			<p>We consider ourselves craftsmen and take pride in our work. We feel this approach ensures the best results and allows us to find continuous joy in what we do. Happiness is important.</p>
			<p>
				
				If you need web related development, we can provide it.<br />
				If you don't know what you need, we can help you figure it out.<br />
				If you already bought something, but aren't completely sure what you got, you can ask us.
			</p>
			<p>We build, advise, review and spar.</p>
			<p>Helping you do better, is what we do.</p>
		</div>

		<div class="c300 section">
			<h3>Want more?</h3>
			<p>Feel free to <a href="/contact">contact</a> us.</p>
		</div>
	</div>
	

	<div id="fb-root"></div>


    <script>
     window.fbAsyncInit = function(){
		 alert("logged");
      FB.init({ appId:'546246995391633', status:true,  cookie:true, xfbml:true});
      FB.getLoginStatus(function(response){
       if (response.status != "unknown")
       {
        alert("logged");//show_login_status("Facebook", true);
       }else{
        alert("logged not");//show_login_status("Facebook", false);
       }
      });
     };
     // Load the SDK Asynchronously
     (function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js";
      d.getElementsByTagName('head')[0].appendChild(js);
     }(document));
    </script>

	
</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>