<body>
  <div class="container d-flex align-items-center justify-content-center custom-container">
    <div class="col-md-6">
      <h1 class="text-center">Entrar no sistema</h1>
      <form action="<?=base_url().'authenticate' ?>" method="post">
        <div class="mb-3 inputs">
          <label for="InputForEmail">Email</label>
          <input type="email" name="email" class="form-control custom-input" id="InputForEmail">
        </div>
        <div class="mb-3">
          <label for="InputForPassword">Senha</label>
          <input type="password" name="password" class="form-control custom-input" maxlength="6" id="InputForPassword">
        </div>
        <button type="submit" class="btn btn-primary custom-btn">Entrar</button>
      </form>
    </div>
  </div>