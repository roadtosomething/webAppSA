<div id="userInfoModal" class="userModal">
    <div class="userInfo-dialog">
        <div class="userInfo-content">
            <div class="userInfo">
                <?php $person = getPersonByUser($_COOKIE['id'])?>
                <p>Фамилия: <?= $person->secondName?></p>
                <p>Имя: <?= $person->name?></p>
                <?php if ($person->surName != ''):?>
                <p>Отчество: <?= $person->surName?></p>
                <?php endif ?>
                <?php if ($person->eMail != ''):?>
                <p>E-mail: <?= $person->eMail?></p>
                <?php endif ?>
                <?php if ($person->phoneNumber != ''):?>
                <p>Телефон: <?= $person->phoneNumber?></p>
                <?php endif ?>
            </div>
            <a href="/php/exit.php">Выход</a>
        </div>
    </div>
</div>