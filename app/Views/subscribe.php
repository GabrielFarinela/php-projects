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
      margin-top: 30px;
    }
    .custom-buttom:hover {
        color: #fff;
    }
    .custom-file {
      margin-top: 30px;
    }
    .custom-title {
      margin-bottom: 20px;
    }
  </style>
</head>

<div class="d-flex flex-column border border-dark p-5 custom-container">
  <h2 class="custom-title">Inscrição</h2>
  <form action="<?= base_url().'subscribeForm' ?>" method="post">
    <p><strong>Nome do evento: </strong><?php echo $evento['nome']; ?></p>
    <p><strong>Nome: </strong><?php echo $usuario['nome']; ?></p>
    <p><strong>Email: </strong><?php echo $usuario['email']; ?></p>
    <p><strong>Instituição: </strong><?php echo $usuario['instituicao']; ?></p>

    <div class="form-group">
      <label for="inscricao">Como deseja fazer a inscrição?</label>
      <select name="inscricao" id="inscricao">
        <option value="autor">Autor</option>
        <option value="ouvinte">Ouvinte</option>
      </select>
    </div>

    <div class="form-group" id="file-upload">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="pdf" name="pdf">
      </div>
    </div>

    <div class="form-group d-flex flex-column justify-content-center align-items-center custom-buttons">
      <button type="submit" class="btn btn-outline-dark custom-buttom">Inscrever</button>
      <a href="<?= base_url().'details?id=' . $_GET['id'] . '&idUser=' . $_GET['idUser'] ?>">
        <button type="button" class="btn btn-outline-dark custom-buttom">Voltar</button>
      </a>
    </div>
  </form>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var selectInput = document.getElementById("inscricao");
    var fileUpload = document.getElementById("file-upload");

    selectInput.addEventListener("change", function() {
      if (this.value === "autor") {
        fileUpload.style.display = "block";
      } else {
        fileUpload.style.display = "none";
      }
    });
  });
</script>