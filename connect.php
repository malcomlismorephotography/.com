<?php  
    // Database connection credentials
        $servername = "localhost";
        $username ="root";
        $password = "";
        $database = "malcom lismore photography";

    // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = "INSERT INTO booking_inquiries (name, email, message) VALUES ('$name', '$email', '$message');";
            $result = mysqli_query($conn,$query);
        }

        if( $statement->execute()){
            echo 'Submitted';
        }
            
        else{
            echo 'Not submitted';
        }

    // Check connection
    if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Connection successful
    echo "Connected to the database successfully";

    // Close the connection
    mysqli_close($conn);
?>
