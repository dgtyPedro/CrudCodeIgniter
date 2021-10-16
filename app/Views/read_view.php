<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center"> Ver itens criados </h3>
    <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Cor</th>
                            <th>Caracteristica</th>
                            <th>Criado por</th>
                        </tr>
                        <?php
                        if($item_data)
                        {
                            foreach($item_data as $item)
                            {
                                echo '
                                <tr>
                                    <td>'.$item["id"].'</td>
                                    <td>'.$item["nome"].'</td>
                                    <td>'.$item["categoria"].'</td>
                                    <td>'.$item["cor"].'</td>
                                    <td>'.$item["caracteristica"].'</td>
                                    <td>'.$item["createby"].'</td>
                                </tr>
                                ';
                            }
                        }
                        ?>

                    </table>
                </div>
</body>
</html>