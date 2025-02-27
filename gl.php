<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MESA DE AYUDA - PUERTO DE BARRANQUILLA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
  <style>
  /*     #header {
        background:
          url(https://images.unsplash.com/photo-1415795854641-f4a487a0fdc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) 
          center center / cover no-repeat ;
        }


        . {  background-color: #00a6ce;  }
*/

body{  background-color: #00a6ce;  }



  </style>


  <style> 
           
        .card {
          border:0;
          background-color:#eeeeed;
        }


        .lead1 {
          text-decoration: underline;
          color:#fff
        }

        .lead2 {
          color:#fff;
        }

        .py-4 {
         /* padding-top: 2.5rem!important;*/
        }

        /* card group aka PRIMARY */
        .card-group .card-primary:hover {
        /*box-shadow: 0 40px 60px -20px rgba(12, 5, 62, 0.15);*/
        box-shadow: 0 40px 60px -20px rgba(12, 5, 62, 0.50);      
        z-index: 100;
        }
        .card-group .card-primary:hover .card-title{
        color: #4e22d0;
        }
        .card-group .card-primary .card-img-top{
        width:264px;
        height:264px;
        margin: 80px auto 32px;
        }
        .card-group .card-primary .card-body > .badge {
        margin-bottom: 24px;
        /*background-color: #002f87;*/
        }
        .card-group .card-primary .card-body {
        padding: 0 32px;
        }
        .card-group .card-primary .card-title {
        color: #261c6a;
        font-size: 26px;
        line-height: 1.54;
        font-weight: 900;
        margin-bottom: 24px;
        }
        .card-group .card-primary .card-text {
        color: #261c6a;
        font-size: 16px;
        line-height: 1.5;
        font-weight: 400;
        }
        .card-group .card-primary .card-footer {
        padding: 48px 0 56px;
        background: transparent;
        border:0;
        }

        /* card deck aka SECONDARY */
        .card-deck .card-secondary {
        padding: 32px 32px 0;
        margin: 16px;
        border-radius: 0;
        }
        .card-deck .card-secondary:hover {
        box-shadow: 0 40px 60px -20px rgba(12, 5, 62, 0.15);
        }
        .card-deck .card-secondary:hover .card-title{
        color: #4e22d0;
        }
        .card-deck .card-secondary .card-body {
        padding: 0;
        }
        .card-deck .card-secondary .card-img-top{
        margin-bottom: 24px;
        border-radius: 0px;
        }
        .card-deck .card-secondary .card-title {
        color: #261c6a;
        font-size: 20px;
        line-height: 1.6;
        font-weight: 700;
        margin-bottom: 16px;
        }
        .card-deck .card-secondary .card-text {
        color: #261c6a;
        font-size: 14px;
        line-height: 1.71;
        font-weight: 400;
        margin-bottom: 16px;
        }
        .card-deck .card-secondary .card-footer {
        padding: 9px 0 25px;
        background: transparent;
        border:0;
        }
        .card-deck .card-secondary .card-footer .btn{
        margin-right: -24px;
        }
        /* card AWARDS */
        .awards-container {
        /*background-image: linear-gradient(to bottom,  #00a6ce  2%, ##002f87);*/
        background-color:#00a6ce;
        /*background-color:#00a6ce; */
        /* margin: 0 -30px;
        padding: 30px;*/
        }
        .awards-container h2 {
        color: #fff;
        }
        .card-deck > .card-awards {
        padding: 32px 32px 0;
        margin: 16px;
        border-radius: 0;
        background: transparent;
        }
        .card-deck .card-awards:hover {
        /*box-shadow: 0 40px 60px -20px rgba(8, 4, 43, 0.8);*/ 
       /* background-color: #261c6a;*/
        }
        .card-deck .card-awards:hover .card-footer .btn{
        visibility: visible;
        }

        .card-deck > .card-awards .card-body {
        padding: 0;
        }
        .card-deck > .card-awards .card-img-top{
        margin-bottom: 24px;
        border-radius: 0px;
        height: 80px;
        display: flex; justify-content: center;
        }
        .card-deck .card-awards .card-img-top img {
        margin: auto;
        }
        .card-deck .card-awards .card-title {
        color: #eeeeed;
        font-size: 16px;
        line-height: 1.5;
        font-weight: 400;
        margin-bottom: 3px;
        }
        .card-deck .card-awards .card-footer {
        padding: 9px 0 13px;
        border:0;
        }
        .card-deck .card-awards .card-footer .btn{
        color: #eeeeed;
        visibility: hidden;
        }

        /* cards as ACCORDION */
        .accordion-container{
        margin: 50px 0;
        }
        .accordion {
        margin: 24px 100px;
        box-shadow: 0 40px 60px -20px rgba(12, 5, 62, 0.15);
        border: solid 1px #e9e8f3;
        }
        .accordion .card {
        border-radius: 0;
        margin:0;
        }

        .accordion .card:first-child {
        border-bottom: solid 1px #e9e8f3;
        }
        .accordion .card:not(:first-of-type):not(:last-of-type){
        border-bottom: solid 1px #e9e8f3;
        }

        .accordion .card-header {
        font-weight: 700;
        font-size: 20px;
        line-height: 1.6;
        background-color: #fff;
        border-radius: 0;
        color: #261c6a;
        padding: 36px 32px;
        border-bottom-width: 0;
        }
        .accordion .card-header:hover {
        color: #4e22d0;
        }
        .accordion .card:hover {
        z-index: 99999;
        box-shadow: 0 20px 40px -20px rgba(12, 5, 62, 0.4);
        }
        .accordion .card-header img {
        padding-right: 16px;
        }
        .accordion .card-header span {
        display: inline-block;
        width: calc(100% - 60px);
        }
        .accordion .card-header + .list-group .list-group-item:first-child {
        border-top: 1px;
        }
        .accordion .icon-btn {
        float: right;
        width: 48px;
        height: 48px;
        padding: 0;
        background: #fff url('https://web-static.ff.int.avast.com/static3.avast.com/1/web/i/v2/components/plus-s-plum.png') no-repeat 50% 50%;
        box-shadow: 0 12px 15px -4px rgba(12, 5, 62, 0.12);
        border: solid 1.2px #d4d2e6;
        border-radius: 24px;
        /* -webkit-transition: background .3s;
        transition: background .3s; */
        }
        .accordion .icon-btn:hover {
        background: #4e22d0 url('https://web-static.ff.int.avast.com/static3.avast.com/1/web/i/v2/components/plus-s-white.png') no-repeat 50% 50%;
        box-shadow: 0 12px 15px -4px rgba(78, 34, 208, 0.3), 0 12px 15px -4px rgba(12, 5, 62, 0.15);
        }
        .accordion .icon-btn:active {
        background: #261c6a url('https://web-static.ff.int.avast.com/static3.avast.com/1/web/i/v2/components/plus-s-white.png') no-repeat 50% 50%;
        box-shadow: 0 12px 15px -4px rgba(78, 34, 208, 0.3), 0 12px 15px -4px rgba(12, 5, 62, 0.15);
        }
        .accordion .card-body {
        padding: 0 32px 40px;
        }

        #sticky-footer{
          /*background-image: linear-gradient(to bottom, #0c053e 2%, #261c6a); */
          background-color: #eeeeed;
          /*position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;*/
        }

        /* PAGE LAYOUT */
        main{
        padding:0 20px;
        max-width:1361px;
        margin:0 auto;
        
        }  
        h2 {
        margin-top: 40px;
        }



  </style>

</head>


<body>

  <!--<nav class="bg navbar-dark mb-5" style="background-color:#0c053e;">  
      <div class="container"> 
        <a href="#" class="navbar-brand">
          <img class="card-img-top" src="http://www.asfinformatique.com/glpi/pics/logos/logo-GLPI-500-blue.png" alt="" style="width:50px;">  
          <i class="fas fa-cog fa-spin mr-2"></i>PUERTO DE BARRANQUILLA - SISTEMA DE INCIDENCIAS
          <span style="margin-left: 20px;"><em>SISTEMA DE SEGUIMIENTO DE INCIDENCIAS</em></span>
        </a> 
      </div>     
  </nav> -->
   
  <!--header-->

   <section id="header" class="container" >   

    <!--<section id="header" class="jumbotron text-center">-->

      <h1 class="display-3 lead1">Bienvenido</h1>
          
      <p class="lead2">En este espacio podrás hacer solicitudes a las diferentes áreas de nuestra organización.</p>           
 
   </section> 

   <!--header-->

<div class="container"> 

  <main >
  
    <div class="row card-group mt-5">
  
      <div class="col"> 

      <div class="card card-primary text-center">
        <img class="card-img-top" src="https://drive.google.com/uc?id=10nYlUMu4pB-MpLSntJHVsjDBhEdYEpZn" alt="Card image cap">        
        <div class="card-body">
           <div class="badge badge-primary badge-sm"></div> 
          <p>Si vas a realizar solicitudes para las áreas de:</p> 
           <div class="card-title"></div> 
          <div class="badge badge-primary badge-sm">SEGURIDAD_</div>
          <!--<div class="badge badge-primary badge-sm">MANTENIMIENTO</div>
          <div class="badge badge-primary badge-sm">OBRAS CIVILES</div> -->
          <p class="card-text"></p> 
        </div>
        <div class="card-footer">
          <a href="https://aure.sprb.local/glpi/index.php" target="_blank" class="btn btn-outline-secondary btn-icon-right">
            <span>CLICK AQUI
              <img src="https://drive.google.com/uc?id=1Wx_ae-TknC3-bfxMioFy2ik82-KjL8nD" height="24">
            </span>
          </a>
        </div>
      </div>

    </div>  

    <div class="col">    

      <div class="card card-primary text-center"> 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1OscFgAVvmqeM_J2mz6eWMKCktDebZnS3" alt="Card image cap">  
        <div class="card-body">
          <!--<div class="badge badge-primary badge-sm">TECNOLOGIA</div>-->
          <div class="badge badge-primary badge-sm"></div> 
          <p>Si vas a realizar solicitudes para las áreas de:</p>
           <div class="card-title"></div> 
          <div class="badge badge-primary badge-sm">TECNOLOGIA</div>
          <p class="card-text"></p> 
        </div>
        <div class="card-footer"> 
          <a href="http://solman.sprb.com.co:50000/sap/bc/ui5_ui5/ui2/ushell/shells/abap/Fiorilaunchpad.html#Shell-home" target="_blank" class="btn btn-outline-secondary btn-icon-right">
            <span>CLICK AQUI
              <img src="https://drive.google.com/uc?id=1Wx_ae-TknC3-bfxMioFy2ik82-KjL8nD" height="24">
            </span>
          </a>
        </div>
      </div>

    </div>


    </div>
    <!--row card-group -->

  </div>

 <!--  container-fliud -->
  
  
 
  </main>


<!--FOOTER 
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
-->
  
    <footer id="sticky-footer" class="flex-shrink-0 py-5 mt-5">    
      
      <div class="container">

        <div class="row">

            <div class="col-md-3">

              <img src="https://drive.google.com/uc?id=1o-LIMhknPNOaYis7FzSgO949W3wFGS8B" 
              alt="Puerto de Barranquilla Sociedad Portuaria" style="width: 200px;height: 80px"> 
                     
            </div>

            <div class="col-md-3">
              
            </div>

            <div class="col-md-3">
              
            </div>

            <div class="col-md-3">
              
              <img src="https://github.com/mesadeayudapbaq/mesadeayudapbaq.github.io/blob/main/vigilado.png" alt="Viligado super transporte" style="width: 200px;height: 80px">   
                           
            </div>
 
        </div> 

      </div>
     
       
    </footer>
        
<!--FOOTER -->  



</body>

</html> 

