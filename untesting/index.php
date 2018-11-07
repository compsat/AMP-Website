<?php
  require_once 'php/global.php';
  $slides = json('home');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php globalLinks(); ?>
    <meta name="google-site-verification" content="-CgO_A5vd99txcEHdkVG2B9TALekowaM2SY5CCiSZAI">
    <?php source('index.css'); ?>
    <?php source('slideshow.css'); ?>
    <title>Ateneo Musicians' Pool | Official Website</title>
  </head>
  <body id='fullscreen'>
    <?php createHeader('Home'); ?>
    <div id='container'>
      <section>
        <div class='slideshow'>
          <?php $id = 0; foreach ($slides as &$slide) { ?>
            <div class='slide parallax'
              src='<?php echo relative_path($slide['image']); ?>'
              index='<?php echo $id++; ?>'><?php
              // print quote
              $quote = get($slide, 'quote');
              if ($quote) {
                echo "<div class='shadow wrapper'>";
                echo "<h1>$quote[content]</h1>";
                echo "<p>";
                $song = get($quote, 'song');
                $artist = get($quote, 'artist');
                if ($song) {
                  echo $song;
                  if ($artist) echo ', ';
                }
                if ($artist) {
                  $prop = propertize($artist);
                  echo "<a href='bands.php#$prop'>$artist</a>";
                }
                echo "</p></div>";
              }
            ?></div>
          <?php } ?>
          <div class='slider'><?php
            for ($id = 0, $size = count($slides); $id < $size; ++$id)
              echo "<span index='$id'></span>";
          ?></div>
        </div>
      </section>
    </div>
  </body>
</html>