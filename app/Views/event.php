<head>
  <style>
    .custom-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 40px;
      gap: 30px;
    }
    .custom-buttom{
      text-decoration: none;
      color: #000;
      width: 400px;
    }
    .custom-buttom:hover {
        color: #fff;
    }
    .custom-buttons {
      gap: 20px;
    }
    .custom-text {
      color: black;
      font-weight: bold;
    }
  </style>
</head>

<div class="d-flex flex-column border border-dark p-5 custom-container">
  <h2><?php echo $evento['nome']; ?></h2>
  <div>
    <p><strong>Local: </strong><?php echo $evento['espaco']; ?></p>
    <p><strong>Cidade: </strong><?php echo $evento['cidade']; ?> - <strong>País: </strong><?php echo $evento['pais']; ?></p>
    <p><strong>Sigla: </strong><?php echo $evento['silga']; ?></p>
    <p><strong>Início: </strong><?php echo date('d/m/Y', strtotime($evento['data_inicio'])); ?> - <strong>Fim: </strong><?php echo date('d/m/Y', strtotime($evento['data_fim'])); ?></p></p>
    <p><strong>Fim das inscrições: </strong><?php echo date('d/m/Y', strtotime($evento['fim_inscricao'])); ?></p>
    <?php
      $evento_id = $evento['id']; // ID do evento atual
      $artigo_encontrado = false;

      foreach ($inscricoes as $inscricao) {
        if ($inscricao['evento'] == $evento_id && !empty($inscricao['artigo'])) {
          $artigo_encontrado = true;
          break;
        }
      }

      if ($artigo_encontrado) {
        echo '<p><strong>Arquivo: </strong><a href="'. base_url('./assets/' . $inscricao['artigo']) .'" target="_blank">Baixar</a></p>';
      }
    ?>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center custom-buttons">
    <?php if (strtotime($evento['data_inicio']) >= strtotime(date('Y-m-d'))): ?>
      <?php $inscrito = false; ?>
      <?php foreach ($inscricoes as $inscricao): ?>
          <?php if ($inscricao['evento'] == $evento['id']): ?>
              <?php $inscrito = true; ?>
              <p class="text-success custom-text">Você já está inscrito neste evento como <strong><?php echo $inscricao['tipo']; ?>!</strong></p>
          <?php endif; ?>
      <?php endforeach; ?>
      <?php if (!$inscrito): ?>
          <a href="<?= base_url().'subscribe?id=' . $_GET['id'] . '&idUser=' . $_GET['idUser'] ?>">
              <button type="button" class="btn btn-outline-dark custom-buttom">Realizar inscrição</button>
          </a>
      <?php endif; ?>
    <?php else: ?>
      <p class="text-danger custom-text">Este evento está encerrado!</p>
    <?php endif; ?>
    <a href="<?=base_url().'dashboard'?>"><button type="button" class="btn btn-outline-dark custom-buttom">Voltar</button></a>
  </div>
</div>