<?php
$result = mysql_query("SELECT * FROM users WHERE login = '$login'", $db);
    $myrow = mysql_fetch_array($result);
    $password = md5($password);

 if (empty($myrow['password']))
    {
     
        $error = "Извините, введённый вами login или пароль неверный!<br><a href='index.php'>Попробуйте снова или зарегистрируйтесь!</a>";
    }
 else 
    {          
        if ($myrow['password'] == $password)
            {
            $_SESSION['login'] = $myrow['login'];
            $_SESSION['id'] = $myrow['id'];
            return TRUE;
            
            }
        else 
            {
           
            $error = "Извините, введённый вами login или пароль неверный!<br><a href='index.php'>Попробуйте снова или зарегистрируйтесь!</a>";
            }
    }

