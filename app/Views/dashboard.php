<?php
    $session = session();
?>
<div class="custom-dash">
    <strong><?=$session->get('nome');?> entrou!</strong>
    <p><a href="<?=base_url().'logout'?>">Sair</a></p>
</div>