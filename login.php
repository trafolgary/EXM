<!DOCTYPE html>
<html>
    <main>
      <h2>Авторизация</h2>
      <form class="order__form" action="" method="POST">
        <input name="login" type="text">Логин</input>
        <input name="password" type="password">Пароль</input>
        <button type="submit">Отправить</button>
      </form>
      <a class="order__form" href="reg.php">Регистрация</a>
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