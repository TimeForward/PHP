
<html lang='en'>
<head>
<title> PHP OOP Tutorial</title>
</head>
<body>
<?php
class User {
    //properties and methods
    public $username;
    private $email ;
    public function __construct($username, $email){
        $this->username=$username;
        $this->email=$email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }
}
    $userOne = new User('mario','mario@thenetninja.co.uk');
    $userTwo = new User('luigi','luigi@thenetninja.co.uk');

    $userOne->email=3;
    // echo $userOne ->username.'<br>';
    echo $userOne ->email.'<br>';
    // echo $userOne->addFriend().'<br>';
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));
    // print_r(get_class_methods('User'));
    // $userTwo->username .'<br>';
    $userTwo->email .'<br>';

    // echo $userTwo ->username.'<br>';
    echo $userTwo ->email.'<br>';
   
    // echo $userTwo->addFriend().'<br>';
?>
</body>
</html>