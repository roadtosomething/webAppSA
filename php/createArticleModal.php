<div id="createArticleModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#close" title="Close" class="close">×</a>
                <h3 class="modal-title">
                    Создание статьи
                </h3>
            </div>
            <div class="modal-body">
                <form action="./php/createArticle.php" method="post" class="create-article-form" enctype="multipart/form-data">
                    <p>Заголовок </p>
                    <input name="title" type="text" />
                    <p>Ссылка на источник </p>
                    <input name="url" type="text" placeholder="https://" />
                    <p>Фоновое изображение </p>
                    <input name="image" type="file" />
                    <p>Описание </p>
                    <textarea name="description" type="description"></textarea>
                    <div class="form-buttom">
                        <input type="reset" value="Очистить">
                        <input class="ctaa" type="submit" name="formSubmit" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>