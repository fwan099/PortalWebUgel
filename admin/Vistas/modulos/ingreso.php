<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UGEL YUNGUYO </title>
  <link rel="shortcut icon" href="<?php echo urlsite ?>public/img/logo.gif" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity=" sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../normalize.css">
  <link rel="stylesheet" type="text/css" href="../public/css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Roboto+Mono:wght@100;200&family=Roboto:wght@700&display=swap" rel="stylesheet">
  
  
</head>
<body style="background-color:#fff;">


  <section class="header-box">
    <div class="header-box-item1">
      <a href="../index.php"><img class="logo" src="Vistas/img/portada.jpg"></a>
      <a href="vistas/transparencia.php"><img class="trans" src="Vistas/img/transparencia.png"></a>
      
    </div>
  </section>
<style type="text/css">
  .return-btn{
    background-color: #E03A3C;
    display: inline-block;
    border-radius: 6px;
    padding: 8px;
    position: absolute;
  }
 
  .return-btn:hover{
    background-color: #B32E30;
  }
  .return-btn a{
    color: #fff;
   padding: 12px 4px;
   font-family: "Roboto";


  }
  .return-btn i{
    color: #fff;
  }
</style>
<section class="login" >
  
    <div class="login__box">
      <div class="login__box-item">
        <div class="title-box-login">
          <span>UGEL YUNGUYO</span>
        
        </div>
        <form method="post" class="formulario-login"  >
          <div class="boton-input">
            <div class="icon-login">
              <div class="icon-login--fas">
                <i class="fas fa-user" style="font-size:1.6rem;"></i> 
              </div>
            </div>
            
           
             <input type="text"  placeholder="Usuario" name="usuario-ing" required>
          </div>
          <div class=" boton-input">
            <div class="icon-login">
              <div class="icon-login--fas">
               <i class="fas fa-lock"style="font-size:1.6rem;"></i>
              </div>
            </div>
            
           
            <input type="password"  placeholder="Password" name="clave-ing" required>

            <div class="icon-login">
              <div class="icon-login--fas">
               <i class="fa fa-fw fa-eye" style="font-size:1.6rem;"></i>
              </div>
            </div>
          </div>
          

          <div class="boton-login--ingresar">
            
          <button type="submit" class="btn btn-primary btn-block  boton-login">Ingresar</button>
          </div>
             <?php 
    $ingreso = new UsuariosC();
    $ingreso-> IngresoUsuariosC();

     ?>
          
        
        </form> 
     
      </div>
      
    </div>
    <div class="return-btn">
      
        <i class="fas fa-home"></i>
    <a href="../index.php">Regresar al Inicio</a>
 
    
    
  </div>

  </section>

