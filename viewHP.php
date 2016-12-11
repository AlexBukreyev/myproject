<html ng-app class="ng-scope">
    
    <head>
        <title>Home page</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">    
        <link rel="stylesheet" href="/style.css" type="text/css">
            <style>
                input.ng-invalid.ng-dirty{border:1px solid red;}
            </style>
        <script src="angular.js"></script>
    </head>
    
    <body>
        <div id="container">
            <div id="header">header</div>
            <div id="left">
                <div>
                    
                    <form action="testreg.php" method="post" name="frm" >
                        
                        <div>
                            <p>Login:</p>
                            <input type="text" name="login" ng-model="user.login" required>
                            <span ng-show="frm.login.$dirty && frm.login.$error.required" >Required!</span>
                        </div>
            
                        <div>
                            <p>Password:</p>
                            <input type="password" name="password" ng-model="user.password" required>
                            <span ng-show="frm.password.$dirty && frm.password.$error.required">Required!</span>                
                        </div>
                        
                            <br>
                        <button ng-disabled="frm.$invalid" >Enter</button>
                            <br>
                            
                        <a href="reg.php">Registration</a>             
            
                    </form>
                    
                 </div>
                
            </div>
            
            <div id="content">
                <?php 
                echo $vhod; echo $error;
                ?>       
            </div>
            
            <div id="clear"></div>
            
            <div id="footer">footer</div>
            
        </div>
          
    </body>
</html>


