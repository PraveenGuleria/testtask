<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $dbname = "contact";  


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, surname,phone, email,  message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $messages = "we recived your message our team will contact you shortly with the solution of your query";
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $surname,$phone, $email,  $message);
        if ($stmt->execute()) {
           // This is in the PHP file and sends a Javascript alert to the client
        echo "<script type='text/javascript'>alert('$messages');</script>";
        } else {
            echo "Error: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    <section class="cotact-form pb-5 pt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <h2 class="text-center pb-5 lines">Cotact Us Form</h2>

                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row pb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="First Name" required="required"
                                            data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_lastname" type="text" name="surname" class="form-control"
                                            placeholder="Last Name" required="required"
                                            data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" type="tel" name="phone" class="form-control"
                                            placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder=" Email" required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="row ">
                                <div class="col-md-12 pb-4">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control"
                                            placeholder="About Yourself" rows="4" required="required"
                                            data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input  type="submit" class="btn btn-danger btn-send" value="Send message">
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- Modal -->
                    <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p id="modal-text">Popup message goes here.</p>
                    </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>