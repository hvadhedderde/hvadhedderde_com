<?php $body_class = "contact" ?>
<?php $page_description = "Contact information for Hvadhedderde" ?>
<?php $page_title = "Contact" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<div class="c">
		<div class="c300">
			<h1>Contact us</h1>
		</div>

		<div class="c300 section">
			<div class="c150">
				<div class="vcard company" itemscope itemtype="http://data-vocabulary.org/Organization">
					<h2>Address</h2>
					<div class="name fn org" itemprop="name">Hvadhedderde</div>
					<div class="adr" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
						<div class="street-address" itemprop="street-address">Højdevej 4</div>
						<div class="city"><span class="postal-code" itemprop="postal-code">2680</span> <span class="locality" itemprop="locality">Solrød Strand</span></div>
						<div class="country-name" itemprop="country-name">Denmark</div>
					</div>
					<div class="email" itemprop="email"><a href="mailto:info@hvadhedderde.com">info@hvadhedderde.com</a></div>
				</div>
			</div>

			<div class="c150">
				<h2>We are ...</h2>
				<div class="vcard person" itemscope itemtype="http://data-vocabulary.org/Person">
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
			</div>
		</div>
	</div>

</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>