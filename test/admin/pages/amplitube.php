<?php
require_once '../../php/global.php';
createLogin();
source('dashboard.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php globalLinks(); ?>
		<?php source('admin.css'); ?>
		<?php source('editor.css'); ?>
		<?php source('jquery-ui.min.js'); ?>
		<?php source('message.js'); ?>
		<title>AMP Admin - Amplitube</title>
	</head>
	<body id='holy-grail'>
		<?php createAdminBackground() ?>
		<?php createHeader('Amplitube'); ?>
		<div id='container'>
			<div id='main-content'>
				<div>
					<h1>Amplitube</h1>
					<ul>
						<li>Go to <a href='https://amplitubeonline.tumblr.com' target='_blank'><code>https://amplitubeonline.tumblr.com</code></a> and edit blog content there.</li>
					</ul>
				</div>
			</div>
			<?php createDashboard(); ?>
		</div>
	</body>
</html>