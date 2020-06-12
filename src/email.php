<?php
                    // Import PHPMailer classes into the global namespace
                    // These must be at the top of your script, not inside a function
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;

                    // Load Composer's autoloader
                    require '../vendor/autoload.php';

                    // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = 1;                      // Enable verbose debug output
                        $mail->isSMTP();                                            // Send using SMTP
                        //$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                        $mail->Host       = 'smtp.office365.com';
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        //$mail->Username   = 'zanealexanderdenize@gmail.com';                     // SMTP username
                        //$mail->Password   = 'Z9A3Dgoogle';                               // SMTP password
                        $mail->Username   = 'dtm0650@autuni.ac.nz';
                        $mail->Password   = 'ZAD2018aut*';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        //Recipients
                        //$mail->setFrom('zanealexanderdenize@gmail.com', 'Zane Senize');
                        $email = urldecode($_POST['email']);
                        $name = urldecode($_POST['name']);
                        
                        $mail->setFrom('dtm0650@autuni.ac.nz', '17991980');
                        $mail->addAddress($email, $name);     // Add a recipient
                        //$mail->addAddress('ellen@example.com');               // Name is optional
                        //$mail->addReplyTo('info@example.com', 'Information');
                        //$mail->addCC('cc@example.com');
                        //$mail->addBCC('bcc@example.com');

                        // Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'SEER: Submission Received.';
                        $mail->Body    = 'Thank you for your submission.<br><br>We will notify you when it has been accepted/rejected.<br><br>Regards,<br><br>The SEER Team.';
                        $mail->AltBody = 'Thank you for your submission./n/nWe will notify you when it has been accepted/rejected./n/nRegards,/n/nThe SEER Team.';

                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                ?>