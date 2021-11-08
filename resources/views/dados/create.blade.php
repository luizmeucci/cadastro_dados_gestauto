<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de cadastro de clientes - Novo cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#598233">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
                <img src="https://www.pinclipart.com/picdir/big/57-571075_add-events-staff-members-and-sermons-quickly-easily.png" alt="" width="50" height="40">
            </a>
            <a class="navbar-brand" href="#">Cadastro de clientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novo cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    &nbsp;
    <div class="container w-50">
        <form enctype="multipart/form-data" action="{{ route('registrar_dado')}}" method="POST">
            @csrf
            <label for="nome">Nome</label> <br />
            <input class="form-control " type="text" id="nome" name="nome"> <br />
            <label for="email">Email</label> <br />
            <input class="form-control" type="email" id="email" name="email"> <br />
            <label for="nascimento">Data de aniversário</label> <br />
            <input class="form-control" type="date" id="nascimento" name="nascimento"> <br />
            <label for="curriculo">Curriculo</label> <br />
            <input class="form-control" type="file" id="curriculo" name="curriculo"> <br /><br />
            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">© 2021 Gestauto</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://www.gestautobrasil.com.br/"> <img src="https://static.wixstatic.com/media/1c36fc_bb6bd3f17ffb4ae2874f77603f6383b7~mv2.png/v1/fill/w_289,h_101,al_c,q_85,usm_0.66_1.00_0.01/logo%20gestauto%20horizontal.webp"></a></li>
        </ul>
    </footer>
</body>

</html>
