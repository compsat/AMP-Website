<?php
    require_once 'php/global.php';
    $meta = json('meta');
?>

<!DOCTYPE html>
<html>
    <head>
        <?php globalLinks(); ?>
        <?php source('amplitube.css'); ?>
        <title>Ateneo Musician's Pool - Tube Magazine</title>
    <head>
    <body id='holy-grail'>
        <?php createHeader('Amplitube'); ?>
        <div class='amplitube'>
            <div class='wrapper'>
                <img id='tube' src='/../images/icons/tube_logo.png'>
            </div>
            <div class='wrapper'>
                <h1><?php echo get($meta, 'about-heading'); ?></h1>
                <p><b>Tube</b> aims to foster an environment of discourse through works and articles that are critically and creatively engaged in music and its context.</p>
            </div>
            <div id='chevron'>
                <img src='../images/icons/chevron_down.png'>
            </div>
            <div class='wrapper'>
                <div class='card-wrapper'><?php
                $articles = json('articles');
                paragraph(gettype($articles));
                $id = 0;
                foreach ($articles as $article) { 
                    $image = $article['image'];
                    if ($image) $image = "src='$image'"; ?>
                    <div class="card" index=<?php echo $id++; ?>>
                        <a href='/article.php'><h5><?php echo $article['title']; ?></h5></a>
                        <?php echo paragraph($article['date_published']); ?>
                        <?php echo paragraph($article['credits']); ?>
                        <a href='/article.php'><img <?php echo $image; ?><a>
                    </div> 
                <?php } unset($articles); ?>
                </div>
            </div>
        </div>
    </body>
</html>
        