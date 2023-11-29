<?php require "php/head.php"; ?>
<?php require "php/header.php" ?>
<section class="main">
    <div class="article-block">
        <div class="header-article">
            <h1>Полезные статьи и база знаний</h1>
            <a href="#createArticleModal" class="createButtom">Создать статью</a>
        </div>
        <?php
        $articles = getArticles();
        foreach ($articles as $article):
            $author = getAuthorInfoByArticle($article['author']) ?>
            <div class="article">
                <div class="article-img">
                    <img src=<?="tmp/img/".$article['img_name']?>>
                </div>
                <div class="article-text">
                    <h5>Автор:
                        <?php echo $author->name ?>
                        <?php echo $author->secondName ?>
                    </h5>
                    <div class="article-title">
                        <h1>
                            <?php echo $article['title'] ?>
                        </h1>
                    </div>
                    <div class="article-description">
                        <p>
                            <?php echo $article['description'] ?>
                        </p>
                    </div>
                    <a class="buttom" href="">Подробнее</a>
                    <a class="ex-buttom" href=<?php echo $article['url'] ?>>Читать в источнике<i
                            class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php require 'php/createArticleModal.php' ?>
</section>
<?php require "php/icons-main.php"; ?>
<?php require "php/scripts.php"; ?>

</html>