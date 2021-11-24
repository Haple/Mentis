<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentis</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="../../resources/favicon.png">
</head>

<body>

    <!-- Navbar -->
    <div class="shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light navbar-font pt-3 pb-3">
                <div class="container-fluid">
                    <a class="navbar-brand dash-title" href="../../index.php">
                        <div class="logo me-3">Mentis<span class="logo-ponto">.</span></div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item me-2">
                                <a class="nav-link active" aria-current="page" href="dashboard_paciente.php"><i
                                        class="bi bi-house"></i>
                                    Área do
                                    Paciente</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link" href="DBchats_paciente.php"><i class="bi bi-chat-left"></i>
                                    Chats</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link" href="DBperfil_paciente.php"><i class="bi bi-person"></i> Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="../../includes/logout_inc.php"><i
                                        class="bi bi-power"></i> Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- HORÁRIOS -->
    <div class="container">
        <form class="col-4 pt-4 d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
            <button class="btn section-btn2 fw-bold">Pesquisar</button>
        </form>
        <div class="time-table pt-4">
            <table class="table table-hover text-center">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once '../../includes/db_inc.php';
                        $sql = "SELECT * FROM psicologo;";
                        $rs = mysqli_query($conn, $sql) or die("Conexão falhou!" . mysqli_error($conn));
                        while($data = mysqli_fetch_assoc($rs)){
                            $id=['IDadd_horario'];
                        ?>
                    <tr>
                        <td><?=$data["nomePsicologo"] ?></td>
                        <td><?=$data["emailPsicologo"] ?></td>
                        <td><?=$data["sexoPsicologo"] ?></td>
                        <td><?=$data["nascimentoPsicologo"] ?></td>
                        <td><?=$data["descricaoPsicologo"] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Páginas">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- MODAL 1 
    <div class="modal fade" id="ver_desc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descrição</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                        include_once '../../includes/db_inc.php';
                        $sql = "SELECT descricaoPsicologo FROM psicologo WHERE ;";
                        $rs = mysqli_query($conn, $sql) or die("Conexão falhou!" . mysqli_error($conn));
                        if($data = mysqli_fetch_assoc($rs)){
                            $id=['IDadd_horario'];
                        ?>
                    <p><?=$data["descricaoPsicologo"] ?></p>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>