<?php
	require_once '../php/global.php';
	createLogin();
	source('dashboard.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php globalLinks(); ?>
		<?php source('admin.css'); ?>
		<title>AMP Admin - Dashboard</title>
	</head>
	<body id='holy-grail'>
		<section class='fixed amp-bg' src='<?= get(json('meta'), 'admin-bg') ?>'></section>
		<?php createHeader('Admin'); ?>
		<div id='container'>
			<div id='main-content'>
				<div>
					<h1>Welcome to Amp Admin Page.</h1>
					<ul>
						<li>For security reasons, your IP address (<?php echo $_SERVER['REMOTE_ADDR']; ?>) has been logged.</li>
						<li>Everything you do will be electronically logged. Please refrain from questionable activity.</li>
						<li>Amp's database will NOT be backed up automatically (for now).</li>
						<li>For technical support and features not supported by this admin page, contact the Web Admin (thericotiongson@gmail.com).</li>
						<li>For server-related problems, please contact the Computer Society of the Ateneo. <a href='http://compsat.org' target='_blank'><code>http://www.compsat.org</code></a></li>
					</ul>
				</div>
			</div>
			<?php createDashboard(); ?>
		</div>
	</body>
</html>