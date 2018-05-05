<?php include('includes/_header.php');?>
  <body class="sigin-body">

<div class="container sigin-container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-12 sm-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
<div class="card sigin-card">
  <div class="card-block">
    <img src="img/ListeneWhistlelogo.png" alt="Listen e Whistle logo" class="img-fluid sigin-image">
    <form class=" sigin-form" action="logar.php" method="POST">
    <div class="form-group">
    <input type="email" class="form-control" name="loginname" id="exampleInput" aria-describedby="emailHelp" placeholder="Email" />
      <small id="emailHelp" class="form-text text-muted">Insira o seu Email</small>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" id="passwordinput" placeholder="Password" />
      <small id="emailHelp" class="form-text text-muted">Insira a sua senha</small>
    </div>

    <button type="submit" class="btn btn-sigin btn-lg">Entrar</button>

    <div class="form-check">
      <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="Checkbox1">Remember me <a href="faq.html">Need help?</a>
    </label>
    </div>

  </form>
  </div>
</div>

<a href="#"class="create-new-account">Create a new account</a>

    </div>
    <div class="col">
    </div>
  </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>