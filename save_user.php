<?php
header('Content-Type: text/html; charset=utf-8');

    if (isset($_POST['login']))
        { 
        $login = $_POST['login']; 
        if ($login == '') 
            { 
            unset($login);
            } 
        }
    if (isset($_POST['password']))
        { 
        $password = $_POST['password']; 
        if ($password == '') 
            { 
            unset($password);
            } 
        }
    if (isset($_POST['firstName']))
        { 
        $firstName = $_POST['firstName']; 
        if ($firstName == '') 
            { 
            unset($firstName);
            } 
        }
    if (isset($_POST['lastName']))
        { 
        $lastName = $_POST['lastName']; 
        if ($lastName == '') 
            { 
            unset($lastName);
            } 
        }
    if (isset($_POST['email']))
        { 
        $email = $_POST['email']; 
        if ($email == '') 
            { 
            unset($email);
            } 
        }
    if (isset($_POST['address']))
        { 
        $address = $_POST['address']; 
        if ($address == '') 
            { 
            unset($address);
            } 
        }
    if (isset($_POST['zipcode']))
        { 
        $zipcode = $_POST['zipcode']; 
        if ($zipcode == '') 
            { 
            unset($zipcode);
            } 
        }
    
        if (empty($login) or empty($password) or empty($firstName) or empty($lastName) or empty($address) or empty($zipcode) or empty($email))
    {
           
        exit ("You have entered all the information, go back and fill in all the fields!");
    }
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    
    $firstName = stripslashes($firstName);
    $firstName = htmlspecialchars($firstName);
    
    $lastName = stripslashes($lastName);
    $lastName = htmlspecialchars($lastName);
    
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    
    $address = stripslashes($address);
    $address = htmlspecialchars($address);
    
    $zipcode = stripslashes($zipcode);
    $zipcode = htmlspecialchars($zipcode);
    
    $login = trim($login);
    $password = trim($password);
    
    include 'bd.php';    
    
    $result = mysql_query("SELECT id FROM users WHERE login = '$login'", $db);

    $myrow = mysql_fetch_array($result);
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {     
            echo 'enter valid email!!!';
            return FALSE;
            
         }
    $password = md5($password);
    if (!empty($myrow['id']))
    {
        exit ("Sorry, the entered login is already registered. Enter a different username.");
    }
    $result2 = mysql_query ("INSERT INTO users (login, password, firstName, lastName,email, address, zipcode) VALUES ('$login', '$password', '$firstName', '$lastName', '$email', '$address', '$zipcode')");
    
    if ($result2 == 'TRUE')
    {
        echo " You have successfully registered! <a href='index.php'>enter</a>";
    }
    else 
        {
        echo "Error! You are not registered.";
        }
         
        
    ?>
    
        
        