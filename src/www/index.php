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
	  // Additional JS functions here
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '546246995391633', // App ID
	      channelUrl : '//test.hvadhedderde.COM/channel.html', // Channel File
	      status     : true, // check login status
	      cookie     : true, // enable cookies to allow the server to access the session
	      xfbml      : true  // parse XFBML
	    });

	    // Additional init code here

	  };

	  // Load the SDK asynchronously
	  (function(d){
	     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     ref.parentNode.insertBefore(js, ref);
	   }(document));
	</script>
	<script>
	  window.fbAsyncInit = function() {
	  FB.init({
	    appId      : '546246995391633', // App ID
	    channelUrl : '//test.hvadhedderde.COM/channel.html', // Channel File
	    status     : true, // check login status
	    cookie     : true, // enable cookies to allow the server to access the session
	    xfbml      : true  // parse XFBML
	  });

	  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
	  // for any authentication related change, such as login, logout or session refresh. This means that
	  // whenever someone who was previously logged out tries to log in again, the correct case below 
	  // will be handled. 
	  FB.Event.subscribe('auth.authResponseChange', function(response) {
	    // Here we specify what we do with the response anytime this event occurs. 
	    if (response.status === 'connected') {
	      // The response object is returned with a status field that lets the app know the current
	      // login status of the person. In this case, we're handling the situation where they 
	      // have logged in to the app.
	      testAPI();
	    } else if (response.status === 'not_authorized') {
	      // In this case, the person is logged into Facebook, but not into the app, so we call
	      // FB.login() to prompt them to do so. 
	      // In real-life usage, you wouldn't want to immediately prompt someone to login 
	      // like this, for two reasons:
	      // (1) JavaScript created popup windows are blocked by most browsers unless they 
	      // result from direct interaction from people using the app (such as a mouse click)
	      // (2) it is a bad experience to be continually prompted to login upon page load.
	      FB.login();
	    } else {
	      // In this case, the person is not logged into Facebook, so we call the login() 
	      // function to prompt them to do so. Note that at this stage there is no indication
	      // of whether they are logged into the app. If they aren't then they'll see the Login
	      // dialog right after they log in to Facebook. 
	      // The same caveats as above apply to the FB.login() call here.
	      FB.login();
	    }
	  });
	  };

	  // Load the SDK asynchronously
	  (function(d){
	   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement('script'); js.id = id; js.async = true;
	   js.src = "//connect.facebook.net/en_US/all.js";
	   ref.parentNode.insertBefore(js, ref);
	  }(document));

	  // Here we run a very simple test of the Graph API after login is successful. 
	  // This testAPI() function is only called in those cases. 
	  function testAPI() {
	    console.log('Welcome!  Fetching your information.... ');
	    FB.api('/me', function(response) {
	      console.log('Good to see you, ' + response.name + '.');
	    });
	  }
	</script>
	<!--Below we include the Login Button social plugin. This button uses the JavaScript SDK to-->
	<!--present a graphical Login button that triggers the FB.login() function when clicked.-->
	<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>