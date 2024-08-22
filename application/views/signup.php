<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            background-color: #343a40; /* Warna latar belakang tombol menjadi gelap */
            color: #fff; /* Warna teks tombol */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #23272b; /* Warna latar belakang tombol saat dihover */
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
        <h2>Signup</h2>
		<?php if(isset($error)): ?>
				<p style="color: red;"><?php echo $error; ?></p>
		<?php endif; ?>
        <form action="<?php echo site_url('Auth/save_akn'); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" placeholder="Masukkan Username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="Masukkan Password" name="password" class="form-control" required>
            </div>
			<div class="form-group">
                <label for="email">Email:</label>
                <input type="email" placeholder="Masukkan Email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="signup" value="Signup" class="btn btn-primary">
            </div>
			<p>Sudah memiliki akun? <a href="<?php echo site_url('Auth/login'); ?>">Login</a></p>
			</form>
		</div>
	</body>
</html>
