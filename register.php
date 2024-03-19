<main>
<h2>Регистрация</h2>
    <form action="" method="POST">
    <input name="lastname" type="text">Фамилия</input>
    <input name="name" type="text">Имя</input>
    <input name="fathername" type="text">Отчество</input>
    <input name="email" type="text">Почта</input>
    <input name="groupa" type="text">Группа</input>
    <input name="login" type="text">Логин</input>
    <input name="password" type="password">Пароль</input>
    <button type="submit">Отправить</button>
</form>
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
            $res = $conn->query("SELECT `id` FROM `user` WHERE `login`= '". $_POST['login'] ."'");
            // узнаем количество строк, если не 0 - логин уже занят
            $result = $res->num_rows;
            if ($result > 0) : ?>
                <script>
                    alert("Логин уже занят");
                </script>
            <?php else : ?>
                <?php $reg = $conn->query("INSERT INTO user (login, password, lastname, name, fathername, email, groupa) VALUES ('".$_POST['login']."', '".$_POST['password']."', '".$_POST['lastname']."', '".$_POST['name']."', '".$_POST['fathername']."', '".$_POST['email']."', '".$_POST['groupa']."')"); ?>
                    <script>
                        alert("Успешная регистрация");
                        window.location.href = 'index.html'
                    </script>
                <?php endif; 
        } catch (Exception $e) {
            echo $e;
        }
        
        // Закрытие соединения
        mysqli_close($conn);
    }
?>
</main>