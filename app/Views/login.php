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
    <h1 class="text-center">Entrar</h1>
    <form action="<?=base_url().'authenticate' ?>" method="post">
      <div class="mb-3 inputs">
        <label for="InputForEmail">Email</label>
        <input type="email" name="email" class="form-control custom-input" maxlength="50" id="InputForEmail">
      </div>
      <div class="mb-3">
        <label for="InputForPassword">Senha</label>
        <input type="password" name="senha" class="form-control custom-input" maxlength="6" id="InputForPassword">
      </div>
      <button type="submit" class="btn btn-primary custom-btn">Entrar</button>
      <p>Não tem uma conta? <a class="custom-register" href="<?=base_url().'register'?>">Registre-se</a></p>
    </form>
  </div>
</div>