<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="">
        <div class="col">
            <div class="header-title">
                <h2>Cadastrar Novo Usuário</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="d-flex">
                        <div class="p-1 flex-fill">
                            <input type="text" name="cpf" class="form-control" placeholder="CPF"><br> 
                        </div>
                        <div class="p-1 flex-fill">
                            <input type="text" name="nome" class="form-control" placeholder="Nome"><br> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="d-flex">
                        <div class="p-1 flex-fill">
                            <input type="text" name="rua" class="form-control" placeholder="Rua"><br>
                        </div>
                        <div class="p-1 flex-sm-fill">
                            <input type="number" name="numero" class="form-control" placeholder="Número"><br>
                        </div>
                        <div class="p-1 flex-fill">
                            <input type="text" name="bairro" class="form-control" placeholder="Bairro"><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <form action="" method="post">
                    <div class="p-1">
                        <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                    </div>
                    <select class="form-select">
                        <option selected>Estado</option>
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="ap">AP</option>
                        <option value="am">AM</option>
                        <option value="ba">BA</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="mt">MT</option>
                        <option value="ms">MS</option>
                        <option value="mg">MG</option>
                        <option value="pa">PA</option>
                        <option value="pb">PB</option>
                        <option value="pr">PR</option>
                        <option value="pe">PE</option>
                        <option value="pi">PI</option>
                        <option value="rj">RJ</option>
                        <option value="rn">RN</option>
                        <option value="rs">RS</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR</option>
                        <option value="sc">SC</option>
                        <option value="sp">SP</option>
                        <option value="se">SE</option>
                        <option value="to">TO</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group mt-4">
            <input type="text" name="telefone" class="form-control" placeholder="Telefone">
        </div>
        <div class="form-group mt-4">
            <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary w-50">Cadastrar</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>