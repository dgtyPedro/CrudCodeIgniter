<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3 class="text-center"> Atualizar um item </h3>

<form class="mx-5" action="Update/action" style="margin-bottom: 2rem;">
    

    <div class="mb-3">
        <label for="nome" class="form-label">ID do Item a ser Atualizado</label>
        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp">  
    </div>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp">  
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <select id="categoria" name="categoria" class="form-select">
        <option>Instrumentos</option>
        <option>Eletrônicos</option>
        <option>Livros</option>
        <option>Materiais</option>
        <option>Remédios</option>
        <option>Alimentos</option>
        <option>Bebidas</option>
        <option>Automóveis</option>
        <option>Ferramentas</option>
        <option>Outro</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="cor" class="form-label">Cor</label>
        <select id="cor" name="cor" class="form-select">
        <option>Azul</option>
        <option>Verde</option>
        <option>Vermelho</option>
        <option>Laranja</option>
        <option>Amarelo</option>
        <option>Roxo</option>
        <option>Rosa</option>
        <option>Preto</option>
        <option>Branco</option>
        <option>Cinza</option>
        <option>Outra</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="caracteristica" class="form-label">Características</label>
        <input type="text" name="caracteristica" class="form-control" id="caracteristica" aria-describedby="emailHelp">
    </div>

  <button type="submit" class="btn" style="background-color: #214F4B; color: white;">Atualizar</button>
</form>

</body>
</html>