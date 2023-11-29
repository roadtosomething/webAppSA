<div id="registryModal" class="modal">
    <div class="login-dialog">
        <div class="login-content">
            <ul class="navlist">
                <li><a href="#loginModal">Вход</a></li>
                <li><a href="#registryModal" class="active">Регистрация</a></li>
            </ul>
            <div class="login-header">
                <a href="#close" title="Close" class="close">×</a>
                <h3 class="login-title">
                    Регистрация
                </h3>
            </div>
            <div class="login-body">
                <form action="./php/check.php" method="post" class="login-form" enctype="multipart/form-data">
                    <div>
                        <p>Имя:</p>
                        <input name="name" type="text" />
                    </div>
                    <div>
                        <p>Фамилия:</p>
                        <input name="secondName" type="text" />
                    </div>
                    <div>
                        <p>Отчество:</p>
                        <input name="surName" type="text" />
                    </div>
                    <div>
                        <p>E-Mail:</p>
                        <input name="eMail" type="text" />
                    </div>
                    <div>
                        <p>Телефон:</p>
                        <input name="phoneNumber" type="text" />
                    </div>
                    <div>
                        <p>Логин:</p>
                        <input name="login" type="text" />
                    </div>
                    <div>
                        <p>Пароль:</p>
                        <input name="pass" type="password" />
                    </div>
                    <div class="login-buttom">
                        <input class="ctaa" type="submit" name="formSubmit" value="Регистрация">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>