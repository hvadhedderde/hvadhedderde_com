<?php $body_class = "help" ?>
<?php $page_description = "Information about website segments" ?>
<?php $page_title = "Help" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<div class="c">
		<div class="c300 section">
			<h1>Help yourself</h1>
			<p>We regret you have ended up here - it most likely means you think something is wrong. This site is segmented to allow access from any kind of device and maybe we accidentally served you the <em><?= $_SESSION["segment"] ?></em> segment by mistake.</p>
			<p>Feel free to try another segment, by clicking below.</p>

			<ul class="segments">
				<li>
					<h4><a href="/help/?segment=desktop" class="hardlink">Desktop</a> - Best version</h4>
					<p>The most modern browsers. Chrome 5+, Firefox 4+ and Safari 5+.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=desktop_ie" class="hardlink">Desktop IE</a> - Internet Explorer optimized version</h4>
					<p>Internet Explorer 8 and 9.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=desktop_light" class="hardlink">Desktop Light</a> - Simple version</h4>
					<p>All older browsers for desktop or laptop computers.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=tv" class="hardlink">TV</a> - Remote control navigation</h4>
					<p>All devices allowing internet access, using the remote control to navigate.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=tablet" class="hardlink">Tablet</a> - Tablet computers</h4>
					<p>iPad/Android 2.2+ tablets.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=mobile_touch" class="hardlink">Mobile Touch</a> - iOS/Newer Android smartphones</h4>
					<p>iPhone/Android 2.2+.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=mobile" class="hardlink">Mobile</a> - New mobile phones</h4>
					<p>All newer mobile phones, regardless of brand.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=mobile_light" class="hardlink">Mobile Light</a> - Old mobile phones</h4>
					<p>All other mobile phones.</p>
				</li>
				<li>
					<h4><a href="/help/?segment=basic" class="hardlink">Basic</a> - Semantic fallback</h4>
					<p>Screen readers for visually impaired, text-based browsers.</p>
				</li>
			</ul>
		</div>
	</div>

</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>