<?php 

    require_once "connection.php";

    session_start();

    if (isset($_POST['btn_register'])) {
        $username = $_POST['txt_username'];
        $email = $_POST['txt_email'];
        $password = $_POST['txt_password'];
        $role = $_POST['txt_role'];

        if (empty($username)) {
            $errorMsg[] = "Please enter username";
        } else if (empty($email)) {
            $errorMsg[] = "Please enter email";
        } else if (empty($password)) {
            $errorMsg[] = "Please enter password";
        } else if (strlen($password) < 6) {
            $errorMsg[] = "Password must be atleast 6 characters";
        } else if (empty($role)) {
            $errorMsg[] = "pelase select role";
        } else {
            try {
                $select_stmt = $db->prepare("SELECT username, email FROM masterlogin WHERE username = :uname OR email = :uemail");
                $select_stmt->bindParam(":uname", $username);
                $select_stmt->bindParam(":uemail", $email);
                $select_stmt->execute();
                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                if ($row['username'] == $username) {
                    $errorMsg[] = "Sorry username already exists";
                } else if ($row['email'] == $email) {
                    $errorMsg[] = "Sorry email already exists";
                } else if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO masterlogin(username, email, password, role) VALUES (:uname, :uemail, :upassword, :urole)");
                    $insert_stmt->bindParam(":uname", $username);
                    $insert_stmt->bindParam(":uemail", $email);
                    $insert_stmt->bindParam(":upassword", $password);
                    $insert_stmt->bindParam(":urole", $role);

                    if ($insert_stmt->execute()) {
                        $_SESSION['success'] = "Register Successfully...";
                        header("location: index.php");
                    }
                }
            } catch(PDOException $e) {
                $e->getMessage();
            }
        }
    }


?>