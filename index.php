<?php

$contacts = [
  ["name" => "Pepe", "phone_number" => "21321"],
  ["name" => "Manolo", "phone_number" => "21322"],
  ["name" => "Pedro", "phone_number" => "21324"],
  ["name" => "Jesus", "phone_number" => "21325"],
  ["name" => "Alfredo", "phone_number" => "21323"]

]

?>

<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.1/darkly/bootstrap.min.css" 
      integrity="sha512-BUdXMTpY4ru6TUZ3S/saZqxVzmv3FiyOLD4PaLDbH2hF2hrtdV7CYjACN2AqOJnVZMstFH/6bfUaAetxe8XlRQ==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous">
    </script>
  
    <!-- Static Content -->
    <link rel="stylesheet" href="./static/css/idex.css">

    <title>Contacts App</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="#">
          <img class="mr-2" src="./static/img/logo.png" />
          ContactsApp
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./add.html">Add Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container pt-4 p-3">
        <div class="row">
          <?php foreach ($contacts as $contact): ?>
            <div class="col-md-4 mb-3">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title text-capitalize"><?= $contact["name"]?></h3>
                  <p class="m-2"><?= $contact["phone_number"]?></p>
                  <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                  <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </main>

  </body>
</html>
