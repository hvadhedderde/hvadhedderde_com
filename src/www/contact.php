<?php $body_class = "contact" ?>
<?php $page_description = "Contact information for Hvadhedderde" ?>
<?php $page_title = "Contact" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<div class="c">
		<div class="c300">
			<h1>Contact us</h1>
			<p>Do not hesitate to contact us if you have any questions or want to see a selection of our work.</p>
		</div>

		<div class="c300 section">
			<div class="c150">
				<div class="vcard company" itemscope itemtype="http://schema.org/Organization">
					<h2>Address</h2>
					<div class="name fn org" itemprop="name">Hvadhedderde</div>
					<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<div class="street-address" itemprop="streetAddress">Højdevej 4</div>
						<div class="city"><span class="postal-code" itemprop="postalCode">2680</span> <span class="locality" itemprop="addressLocality">Solrød Strand</span></div>
						<div class="country-name" itemprop="addressCountry">Denmark</div>
					</div>
					<h2>Email</h2>
					<div class="email" itemprop="email"><a href="mailto:info@hvadhedderde.com">info@hvadhedderde.com</a></div>
				</div>
			</div>

			<!--div class="c150">
				<h2>We are ...</h2>
				<div class="vcard person" itemscope itemtype="http://schema.org/Person">
					<div class="name fn" itemprop="name">Gert Fabricius Jørgensen</div>
					<div class="role" itemprop="role">Founder, owner and employee</div>
					<div class="org" itemprop="affiliation">Hvadhedderde</div>
					<div class="tel" itemprop="tel"><a href="callto:+4520742819">+45 2320 8323</a></div>
					<div class="email" itemprop="email"><a href="mailto:gert@hvadhedderde.com">gert@hvadhedderde.com</a></div>
				</div>

				<div class="vcard person">
					<div class="name fn" itemprop="name">Martin Kæstel Nielsen</div>
					<div class="role" itemprop="role">Founder, owner and employee</div>
					<div class="org" itemprop="affiliation">Hvadhedderde</div>
					<div class="tel" itemprop="tel"><a href="callto:+4520742819">+45 2074 2819</a></div>
					<div class="email" itemprop="email"><a href="mailto:martin@think.dk">martin@hvadhedderde.com</a></div>
				</div>

				<div class="vcard person">
					<div class="name fn" itemprop="name">Sebastian Green Hyllegaard</div>
					<div class="role" itemprop="role">Founder, owner and employee</div>
					<div class="org" itemprop="affiliation">Hvadhedderde</div>
					<div class="tel" itemprop="tel"><a href="callto:+4520742819">+45 2087 6660</a></div>
					<div class="email" itemprop="email"><a href="mailto:sebastian@hvadhedderde.com">sebastian@hvadhedderde.com</a></div>
				</div>
			</div-->
		</div>
	</div>

</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>