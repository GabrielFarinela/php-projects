<?php
    $session = session();
?>
<head>
    <style>
        .custom-container {
            margin: 30px
        }
        .custom-img {
            max-width: 80px;
            height: auto;
            border: 2px solid #000;
        }
        .custom-buttom > a {
            text-decoration: none;
            color: #000;
        }
        .custom-buttom:hover > a {
            color: #fff;
        }
        .custom-table {
            margin-top: 80px;
            gap: 50px
        }
    </style>
</head>
<div class="custom-container">
    <div class="d-flex flex-row justify-content-around align-items-center">
        <div>
            <img src="<?=$session->get('avatar');?>" class="rounded-circle img-thumbnail custom-img">
            <strong>Bem vindo(a) <?=$session->get('nome');?></strong>
        </div>
        <div>
            <button type="button" class="btn btn-outline-dark custom-buttom"><a href="<?=base_url().'logout'?>">Sair</a></button>
        </div>
    </div>
    <div class="d-flex flex-column custom-table">
        <div>
            <h3 class="text-success">Conferências em andamento:</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h3 class="text-danger">Conferências encerradas:</h3>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
