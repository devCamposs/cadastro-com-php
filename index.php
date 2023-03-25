 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="index.css">
   <title>Sistema de cadastro</title>
 </head>

 <body>
   <div class="conteiner">
     <nav>
       <ul class="menu">
         <a href="index.php">
           <li>
             Cadastro
           </li>
         </a>
         <a href="consultas.php">
           <li>
             Consultas
           </li>
         </a>
       </ul>
     </nav>
     <section>
       <h1>Cadastro de Usuarios</h1>
       <hr><br><br>

       <form method="post" action="processa.php">
         <label for=""><strong>Nome:</strong></label><br>
         <input type="text" name="nome" class="campo" maxlength="50" required autofocus><br>

         <label for=""><strong>Email:</strong></label><br>
         <input type="email" name="email" maxlength="50" class="campo" required><br>

         <label for=""><strong>Profissão:</strong></label><br>
         <input type="text" name="profissao" maxlength="50" class="campo" required><br><br>

         <input type="submit" value="Salvar" class="botao">
         <input type="reset" valeu="Limpar" class="botao">
       </form><br>


     </section><br>

   </div>
 </body>

 </html>
