<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro</title>
  </head>
  <style>
        body{
            background-color: #214F4B;
        }

    </style>
  <body>
  <div class="alert alert-success alert-dismissible fade show mx-3 my-3 fixed-top" role="alert" style="width: 30rem;">
  <strong>Página de Cadastro:</strong> Na maioria das Api's você vai querer ter um sistema de cadastro e login, é de extrema importância 
  para determinar as permissões e as possibilidades para cada usuário.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  </div>
    <div class="card mx-auto" style="width: 30rem; margin-top:15%;">
    <div class="card-body">
      <p style="font-size: 30px;">Cadastro</p>
        <form method="post" action="Registrar/action">
            <input type="text" name="username" class="form-control my-3" placeholder="Username">
            <input type="password" name="password" class="form-control my-3" placeholder="Password">
            <button type="submit" class="btn my-auto mx-auto" style="background-color: #214F4B; color: white; font-size:20px;">Cadastrar-se</button>
            <a href="http://localhost/apiRestCodeIgniter/public/Entrar" class="mx-2">Já tem conta? Faça login</a>
          </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>