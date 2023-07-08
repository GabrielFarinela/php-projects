<head>
  <style>
  </style>
</head>

<div class="d-flex flex-column border border-dark p-5 custom-container">
  <h2><?php echo $evento['nome']; ?></h3>
  <div>
    <p><strong>Local: </strong><?php echo $evento['espaco']; ?></p>
    <p><strong>Cidade: </strong><?php echo $evento['cidade']; ?> - <strong>País: </strong><?php echo $evento['pais']; ?></p>
    <p><strong>Sigla: </strong><?php echo $evento['silga']; ?></p>
    <p><strong>Início: </strong><?php echo date('d/m/Y', strtotime($evento['data_inicio'])); ?> - <strong>Fim: </strong><?php echo date('d/m/Y', strtotime($evento['data_fim'])); ?></p></p>
    <p><strong>Fim das inscrições: </strong><?php echo date('d/m/Y', strtotime($evento['fim_inscricao'])); ?></p>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center custom-buttons">
    <a href="<?=base_url().'dashboard'?>"><button type="button" class="btn btn-outline-dark custom-buttom">Confirmar</button></a>
    <a href="<?=base_url().'dashboard'?>"><button type="button" class="btn btn-outline-dark custom-buttom">Voltar</button></a>
  </div>
</div>