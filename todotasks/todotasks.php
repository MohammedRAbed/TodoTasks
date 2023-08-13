<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>TodoTasks</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mb-3 mt-3">Todo Tasks</h1>
        <form class="mb-5" method="post">
          <div class="form-group">
            <input name="task" type="text" class="form-control" id="task" placeholder="Enter Task">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Task 1: Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </label>
        </div>
        <button type="button" class="btn btn-outline-danger">Danger</button>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
  </body>
</html>