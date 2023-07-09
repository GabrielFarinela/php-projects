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
        .custom-name {
            user-select: none;
        }
        .custom-table-name {
            user-select: none;
        }
        .custom-item-table-1 {
            text-decoration: underline green;
            color: black;
            font-weight: bold;
        }
        .custom-item-table-2 {
            text-decoration: underline red;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<div class="custom-container">
    <div class="d-flex flex-row justify-content-around align-items-center">
        <div>
            <img src="<?=$session->get('avatar');?>" class="rounded-circle img-thumbnail custom-img">
            <strong class="custom-name">Bem vindo(a) <?=$session->get('nome');?></strong>
        </div>
        <div>
            <a class="custom-buttom" href="<?=base_url().'logout'?>"><button type="button" class="btn btn-outline-dark">Sair</button></a>
        </div>
    </div>
    <div class="d-flex flex-column custom-table">
        <div>
            <h3 class="text-success custom-table-name">Conferências em aberto:</h3>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%">Id</th>
                        <th scope="col" style="width: 60%">Nome</th>
                        <th scope="col" style="width: 10%">Cidade</th>
                        <th scope="col" style="width: 10%">País</th>
                        <th scope="col" style="width: 15%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    <?php foreach ($eventos as $evento): ?>
                        <?php if (strtotime($evento['data_fim']) >= time()): ?>
                            <?php $temInscricao = false; ?>
                            <?php foreach ($inscricoes as $inscricao): ?>
                                <?php if ($inscricao['evento'] == $evento['id']): ?>
                                    <?php $temInscricao = true; ?>
                                    <tr>
                                        <th scope="row"><?php echo $evento['id']; ?></th>
                                        <td>
                                            <a class="custom-item-table-1" href="<?= base_url().'details?id=' . $evento['id'] . '&idUser=' . $session->get('id') ?>">
                                                <?php echo $evento['nome']; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $evento['cidade']; ?></td>
                                        <td><?php echo $evento['pais']; ?></td>
                                        <td><strong><?php echo $inscricao['tipo']; ?></strong></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$temInscricao): ?>
                                <tr>
                                    <th scope="row"><?php echo $evento['id']; ?></th>
                                    <td>
                                        <a class="custom-item-table-1" href="<?= base_url().'details?id=' . $evento['id'] . '&idUser=' . $session->get('id') ?>">
                                            <?php echo $evento['nome']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $evento['cidade']; ?></td>
                                    <td><?php echo $evento['pais']; ?></td>
                                    <td>Aberto para inscrições</td>
                                </tr>
                            <?php endif; ?>
                            <?php $count++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php $count = 1; $eventos_encerrados = false; ?>
        <?php foreach ($eventos as $evento): ?>
            <?php if (strtotime($evento['data_fim']) < time()): ?>
                <?php if (!$eventos_encerrados): ?>
                    <?php $eventos_encerrados = true; ?>
                    <div>
                        <h3 class="text-danger custom-table-name">Conferências encerradas:</h3>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%">Id</th>
                                    <th scope="col" style="width: 60%">Nome</th>
                                    <th scope="col" style="width: 10%">Cidade</th>
                                    <th scope="col" style="width: 10%">País</th>
                                    <th scope="col" style="width: 15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php endif; ?>
                    <tr>
                        <th scope="row"><?php echo $evento['id']; ?></th>
                        <td><a class="custom-item-table-2" href="<?=base_url().'details?id=' .$evento['id'] ?>"><?php echo $evento['nome']; ?></a></td>
                        <td><?php echo $evento['cidade']; ?></td>
                        <td><?php echo $evento['pais']; ?></td>
                        <td>Encerrado</td>
                    </tr>
                    <?php $count++; ?>
            <?php endif; ?>
        <?php endforeach; ?>
<?php if ($eventos_encerrados): ?>
                    </tbody>
                </table>
            </div>
<?php endif; ?>

    </div>
</div> 

   

