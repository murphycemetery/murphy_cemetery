<?php
        session_start();
        //BRING IN VARIABLES AND FUNCTIONS TO BE USED IN SCRIPT
        require_once("form-handler.php");


        //CHECK IF FORM HAS BEEN SUBMITTED

        if(filter_has_var(INPUT_POST, 'submit')) {

            if ($_POST['age'] !== "1") {
                die("Form could not be submitted");
            }

            //Required fields
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            //Not required fields

            if (isset($_POST['moveTimeFrame'])) {
                $moveTimeFrame = $_POST['moveTimeFrame'];
            } else {
                $moveTimeFrame = "";
            }

            if (isset($_POST['floorPlans'])) {
                $floorPlans = htmlspecialchars($_POST['floorPlans']);
            } else {
                $floorPlans = "";
            }

            if (isset($_POST['howYouHeard'])) {
                $howYouHeard = implode(", ", $_POST['howYouHeard']);
            } else {
                $howYouHeard = "";
            }

            if (isset($_POST['tour-style'])) {
                $tourStyle = $_POST['tour-style'];
            } else {
                $tourStyle = "";
            }

            if (isset($_POST['preferredDate'])) {
                $preferredDate = htmlspecialchars($_POST['preferredDate']);
            } else {
                $preferredDate = "";
            }

            if (isset($_POST['preferredTime'])) {
                $preferredTime = htmlspecialchars($_POST['preferredTime']);
            } else {
                $preferredTime = "";
            }

            validateFirstName($firstName);
            validateLastName($lastName);
            validateEmail($email);
            validatePhone($phone);
            validateMessage($message);

            if($validForm) {

                        $toEmail = 'admin@raymondagbor.name';
                        $subject = 'Contact form submission from '. $firstName . " " . $lastName;
                        $emailBody = '<h2>Contact Form Submission</h2>
                                      <h3>Name</h3><p>'. $firstName . ' ' . $lastName.'</p>
                                      <h3>Email Address</h3><p>' .$email. '</p>
                                      <h3>Phone Number</h3><p>' . $phone . '</p>
                                      <h3>Message</h3><p>'.$message.'</p>';








                        $emailHeaders = "MIME-Version: 1.0" . "\r\n";
                        $emailHeaders .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                        $emailHeaders .= "From: " .$firstName . '' . $lastName . "<" .$email. ">". "\r\n";

                        if (mail($toEmail, $subject, $emailBody, $emailHeaders)) {
                            $msg = "Your email has been sent, we will get back to you as soon as possible. Thanks!";
                        } else {
                            $msg = "Your email was not sent, please try again later";
                        }
                    }
            }   else {

                $msg = "";
            }

            require_once("../tpl/contact.tpl.php");
?>
