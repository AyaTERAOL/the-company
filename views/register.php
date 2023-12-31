<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Register</title>

</head>
<body calss="bg-dark">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">REGISTER USER</h1>
        </div>
        <div class="card-body">
          <form action="../actions/register.php" method="post">

            <div class="mb-3">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first-name" class="form-control" required autoforcus>
            </div>

            <div class="mb-3">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last-name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="username" class="form-label fw-bold">Username</label>
              <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required placeholder="Enter Username">
            </div>

            <div class="mb-5">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" name="password" id="password" class="form-control fw-bold" minlength="8" required placeholder="Enter Password" aria-describedby="password-info">
                <div class="form-text" id="password-info">
                  password must be at least 8 characters.
                </div>
            </div>
            <button type="submit" name="btn_submit"class="btn btn-success w-100">Register</button>

          </form>
          <p class="text-center mt-3 small">Registered Already? <a href="../views/">Log in</a></p>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>