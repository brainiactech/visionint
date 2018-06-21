<html>
    <head></head>
    <body>
        <h3>Hi {{ $name }}</h3>
        <h4>Congrats you've been registered for </h4>
        
        <h4>Thank you for your patience, your account has been approved and activated.  You can login with the following details</h4>
        <h4>Email: {{ $email }}</h4>
        <h4>Password: {{ $password }}</h4><br/>
        <h4>Please change your password immediately you login</h4><br/>
        <h4><a href="{{ getenv('APP_URL').'/login'}}">Click here to login</a></h4>
       
    </body>
</html>
