<?php

    session_start();
    include 'database.php';

    if (isset($_SESSION['loggedin'])) {

        if (!isset($_POST['q-1-ans'], $_POST['q-2-ans'], $_POST['q-3-ans'], $_POST['q-4-ans'], $_POST['q-5-ans'])) {
            // Could not get the data that should have been sent.
            exit('Please answer all questions');
        }
                $answer1 = $_POST['q-1-ans'];
                $answer2 = $_POST['q-2-ans'];
                $answer3 = $_POST['q-3-ans'];
                $answer4 = $_POST['q-4-ans'];
                $answer5 = $_POST['q-5-ans'];

                $id = $_SESSION['id'];
                $exp;
    
                if($answer1 == "A"){
                    $exp = 50;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer1 == "B"){
                    $exp = 25;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer1 == "C"){
                    $exp = 0;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer2 == "A"){
                    $exp = 50;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer2 == "B"){
                    $exp = 25;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer2 == "C"){
                    $exp = 0;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer3 == "A"){
                    $exp = 50;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer3 == "B"){
                    $exp = 25;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer3 == "C"){
                    $exp = 0;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer4 == "A"){
                    $exp = 50;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer4 == "B"){
                    $exp = 25;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer4 == "C"){
                    $exp = 0;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer5 == "A"){
                    $exp = 50;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }
                
                if($answer5 == "B"){
                    $exp = 25;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                if($answer5 == "C"){
                    $exp = 0;
                    $stmt = $conn->prepare("UPDATE users SET user_experience = user_experience + $exp WHERE user_id = $id");
                    $stmt->execute();
                }

                header("location: ../User.php");
                exit();

            }

?>