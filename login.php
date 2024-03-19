<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js"></script>
</head>
<header>
    <div class="container">
        <div class="header-container">
            <div class="header-left">
                <img src="https://sun6-21.userapi.com/s/v1/if1/g_vi6ODxYYOx2EA_N-3qEqM1xJ6VTTE0EScOxZIr_XBclvUIGGOdysMPEQvWpkqQbjAcU1_6.jpg?size=1809x1809&quality=96&crop=372,0,1809,1809&ava=1" alt="">
                <div class="mobile-menu-header mobile">
                    <div class="mobile-menu-btn">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 9.33325H28" stroke="#424A52" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 16H28" stroke="#424A52" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 22.6667H28" stroke="#424A52" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="header-right desktop">
                <a href="#" class="header-phone">8 800 700 05 33</a>
                <a href="#" class="header-mail">mail@enticom.ru</a>
                <div class="header-contacts">
                    <a href="">
                        <img src="assets/img/tg.svg" alt="">
                    </a>
                    <a href="">
                        <img src="assets/img/vk.svg" alt="">
                    </a>
                    <a href="login.php" class="header-contacts-btn js-popup-btn">Войти</a>
                </div>
            </div>
        </div>
    </div>
</header>
    <main>
      <div class="container reg">
        <h2>Авторизация</h2>
        <form class="order__form" action="" method="POST">
          <p>Логин</p>
          <input name="login" type="text" required></input>
          <p>Пароль</p>
          <input name="password" type="password" required></input>
          <a class="order__form" href="register.php">Регистрация</a>
          <a class="order__form" href="index.php">На главную</a>
          <button type="submit">Отправить</button>
        </form>
      </div>
    </main>
  </body>
</html>
<?php
  if ($_POST) {
    try {
        $host = "127.0.0.1";
        $username = "root";
        $database = "physical";
        $pass = "";
        $conn = new mysqli($host, $username, $pass, $database);
        // Проверка соединения
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $res =  $conn->query("SELECT `login` FROM `user` WHERE `login`='" . $_POST['login'] . "' AND `password` = '" . $_POST['password'] . "'");
        if ($result = $res->num_rows > 0) : ?>
          <script>
            alert('Успешная авторизация');
            window.location.href = 'index.html';
          </script>
        <?php else : ?>
          <script>
            alert('Не удалось авторизироваться.');
          </script>
        <?php endif;
    } catch (Exception $e) {
        echo 'Не удалось авторизироваться.';
    }
    
    // Закрытие соединения
    mysqli_close($conn);
  }
?>
    <footer>
        <div class="container footer-container">
            <div class="foter-item footer-column">
                <img class="logo" src="https://sun6-21.userapi.com/s/v1/if1/g_vi6ODxYYOx2EA_N-3qEqM1xJ6VTTE0EScOxZIr_XBclvUIGGOdysMPEQvWpkqQbjAcU1_6.jpg?size=1809x1809&quality=96&crop=372,0,1809,1809&ava=1" alt="">
            </div>
            <div class="foter-item">
                <div class="footer-nav">
                    <div class="footer-tg-vk desktop">
                        <a href="#">
                            <img src="assets/img/tg_dark.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/vk_dark.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="foter-item">
                <div class="footer-contacts">
                    <p class="phone-footer"><a href="#"><span>8 800</span> 700 05 33</a></p>
                    <p class="mail-footer">mail@enticom.ru</p>
                    <div class="footer-tg-vk mobile">
                        <a href="#">
                            <img src="assets/img/tg_dark.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/vk_dark.svg" alt="">
                        </a>
                    </div>
                    <p class="politika-footer">Политика конфидециальности</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="company-footer">© ООО «ЭНТИКОМ-ИНВЕСТ», 2023</div>
        </div>
    </footer>    