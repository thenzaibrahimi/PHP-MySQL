<?php
 include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$passwor = $_POST['password'];
		$email = $_POST['email'];
        $repeatpassword = $_POST['repeatpassword'];

		
        $sql = "insert into users (name, password, email, repeatpassword) values (:name, :password, :email, :repeatpassword)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':password', $password); 
        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':repeatpassword', $repeatpassword);

        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}

?>