<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">    
  <title>Sistema Planillero</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url("css/css/bootstrap.css");?>" rel="stylesheet" media="all">
  <link href="<?php echo base_url("css/css/bootstrap-submenu.css");?>" rel="stylesheet" media="all">
  <link href="<?php echo base_url("css/css/sistemascyc.css")?>" rel="stylesheet" media="all">
  <link rel="icon" type="image/jpg" href="<?php echo base_url("imagenes/favicon.jpg");?>">
  <script src="<?php echo base_url("js/jquery.js");?>"></script>
  <script src="<?php echo base_url("css/js/bootstrap.js");?>"></script>
  <script type="text/javascript">
  $(document).ready(function () {
    $(".navbar-nav li.cerrar a").click(function(event) {
      $("nav.sidebar").css({
        marginLeft:'-160px'});
      $(".glyphicon").css({
        marginLeft:'150px'});
      $(".MenuPrincipal").css({
        height: '20px'});
    });
    $(".navbar-nav li.cerrar a").dblclick(function(event) {
      $("nav.sidebar").css({
        marginLeft:'0px'});
      $(".glyphicon").css({
        marginLeft:'0px'});
    });
  });
  </script>   
</head>
<body>
  <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>      
      </div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">
               <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-home"></span></div> 
               <div class="MenuPrincipal">Escritorio</div>
              </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-user"></span></div>
              <div class="MenuPrincipal">Planilla<span class="caret"></span></div>
              </a>
            <ul class="dropdown-menu forAnimate" role="menu">
            </ul>
            <?php echo $activeTabPlanilla;?>
          </li>             
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-th-list"></span></div>
              <div class="MenuPrincipal">Contabilidad<span class="caret"></span></div>
            </a>
            <ul class="dropdown-menu forAnimate" role="menu">
            </ul>
            <?php echo $activeTabContabilidad;?>
          </li> 
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-qrcode"></span></div>
              <div class="MenuPrincipal">Inventario<span class="caret"></span></div>
            </a>
            <ul class="dropdown-menu forAnimate" role="menu">
            </ul>
            <?php echo $activeTabInventario;?>
          </li>           
          <li><a href="#">
            <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-tags"></span></div>
            <div class="MenuPrincipal">Generalidades</div>
          </a></li>
          <li class="cerrar"><a href="#">
            <div><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-off"></span></div>
            <div class= "MenuPrincipal">Desplazar Menú</div>
          </a></li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>