<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="png" href="../assets/kacamata.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card">
            <div class="card-body" style="width: 20rem; height: 20rem;">
                <form action="../controller/proses_login.php" method="post">
                    <h2 class="card-title text-center mb-3">Login</h2>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3" style="position: relative;">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <i class="toggle-password fas fa-eye " onclick="togglePassword()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;font-size: 1.2em;"></i>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    <p>daftar disini! <a href="register.php">daftar</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("pass");
            var eyeIcon = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                // Ganti ikon mata untuk menunjukkan password
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                // Ganti ikon mata untuk menyembunyikan password
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>