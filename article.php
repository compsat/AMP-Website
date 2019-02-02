<?php
    require_once 'php/global.php';
    $meta = json('meta');
?>

<!DOCTYPE html>
<html>
    <head>
        <?php globalLinks(); ?>
        <?php source('article.css'); ?>
        <title>Ateneo Musician's Pool - Tube Magazine</title>
    <head>
    <body id='holy-grail'>
        <div class='article'>
            <div class='wrapper'>
                <a href='/amplitube.php'><img id='tube' src='/../images/icons/tube_logo.png'></a>
            </div>
            <div class='wrapper'>
                <div class='main-content'><?php
                    $articles = json('articles');
                    $article = NULL;
                    foreach($articles as $a) {
                        if($a['id'] == $_GET['article_id']){
                            $article = $a;
                            break;
                        };
                    };?>
                    <h4><?php echo $article['title'] ?></h4>
                    <div class = subheading>
                        <p><?php echo $article['date_published']?></p>
                        <p>|</p>
                        <p><?php echo $article['credits']?></p>
                    </div>
                    <div class='main-image'>
                        <img src ='..<?php echo $article['image']?>'>
                    </div>
                    <?php echo $article['content']?>
                </div>
            </div>
        </div>
    </body>
    <?php createFooter('article') ?>
</html>