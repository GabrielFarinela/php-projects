<head>
  <style>
    .custom-dash {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .custom-btn {
        margin: 10px 0;
        width: 100%;
        background-color: #495057;
        color: 343a40;
        border: none;
    }
    .custom-btn:hover {
        background-color: #6c757d;
    }
    .custom-input {
        width: 100%;
    }
    .custom-container {
        height: 100vh;
    }
    .custom-register {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    .custom-register:hover {
        text-decoration: underline;
        color: black;
        font-weight: bold;
    }
  </style>
</head>

<div class="container d-flex align-items-center justify-content-center custom-container">
  <div class="col-md-6">
    <h1 class="text-center">Registrar</h1>
    <form action="<?=base_url().'authenticate-register' ?>" method="post">
      <div class="mb-3 inputs">
        <label for="InputForEmail">Nome</label>
        <input type="text" name="nome" class="form-control custom-input" maxlength="50" id="InputForEmail" required>
      </div>
      <div class="mb-3 inputs">
        <label for="InputForEmail">Instituição</label>
        <input type="text" name="instituicao" class="form-control custom-input" maxlength="50" id="InputForEmail" required>
      </div>
      <div class="mb-3 inputs">
        <label for="InputForEmail">Email</label>
        <input type="email" name="email" class="form-control custom-input" maxlength="50" id="InputForEmail" required>
      </div>
      <div class="mb-3">
        <label for="InputForPassword">Senha</label>
        <input type="password" name="senha" class="form-control custom-input" maxlength="6" id="InputForPassword" required>
      </div>
      <button type="submit" class="btn btn-primary custom-btn">Registrar</button>
      <p>Já tem uma conta? <a class="custom-register" href="<?=base_url().''?>">Acessar conta</a></p>
    </form>
  </div>
</div>