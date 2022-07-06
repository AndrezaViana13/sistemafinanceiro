<!DOCTYPE html>
<head>
    
  <meta charset="UTF-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="cadastro.css" />
  
</head>
<body>
  
  <div class="container" >
     
    <div class="content">     
 

      <div id="cadastro">
        <form method="post" action="processo.php" method="$_POST"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="seuemail@aqui.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. As1234%"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar" href="index.php"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="index.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>