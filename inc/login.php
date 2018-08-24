<div class="row nomargin">
  <div class="span12">
    <div class="headnav">
      <ul>
        <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Cadastrar</a></li>
        <li><a href="#mySignin" data-toggle="modal">Entrar</a></li>
      </ul>
    </div>
    <!-- Signup Modal -->
    <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="mySignupModalLabel">Craindo sua <strong>Conta</strong></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputEmail">E-mail</label>
            <div class="controls">
              <input type="text" id="inputEmail" placeholder="E-mail">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputSignupPassword">Senha</label>
            <div class="controls">
              <input type="password" id="inputSignupPassword" placeholder="Senha">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputSignupPassword2">Confirma Senha</label>
            <div class="controls">
              <input type="password" id="inputSignupPassword2" placeholder="Senha">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Cadastrar</button>
            </div>
            <p class="aligncenter margintop20">
              Você já possui uma conta? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Entre</a>
            </p>
          </div>
        </form>
      </div>
    </div>
    <!-- end signup modal -->
    <!-- Sign in Modal -->
    <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="mySigninModalLabel">Conectar em sua <strong>Conta!</strong></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="/ope.php" id="formlogin" name="formlogin">
          <div class="control-group">
            <label class="control-label" for="inputText">E-mail</label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="E-mail">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputSigninPassword">Senha</label>
            <div class="controls">
              <input type="password" id="senha" name="senha" placeholder="Senha">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Entrar</button>
            </div>
            <p class="aligncenter margintop20">
              Esqueceu a senha? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Resete</a>
            </p>
          </div>
        </form>
      </div>
    </div>
    <!-- end signin modal -->
    <!-- Reset Modal -->
    <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myResetModalLabel">Resetando a sua <strong>senha</strong></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputResetEmail">E-mail</label>
            <div class="controls">
              <input type="text" id="inputResetEmail" placeholder="E-mail">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Resetar senha</button>
            </div>
            <p class="aligncenter margintop20">
              Enviaremos instruções sobre como redefinir sua senha para sua caixa de entrada!
            </p>
          </div>
        </form>
      </div>
    </div>
    <!-- end reset modal -->
  </div>
</div>
