<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <script src="js/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8">
    <title>Empresa</title>
  </head>
  <body>
    <div id="NombreEmpresa" class"" >
      <header class="cabecera">
        <nav class="nav">
          <figure class="logo">
            <img class="foto" src="images/logo.png">
          </figure>
        <h2 class="letra1"> Nombre de la empresa </h2>
          <ul class="botones">
            <li class=""><a class="letra1" href="Principal.html">Home</a></li>
            <li class=""><a class="letra1" href="Productos.html">Productos</a></li>
            <li class=""><a class="letra1" href="#novedades_productos">Novedades</a></li>
            <li class=""><a class="letra1" href="#contact">Contact</a></li>
          </ul>
      </header>
    </div>
    <div class="container " style="background-color:#191a1a">
      <div class="">

        <a href="#single-project " class="show_hide more" rel="#Empresa1">Empresa</a>
        <a href="#single-project " class="show_hide more" rel="#Producto">Producto</a>
        <a href="#single-project " class="show_hide more" rel="#categoria">Categoria</a>
        <a href="#single-project " class="show_hide more" rel="#marca">Marca</a>
        <a href="#single-project " class="show_hide more" rel="#slider">Slider</a>
      </div>
      <div class="bloque2" id="bloque_Empresa">
        <div class="toggleDiv row-fluid single-project bloque4 centrado letra2" id="Empresa1">
          <div class="letra3">
            <h2>Gestión de información de la empresa</h2>  <br>
          </div>
          <form class="inline-form" id="Empresa" method="POST"  >
            <div class="form-group">
              <label for="exampleFormControlInput">Nombre</label>
              <input type="text" class="form-control newsletter" name="Nombre_Empresa" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Inportar el logo</label>
              <input type="file" class="form-control-file" name="logo">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Correo</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Teléfono</label>
              <input type="text" class="form-control" name="telefono" placeholder="+xx xxxxxxxxxx">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Quienes somos</label>
              <textarea class="form-control" name="quienes_somos" ></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Url Facebook</label>
              <input type="text" name="facebook" class="form-control"value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Url Twitter</label>
              <input type="text" name="twitter" class="form-control"value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Url whatsapp</label>
              <input type="text" name="whatsapp" class="form-control" value="">
            </div>
            <button class="button button-sp" type="submit" id="guardar_Empresa"   ></button>
          </form>
        </div>
      </div>
      <script type="text/javascript">
  	$(document).ready(function(){
  		$('#guardar_Empresa').click(function(){
  			var datos=$('#Empresa').serialize();
  			$.ajax({
  				type:"POST",
  				url:"php/form.php",
  				data:datos,
  				success:function(r){
  					if(r==1){
  						alert("agregado con exito");
  					}else{
  						alert("Fallo el server");
  					}
  				}
  			});

  			return false;
  		});
  	});
  </script>
      <div class="bloque2" id="bloque_producto">
        <div class="toggleDiv row-fluid single-project bloque4 centrado letra2" id="Producto">
          <div class="letra3">
            <h2>Gestión de producto</h2>  <br>
          </div>
          <form class="inline-form">
            <div class="form-group">
              <label for="exampleFormControlInput">Nombre</label>
              <input type="text" class="form-control newsletter" id="Nombre_Producto" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Inportar imagen</label>
              <input type="file" class="form-control-file" id="imgProducto">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción corta</label>
              <textarea class="form-control" id="descrip_corta" ></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea2">Descripción </label>
              <textarea class="form-control" id="descrip_larga"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput">Precio</label>
              <input type="text" class="form-control newsletter" id="Precio_Producto" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">id_categorias</label>
              <select class="form-control" id="categorias_id">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">id_maca</label>
              <select class="form-control" id="marca_id">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <button class="button button-sp" type="button" id="Guardar_Empresa">OK</button>
          </form>
        </div>
      </div>
      <div class="bloque2" id="bloque_categoria">
        <div class="toggleDiv row-fluid single-project bloque4 centrado letra2" id="categoria">
          <div class="letra3">
            <h2>Gestión de categoria</h2>  <br>
          </div>
          <form class="inline-form">
            <div class="form-group">
              <label for="exampleFormControlInput">Nombre</label>
              <input type="text" class="form-control newsletter" id="Nombre_categoria" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripcón</label>
              <textarea class="form-control" id="decrip_categoria" ></textarea>
            </div>
            <button class="button button-sp" type="button" id="Guardar_categoria">OK</button>
          </form>
        </div>
      </div>
      <div class="bloque2" id="bloque_marca">
        <div class="toggleDiv row-fluid single-project bloque4 centrado letra2" id="marca">
          <div class="letra3">
            <h2>Gestión de categoria</h2>  <br>
          </div>
          <form class="inline-form">
            <div class="form-group">
              <label for="exampleFormControlInput">Nombre</label>
              <input type="text" class="form-control newsletter" id="Nombre_marca" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripcón</label>
              <textarea class="form-control" id="decrip_marca" ></textarea>
            </div>
            <button class="button button-sp" type="button" id="Guardar_marca">OK</button>
          </form>
        </div>
      </div>
      <div class="bloque2" id="bloque_Sliders">
        <div class="toggleDiv row-fluid single-project bloque4 centrado letra2" id="slider">
          <div class="letra3">
            <h2>Gestión de producto</h2>  <br>
          </div>
          <form class="inline-form">
            <div class="form-group">
              <label for="exampleFormControlInput">Título</label>
              <input type="text" class="form-control newsletter" id="Nombre_slider" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput">subtítulo</label>
              <input type="text" class="form-control newsletter" id="sub_slider" value="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Inportar imagen</label>
              <input type="file" class="form-control-file" id="imgSlider">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción corta</label>
              <textarea class="form-control" id="descrip_corta" ></textarea>
            </div>

            <button class="button button-sp" type="button" id="Guardar_Empresa">OK</button>
          </form>
        </div>
      </div>


    </div>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery.inview.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
