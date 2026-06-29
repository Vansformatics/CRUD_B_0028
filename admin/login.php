<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-light">

    <div class="container">

        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-5">

                <div class="card shadow">

                    <div class="card-body p-4">

                        <h2 class="text-center mb-4">Login Admin</h2>

                        <form action="authenticate.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>

                                <input type="text" name="username" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>

                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-dark w-100"> Login</button>

                        </form>

                        <div class="text-center mt-3">
                            <a href="../index.php">Kembali ke Website</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>