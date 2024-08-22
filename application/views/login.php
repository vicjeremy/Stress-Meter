<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form Login</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="login-form">
            <!--<center><img src= "https://sia.unkartur.ac.id/uploads/061046/logoPT.png" alt="logo"></center><br>-->
			<h2>Login Page</h2>
				<form action="<?php echo site_url('Auth/process_login'); ?>" method="post">
					<div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" placeholder="Masukan Username" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" placeholder="Masukan Password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" value="Login" class="btn btn-block btn-dark btn-xs">
                </div>
            </form>
			<?php if(isset($error)): ?>
				<p style="color: red;"><?php echo $error; ?></p>
			<?php endif; ?>
			<p>Belum memiliki akun? <a href="<?= site_url('Auth/add_akn') ?>">Silahkan Buat Akun</a></p>
	 </div>
    </div>
</body>
</html>
