<?php function createDashboard() { ?>
<div id='dashboard'><dl>
  <dt><a href='<?= absolute_path('admin/') ?>'>Dashboard</a></dt>
  <dt><a href='<?= absolute_path('admin/menu.php') ?>'>Menu</a></dt>
  <dt><a href='<?= absolute_path('admin/pages/') ?>'>Pages</a></dt>
  <dd><dl>
    <dt><a href='<?= absolute_path('admin/pages/home.php') ?>'>Home</a></dt>
    <dt><a href='<?= absolute_path('admin/pages/about/') ?>'>About</a></dt>
    <dd><dl>
      <dt><a href='<?= absolute_path('admin/pages/about/eboard.php') ?>'>E Board</a></dt>
      <dt><a href='<?= absolute_path('admin/pages/about/departments.php') ?>'>Departments</a></dt>
    </dl></dd>
    <dt><a href='<?= absolute_path('admin/pages/amplitube.php') ?>'>Tube</a></dt>
    <dt><a href='<?= absolute_path('admin/pages/amplugged.php') ?>'>Amplugged</a></dt>
    <dt><a href='<?= absolute_path('admin/pages/artists/') ?>'>Artists</a></dt>
    <dd><dl>
      <dt><a href='<?= absolute_path('admin/pages/artists/bands.php') ?>'>Bands</a></dt>
      <dt><a href='<?= absolute_path('admin/pages/artists/soloists.php') ?>'>Soloists</a></dt>
    </dl></dd>
    <dt><a href='<?= absolute_path('admin/pages/contact.php') ?>'>Contact Us</a></dt>
    <dt><a href='<?= absolute_path('admin/pages/results.php') ?>'>Results Roster</a></dt>
  </dl></dd>
  <dt><a href='<?= absolute_path('admin/settings.php') ?>'>Settings</a></dt>
  <dt><a href='<?= absolute_path('/admin/index.php?logout')?>'>Logout</a></dt>
</dl></div>
<script>
  $('#dashboard dt>a[href="'+window.location.pathname+'"]').parent().addClass('selected');
</script>
<?php } ?>