<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<style>/* Reset dasar */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

/* Background dan posisi tengah */
body {
  background-color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  padding: 1rem;
}

/* Kontainer form login */
#login-wrapper {
  background-color: #ffffff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  padding: 24px;
  border-radius: 6px;
  width: 100%;
  max-width: 400px;
}

/* Judul */
#login-wrapper h1 {
  font-size: 24px;
  font-weight: 800;
  color: #374151; /* abu-abu tua */
  margin-bottom: 16px;
}

/* Label */
.form-label {
  display: block;
  font-size: 14px;
  color: #4b5563;
  margin-bottom: 4px;
}

/* Input */
.form-control {
  width: 100%;
  padding: 8px;
  border: 1px solid #d1d5db;
  border-radius: 4px;
  margin-bottom: 16px;
  outline: none;
  font-size: 14px;
}

.form-control:focus {
  border-color: #9ca3af;
  box-shadow: 0 0 0 1px #9ca3af;
}

/* Tombol login */
.btn {
  padding: 8px 16px;
  font-size: 13px;
  font-weight: 600;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary {
  background-color: #a1a1aa;
  color: black;
}

/* Pesan error */
.alert {
  padding: 8px 12px;
  background-color: #fee2e2;
  color: #991b1b;
  border: 1px solid #fecaca;
  border-radius: 4px;
  margin-bottom: 16px;
  font-size: 14px;
}

/* Jarak antar elemen */
.mb-3 {
  margin-bottom: 16px;
}
</style>
<body>
    <div id="login-wrapper">
        <h1>Sign In</h1>

        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('flash_msg'); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email'); ?>">
            </div>

            <div class="mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
