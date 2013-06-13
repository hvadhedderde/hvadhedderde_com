<?php $body_class = "blog" ?>
<?php $page_description = "the Blog @ Hvadhedderde" ?>
<?php $page_title = "the Blog @ Hvadhedderde" ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:scene">

	<h1>Blog</h1>
	<ul class="blogs">
		<li>
			<h2><a href="/blog/local-ipad-testing-with-squid">Local iPad testing with Squid Proxy Server</a></h2>
			<ul class="tags">
				<li>Tutorial</li>
				<li>Mobile</li>
			</ul>
		</li>
		<li>
			<h2><a href="/blog/setup-apache2-php5-mysql5-macports-mountain-lion">Setting up Apache 2, PHP 5 and MySQL 5 with Macports on OS X Mountain Lion</a></h2>
			<ul class="tags">
				<li>Tutorial</li>
				<li>OS X</li>
				<li>PHP</li>
			</ul>
		</li>
	</ul>

</div>

<?php include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>