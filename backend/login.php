<?php
        // Kondisi Jika Email dan Password Terisi
        if(isset($_POST['email']) || isset($_POST['password'])) {
            // Mengambil data input email dan password dari form
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Kondisi terdefinisi untuk test sesuai atau tidak
            if($email == 'admin@admin.com' && $password == 'admin') {
                header('Location: ./../dashboard.php');
            } else {
                echo "email atau password salah";

            }
        }

    ?>