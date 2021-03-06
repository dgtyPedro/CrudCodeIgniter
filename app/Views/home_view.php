<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-dark" style="background-color: #214F4B; font-size: 20px;">
  <div class="container-fluid">
    <a class="navbar-brand mx-1 p-1" href="<?php echo base_url()?>/apiRestCodeIgniter/public/Logout" style="font-size: 25px;"><i class="fas fa-sign-out-alt">Logout</i></a>
  </div>
  </nav>


  <div class="row mx-5 my-5">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create</h5>
        <p class="card-text">Crie um item</p>
        <a href="http://localhost/apiRestCodeIgniter/public/Create" class="btn" style="background-color: #214F4B; color: white; width:90px;">Criar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Read</h5>
        <p class="card-text">Veja os produtos criados</p>
        <a href="http://localhost/apiRestCodeIgniter/public/Read" class="btn" style="background-color: #214F4B; color: white; width:90px;">Ler</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update</h5>
        <p class="card-text">Atualize os itens inseridos</p>
        <a href="http://localhost/apiRestCodeIgniter/public/Update" class="btn" style="background-color: #214F4B; color: white; width:90px;">Atualizar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Delete</h5>
        <p class="card-text">Delete itens inseridos</p>
        <a href="http://localhost/apiRestCodeIgniter/public/Delete" class="btn" style="background-color: #214F4B; color: white; width: 90px;">Deletar</a>
      </div>
    </div>
  </div>
</div>


    <script src="https://kit.fontawesome.com/c850dbc02c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>