<?php
include_once("connection.php");
session_start();

# For Admin Login
if (isset($_POST["login"])) {
    $query = "SELECT * FROM users WHERE email = '$_POST[email_username]' OR username = '$_POST[email_username]'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            $userProvidedPassword = $_POST['password'];

            if ($userProvidedPassword === $result_fetch['password']) {
                if ($result_fetch['username'] === 'gagan' && $userProvidedPassword === 'gagan') {
                    // Admin login
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $result_fetch['username'];
                    header('Location: admin_panel.php');
                } else {
                    // Regular user login
                    $_SESSION['customer'] = $result_fetch['username'];
                    echo "<script>
                        alert('Welcome, $result_fetch[username]'); 
                        window.location.href = '../q.php';
                    </script>";
                }
            } else {
                // Invalid password
                echo "<script>
                    alert('Incorrect Password'); 
                    window.location.href = '../shopping webiste.php';
                </script>";
            }
        } else {
            // Username or email not registered
            echo "<script>
                alert('E-mail or Username not Registered'); 
                window.location.href = '../account_login.php';
            </script>";
        }
    } else {
        // Cannot run the query
        echo "<script>
            alert('Cannot Run the query'); 
            window.location.href = '../shopping webiste.php';
        </script>";
    }
}

// # For Login
// if(isset($_POST["login"])){
//     $query = "SELECT * FROM users WHERE email = '$_POST[email_username]'  OR username = '$_POST[email_username]'";

//     $result = mysqli_query($conn, $query);

//     if($result){
//         if (mysqli_num_rows($result) == 1) 
//         {
//             $result_fetch = mysqli_fetch_assoc($result);
//             $userProvidedPassword = $_POST['password'];

//             if ($userProvidedPassword === $result_fetch['password'])
//             {
//                 echo "<script>
//              alert('correct Password'); 
//              window.location.href = '../shopping webiste.php';
//     </script>";
//                   // to verify password
//                 // if password mathched
//                 $_SESSION['logged_in'] = true;
//                 $_SESSION['username'] = $result_fetch['username'];
    
//                 header('Location:admin_panel.php');
                
//             }
//         else {
//             // if password not mathched
//             echo "<script>
//              alert('Incorrect Password'); 
//              window.location.href = '../shopping webiste.php';
//     </script>";
//         }
//     }
    
//     else{
//         echo "<script>
//         alert('E-mail or Username not Registered'); 
//         window.location.href = '../account_login.php';
//     </script>";
//     }
// }
// else{
//     echo "<script>
//     alert('Cannot Run the query'); 
//     window.location.href = '../shopping webiste.php';
// </script>";
// }
// }
# For registration

if (isset($_POST["register"])) {
    // Check if the username or email is already registered
    $user_exist_query = "SELECT * FROM users WHERE username = '$_POST[username]' OR email = '$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);

            if ($result_fetch['username'] == $_POST['username']) {
                // Username is already registered
                echo "<script>
                    alert('Username already taken: $result_fetch[username]'); 
                    window.location.href = '../shopping webiste.php';
                </script>";
            } else {
                // Email is already registered
                echo "<script>
                    alert('E-mail already registered: $result_fetch[email]'); 
                    window.location.href = '../shopping webiste.php';
                </script>";
            }
        } else {

            // Insert new user data
            $full_name = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password']; 
            $phone = $_POST['phone']; 
            $address = $_POST['address']; 
            $dob = $_POST['dob']; 
            // $password_hash = password_hash($_POST["password"], PASSWORD_BCRYPT);  #creating the hashed password for security reasons

            $insert_query = "INSERT INTO users (fullname, username, email, password, phonenumber, address, dob) 
                             VALUES ('$full_name', '$username', '$email', '$password', '$phone', '$address', '$dob')";
            
            if (mysqli_query($conn, $insert_query)) {  #if data inserted successfully
                echo "<script> 
                    alert('Registration successful'); 
                    window.location.href = '../shopping webiste.php';
                </script>";
            } else { #if data inserted not inserted successfully
                echo "<script>
                    alert('Error: Cannot run query'); 
                    window.location.href = '../shopping webiste.php';
                </script>";
            }
        }
    } else {
        echo "<script>
            alert('Error: Cannot run query'); 
            window.location.href = '../shopping webiste.php';
        </script>";
    }
}
?>
