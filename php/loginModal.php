<div id="loginModal" class="modal">
    <div class="login-dialog">
        <div class="login-content">
            <ul class="navlist">
                <li><a href="#loginModal" class="active">Вход</a></li>
                <li><a href="#registryModal">Регистрация</a></li>
            </ul>
            <div class="login-header">
                <a href="#close" title="Close" class="close">×</a>
                <h3 class="login-title">
                    Вход
                </h3>
            </div>
            <div class="login-body">
                <form action="./php/auth.php" method="post" class="login-form" enctype="multipart/form-data">
                    <div>
                    <p>Логин:</p>
                    <input name="login" type="text" />
                    </div>
                    <div>
                    <p>Пароль:</p>
                    <input name="pass" type="password" />
                    </div>
                    <div class="login-buttom">
                        <input class="ctaa" type="submit" name="formSubmit" value="Вход">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "registryModal.php" ?>