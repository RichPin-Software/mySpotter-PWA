<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="../style/style.css">

    <title>mySpotter</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col1">
                <a class="back" href="#">
                <img src="../icons/arrow-left.svg" alt="back" />
                </a>
            </div>
            <div class="col-8 col2">
                <h4 class="text-primary">mySpotter</h4>
            </div>
            <div class="col-2 col3">
                <!-- no icon for login -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="header">Login</h1>
            </div>
        </div>
        <form>
        <div class="form-group">
            <label for="email-login">Email</label>
            <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp" placeholder="yours@example.com">
        </div>
        <div class="form-group">
            <label for="password-login">Password</label>
            <input type="password" class="form-control" id="password-login" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="forgot-password">
            <label id="label-forgot-password" class="form-check-label" for="forgot-password">Forgot Password?</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                
        </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>