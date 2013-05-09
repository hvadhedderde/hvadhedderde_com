<?php $body_class = "demos" ?>
<?php $page_description = "Demos" ?>
<?php $page_title = "Demos" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<div class="c">
		<div class="c300">
			<h1>Demos</h1>
		</div>

		<div class="c300 section">

			<ul class="demos">
				<li>
					<h2>Microsoft, Windows 8 - responsive HTML5 banners</h2>
					<ul class="actions">
						<li><a href="http://wund-win8-a.hvadhedderde.com" target="_blank" class="hardlink">http://wund-win8-a.hvadhedderde.com</a></li>
						<li><a href="http://wund-win8-b.hvadhedderde.com" target="_blank" class="hardlink">http://wund-win8-b.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>
							Interactive and responsive HTML5 banners for the launch of Windows 8. The banners autoplay when they enter the viewable section of the page.
							The banners stop when out of view, and reset on browser-resizing, providing smooth transitions between the different responsive states.
							Animated and interactive versions for smartphones, tablet and desktop browsers. Resize your browser to see all versions. Static fallback versions for IE8 and IE7.
						</p>
						<p>Super-optimized preloading, ensuring a minimal initial load, no overhead across devices and smooth playback.</p>
						<p>Produced in 2012. Built using HTML5, CSS3, JavaScript, JES-0.6 and WTF6</p>
					</div>

				</li>
				<li>
					<h2>BR, GakGak - HTML5 game for Danish carnival</h2>
					<ul class="actions">
						<li><a href="http://gakgak.hvadhedderde.com" target="_blank" class="hardlink">http://gakgak.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>Online dress-up game in HTML5. Support for IE7, IE8, IE9, Chrome, Firefox, Safari and iPad.</p>
						<p>
							Produced in 2012. Built using HTML5, CSS3, JavaScript, JES-0.5 and WTF5.
						</p>
					</div>
				</li>
				<li>
					<h2>Fri for mobberi - HTML5 version of main Flash site</h2>
					<ul class="actions">
						<li><a href="http://friformobberi.hvadhedderde.com" target="_blank" class="hardlink">http://friformobberi.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "desktop_light" ||
								$_SESSION["segment"] == "desktop_ie" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light" ||
								$_SESSION["segment"] == "tv"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>Non flash version of Fri for mobberi, primarily for the iPad where the Flash version cannot run.</p>
						<p>
							Produced in 2011. Built using HTML5, CSS3, JavaScript, JES-0.3 and WTF3.
						</p>
					</div>
				</li>
				<li>
					<h2>Amgen, Aranesp - product presentation for iPad</h2>
					<ul class="actions">
						<li><a href="http://aranesp.hvadhedderde.com" target="_blank" class="hardlink">http://aranesp.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "desktop_light" ||
								$_SESSION["segment"] == "desktop_ie" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light" ||
								$_SESSION["segment"] == "tv"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>
							iPad HTML5 presentation for Agnitio iPlanner. Final HTML is integrated in their iOS App. This demo has been 
							altered to run outside the intended app, which means some features have been disabled.
						</p>
						<p>
							It is designed for fullscreen viewing, and works well as a standalone HTML5 app. Bookmark to 
							homescreen on iPad for best experience.
						</p>
						<p>
							Produced in 2011. Built using HTML5, CSS3, JavaScript JES-0.4 and WTF4.
						</p>
					</div>
				</li>
				<li>
					<h2>Amgen, Mimpara - product presentation for iPad</h2>
					<ul class="actions">
						<li><a href="http://mimpara.hvadhedderde.com" target="_blank" class="hardlink">http://mimpara.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "desktop_light" ||
								$_SESSION["segment"] == "desktop_ie" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light" ||
								$_SESSION["segment"] == "tv"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>
							iPad HTML5 presentation for Agnitio iPlanner. Final HTML is integrated in their iOS App. This demo has been 
							altered to run outside the intended app, which means some features have been disabled.
						</p>
						<p>
							It is designed for fullscreen viewing, and works well as a standalone HTML5 app. Bookmark to 
							homescreen on iPad for best experience.
						</p>
						<p>
							Produced in 2011. Built using HTML5, CSS3, JavaScript JES-04 and WTF4.
						</p>
					</div>
				</li>
				<li>
					<h2>Amgen, Neulasta - product presentation for iPad</h2>
					<ul class="actions">
						<li><a href="http://neulasta.hvadhedderde.com" target="_blank" class="hardlink">http://neulasta.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "desktop_light" ||
								$_SESSION["segment"] == "desktop_ie" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light" ||
								$_SESSION["segment"] == "tv"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>
							iPad HTML5 presentation for Agnitio iPlanner. Final HTML is integrated in their iOS App. This demo has been 
							altered to run outside the intended app, which means some features have been disabled.
						</p>
						<p>
							Though it is designed for fullscreen viewing, it will not work as a standalone HTML5 app, due to its original
							nature.
						</p>
						<p>
							Produced in 2010. Built using HTML5, CSS3, JavaScript, JES-0.4 and WTF4.
						</p>
					</div>
				</li>
				<li>
					<h2>Sanofi/Avensis - product presentation for iPad</h2>
					<ul class="actions">
						<li><a href="http://sanofi.hvadhedderde.com" target="_blank" class="hardlink">http://sanofi.hvadhedderde.com</a></li>
					</ul>

					<div class="info">
						<?php
							if(
								$_SESSION["segment"] == "basic" ||
								$_SESSION["segment"] == "desktop_light" ||
								$_SESSION["segment"] == "desktop_ie" ||
								$_SESSION["segment"] == "mobile_touch" ||
								$_SESSION["segment"] == "mobile" ||
								$_SESSION["segment"] == "mobile_light" ||
								$_SESSION["segment"] == "tv"
							) {
								print '<p class="invaliddevice">Your current browser cannot show this demo.</p>';
							}
						?>
						<p>
							iPad HTML5 presentation for Agnitio iPlanner. Final HTML is integrated in their iOS App. This demo has been 
							altered to run outside the intended app, which means some features have been disabled.
						</p>
						<p>
							Though it is designed for fullscreen viewing, it will not work as a standalone HTML5 app, due to its original
							nature.
						</p>
						<p>
							Produced in 2010, shortly after the first iPad was released. New ground broken, new lessons learnt. Built using HTML5, CSS3, JavaScript, JES-0.4 and WTF4.
						</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>
