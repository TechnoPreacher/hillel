<?php
session_start();
//echo "session started...";
//session_destroy();

if (isset($_SESSION['buf'])) {//есть ли буфер в сессии
    if (isset($_POST['user'])) {//есть ли данные из формы
        $arr = [];
        $arr['user'] = $_POST['user'];
        $arr['pass'] = $_POST['pass'];
        $arr['mail'] = $_POST['mail'];
        $arr['birthday'] = $_POST['birthday'];
        $arr['gender'] = $_POST['gender'];
        $arr['color'] = $_POST['color'];
        array_push($_SESSION['buf'], $arr);//новый массив данных в сессию
    }

} else {
    echo "create empty...";
    $_SESSION['buf'] = array();//создаю пустой массив в сессии если его не было
}
?>

<pre>
    <?php
    // print_r($_SESSION);  для отладки
    ?>
</pre>
<?php

session_write_close();//закрываю сессию после внесения изменений

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>form for homework</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>


<?php


if (isset($_POST['user']))//если нашел в массиве пользователя - вывожу таблицу и кнопку повторной отправки
{
    ?>    <h2>RESULT OF SUBMIT:</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User's name</th>
            <th scope="col">Password</th>
            <th scope="col">User's e-mail</th>
            <th scope="col">Birthday</th>
            <th scope="col">Gender</th>
            <th scope="col">Color</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($_SESSION['buf'] as $v) {
            ?>
            <tr>
                <td><?php echo $v['user']
                    ?></td>
                <td><?php echo $v['pass']
                    ?></td>
                <td><?php echo $v['mail']
                    ?></td>
                <td><?php echo $v['birthday']
                    ?></td>
                <td><?php echo $v['gender']
                    ?></td>
                <td style="color:<?php echo $v['color']
                ?>"><?php echo $v['color']
                    ?></td>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>


    <form name="" action="index.php" method="get">
        <button type="submit" class="btn btn-info">New user...</button>
    </form>

    <?php
} else {
    ?>


    <form name="" method="post" action="index.php">
        <h2>OUR FIRST FORM</h2>

        <div class="form-group p-1">
            <div class="w-auto">
                <label for="user">User name:</label>
            </div>
            <div class="w-25">
                <input type="text" class="form-control col" name="user" id="user" placeholder="Enter your name">
            </div>
            <div class="col"></div>
        </div>

        <div class="form-group p-1">
            <div class="w-auto"><label for="pass">Password:</label>
            </div>
            <div class="w-25">
                <input type="password" class="form-control col" name="pass" id="pass" placeholder="Enter your password">
            </div>
            <div class="col"></div>
        </div>

        <div class="form-group p-1">
            <div class="w-auto">
                <label for="mail">E-mail:</label>
            </div>
            <div class="w-25">
                <input type="email" class="form-control col" name="mail" id="mail" placeholder="Enter your e-mail">
            </div>
        </div>

        <div class="form-group p-1">
            <div class="w-auto">
                <label for="date">Birthday:</label>
            </div>
            <div class="w-25">
                <input type="date" class="form-control col" name="birthday" id="date">
            </div>
        </div>

        <div class="form-group p-1">
            <label>Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>
                <label class="form-check-label" for="gender1"> Male </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
                <label class="form-check-label" for="gender2"> Female </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender3" value="other">
                <label class="form-check-label" for="gender3"> Other </label>
            </div>
        </div>

        <div class="form-group w-25 p-1">
            <label for="color">Color:</label>
            <input type="color" class="form-control col" id="color" name="color" placeholder="Enter your color">
        </div>

        <div class="form-group w-25 p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

    <?php
}
?>
</body>
</html>


