<html ng-app class="ng-scope">
    
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
            <style>
                input.ng-invalid.ng-dirty{border:1px solid red;}
            </style>
        <script src="angular.js"></script>
    </head>
    
    <body>
        <h2>Registration page</h2>
        <form action="save_user.php"
              method="post" 
              name="frm" 
              class="ng-pristine ng-invalid ng-invalid-required"
        >
            <div>
                <p>Login:</p>
                <input type="text" name="login" ng-model="user.login" required>
                <span ng-show="frm.login.$dirty && frm.login.$error.required">Required!</span>
            </div>
            
            <div>
                <p>Password:</p>
                <input type="password" name="password" ng-model="user.password" required>
                <span ng-show="frm.password.$dirty && frm.password.$error.required">Required!</span>                
            </div>
            
            <div>
                <p>First name:</p>
                <input type="text" name="firstName" ng-model="user.firstName" required>
                <span ng-show="frm.firstName.$dirty && frm.firstName.$error.required">Required!</span>
            </div>
            
            <div>
                <p>Last name:</p>
                <input type="text" name="lastName" ng-model="user.lastName" required>
                <span ng-show="frm.lastName.$dirty && frm.lastName.$error.required">Required!</span>
            </div>
            
            <div>
                <p>Email:</p>
                <input type="email" name="email" ng-model="user.email" required class="ng-pristine ng-invalid ng-valid-email ng-invalid-required">
                <span ng-show="frm.email.$dirty && frm.email.$error.required">Required!</span>
                <span ng-show="frm.email.$dirty && frm.email.$error.email">Not an email!</span>
            </div>
            
            <div>
                <p>Address:</p>
                <input type="text" name="address" ng-model="user.address" required>
                <span ng-show="frm.address.$dirty && frm.address.$error.required">Required!</span>
            </div>
            
            <div>
                <p>Zipcode:</p>
                <input type="text" name="zipcode" ng-model="user.zipcode" required>
                <span ng-show="frm.zipcode.$dirty && frm.zipcode.$error.required">Required!</span>
            </div>
            
            <br>
            <button ng-disabled="frm.$invalid" type="submit" name="submit" value="Enter">Submit</button>
                
        </form>
        
    </body>
</html>