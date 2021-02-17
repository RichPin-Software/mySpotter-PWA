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
                <img src="../icons/filter-left.svg" alt="dropdown-menu" />
            </div>
            <div class="col-8 col2">
                <h4 class="text-primary">mySpotter</h4>
            </div>
            <div class="col-2 col3">
                <a id="icon-edit-profile" href="#">
                <img src="../icons/pencil-fill.svg" alt="edit" />
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="header">Profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="sub-header">0 Workouts</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12 img-profile">
                <img class="rounded mx-auto d-block" src="../icons/person-square.svg" alt="profile" />
            </div>
        </div>
        <form id="form-profile">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" value="John Smith" disabled>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" value="34" disabled>
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" id="weight" value="197" disabled>
        </div>
        </form>
                
        </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>