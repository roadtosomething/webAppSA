<div id="userInfoModal" class="userModal">
    <div class="userInfo-dialog">
        <div class="userInfo-content">
            <div class="userInfo-header">
                <h4>Информация о пользователе</h4>
            </div>
            <div class="userInfo-body">
                <?php $person = getPersonByUser($_COOKIE['id']) ?>
                <p><b>Фамилия:</b> <?= $person->secondName ?></p>
                <p><b>Имя:</b> <?= $person->name ?></p>
                <?php if ($person->surName != '') : ?>
                    <p><b>Отчество:</b> <?= $person->surName ?></p>
                <?php endif ?>
                <?php if ($person->eMail != '') : ?>
                    <p><b>E-mail:</b> <?= $person->eMail ?></p>
                <?php endif ?>
                <?php if ($person->phoneNumber != '') : ?>
                    <p><b>Телефон:</b> <?= $person->phoneNumber ?></p>
                <?php endif ?>
            </div>
            <a href="/php/exit.php">Выход <i class="ri-corner-right-down-line"></i></a>
        </div>
    </div>
</div>