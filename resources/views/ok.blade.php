<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor Smart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google" value="notranslate">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="{{ URL::to('/') }}/js/arrastrar.js"></script>
  <link href="{{ URL::to('/') }}/css/arrastrar.css" rel="stylesheet">
  <script src="{{ URL::to('/') }}/js/cargaImagenes.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />

  <script src="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/js/cropper.min.js"></script>
  <link rel="stylesheet" href="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/css/cropper.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="{{ URL::to('/') }}/js/jquery.blockUI.production.js"></script>

  <script type="text/javascript">
   var tipo="{{ $type }}";
   var medida="{{ $medida }}";
   var paginas="{{ $pages }}";
   var lomo="{{ $lomo}}";
   var urlRaiz="{{ URL::to('/') }}";



  </script>

  

  <style type="text/css">
    ::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:  #678aa0 ; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:  #9cadb6 ; 
}


body{

  //background-image: url("{{ URL::to('/') }}/img/fondos/fondo3.jpg");
}

.trabajo {
  

    background-color:#fff;
    border-style:dotted;margin: auto;
    border-color: red;

    }

.mascara1 {
  -webkit-mask-image: url("{{ URL::to('/') }}/img/mascaras/1.png");
  mask-image: url("{{ URL::to('/') }}/img/mascaras/1.png");
  object-fit: cover;-webkit-mask-size: cover;mask-size: cover;;

}

.mascara2 {
  -webkit-mask-image: url("{{ URL::to('/') }}/img/mascaras/2.png");
  mask-image: url("{{ URL::to('/') }}/img/mascaras/2.png");
  object-fit: cover;-webkit-mask-size: cover;mask-size: cover;;

}


</style>


 

<script type="text/javascript">

  var token="{{ csrf_token() }}";


</script>

<script type="text/javascript">

  $(document).ready(function(){

  var reader;
  var base64data;
  var valorImg;
  var identificadorImg;

  document.body.style.zoom = "87%";
  localStorage.clear();


  //bloequeamos click derecho
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
   };



  function getBase64(file,jr) {
         var reader = new FileReader();
         reader.readAsDataURL(file);
         reader.onload = function () {
            valorImg=reader.result;

          //  console.log(valorImg);

           $("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+valorImg+'" width="100%" class="clickable"  style="cursor:pointer;object-fit:cover;width:100%;height:100%;" id="img'+jr+'"/></div>');

           //control para recortar imagen al dar doble clic
            $('.clickable').dblclick(function() {
       
        
                identificadorImg=this.id;

             //  alert(identificadorImg);

               $('#modalImagenes').modal('show');
 
            });

            //control para recortar

            var src;

            $('.clickable').mousedown(function(event) {
              switch (event.which) {
                  case 3:


                     idSelec = $(this).attr("id");
                     src = $(this).attr("src");

                    $("#contImagen").html("<img src="+src+"  id='imagen' style='width:100%;height:auto;'>");

           

                     // document.addEventListener("DOMContentLoaded", () => {
                      var MIME_TYPE_IMAGEN_DESCARGADA = "image/jpeg",
                        EXTENSION_IMAGEN_DESCARGADA = "jpg",
                        CALIDAD_JPG = 1;

                  

                      const $btnDescargar = document.querySelector("#descargar");
                    
                      var  imagen = document.querySelector("#imagen");


                      $("#imagen").attr('src',src);

                      console.log(imagen);



                    var cropper = new Cropper(imagen, {
                      responsive: false, // <-- Si no se pone en false, la imagen se mueve cuando cambia el tamaño de la ventana
                    });

                    $btnDescargar.onclick = () => {
                      if (!cropper) {
                        return;
                      }
                      // Obtener el canvas recortado
                      var canvas = cropper.getCroppedCanvas();
                      // Aquí ya podemos hacer cualquier cosa con el canvas
                      var enlace = document.createElement('a');
                      // Nombre de la imagen que se descarga
                      enlace.download = "imagen_recortada." + EXTENSION_IMAGEN_DESCARGADA;
                      enlace.href = canvas.toDataURL(MIME_TYPE_IMAGEN_DESCARGADA, CALIDAD_JPG);

                      $("#"+idSelec).attr('src',enlace.href);
                      
                    };

                      $('#recortarImagenes').modal('show');

                      //alert("mostrar el control de recorte"+idSelec);
                      break;
              }
          }); 




            //fin de control de recortar

          }
    }
  
   $("input[name=file1]").change(function() {
            var names = [];
           
            for (jr = 0; jr < $(this).get(0).files.length; ++jr) {

                getBase64($(this).get(0).files[jr],jr); // prints the base64 string

              }
   });


    $("#colorforLetra").click(function(){

         
           $("#colorLetra").trigger("click");

    });


    $("#forFondo").click(function(){

           
             $("#colorFondo").trigger("click");

    });




    //controles para retocar imagen

      $("#brillo").change(function(){

          var brillo=$(this).val();

          $("#"+identificadorImg).css("filter","brightness("+brillo+"%)");

          console.log(brillo);

      });


      $("#contraste").change(function(){

            var contraste=$(this).val();

            $("#"+identificadorImg).css("filter","contrast("+contraste+"%)");

            console.log(contraste);

      });


     $("#difuminar").change(function(){

        var difuminar=$(this).val();

        $("#"+identificadorImg).css("filter","blur("+difuminar+"px");

        console.log(difuminar);

      });


    $("#opacidad").change(function(){

        var opacidad=$(this).val();

        $("#"+identificadorImg).css("filter","opacity("+opacidad+"%");

        console.log(opacidad);

      });


    $("#sepia").change(function(){

        var sepia=$(this).val();

        $("#"+identificadorImg).css("filter","sepia("+sepia+"%");

        console.log(sepia);

      });


    $("#grosorM").change(function(){

        var grosorM=$(this).val();

       

        $("#"+identificadorImg).css("border", grosorM+"px solid "+el_color4);


      });

    $("#rotar").change(function(){

        var rotar=$(this).val();

        $("#"+identificadorImg).css("transform", "rotate("+rotar+"deg)");


      });


  //para mascaras

    $("#id_select2_example3").change(function(){

         var idm=$(this).val();

        // alert(identificadorImg);


          if(idm==0){

            $("#"+identificadorImg).removeClass("mascara2");
            $("#"+identificadorImg).removeClass("mascara1");

         }


         if(idm==1){

            $("#"+identificadorImg).removeClass("mascara2");
            $("#"+identificadorImg).addClass("mascara1");

         }

           if(idm==2){

            $("#"+identificadorImg).removeClass("mascara1");
            $("#"+identificadorImg).addClass("mascara2");

         }

      

      });


  //fin de mascaras



    //fin de controles


    //color de marco

  var el_color = "#208D5E";
  var el_color2 = "#ff0000";
  var el_color3 = "#ff0000";
  var el_color4 = "#ff0000";

  var textLetra;

  window.addEventListener("load", inicializar, false);

  window.addEventListener("load", inicializarletras, false);

  window.addEventListener("load", inicializarMarco, false);

  function inicializar() {
  //guarda una referencia al input type="color" en una variable
  input_color = document.querySelector("#colorFondo");
  //define el valor predeterminado del input type="color"
  input_color.value = el_color;

  input_color.addEventListener("input", actualizar, false);
  //input_color.addEventListener("change", actualizar, false);
  input_color.select();
}


  function inicializarletras() {
  //guarda una referencia al input type="color" en una variable
  input_color2 = document.querySelector("#colorLetra");
  //define el valor predeterminado del input type="color"
  input_color2.value = el_color;

  input_color2.addEventListener("input", actualizarLetra, false);
  //input_color.addEventListener("change", actualizar, false);
  input_color2.select();
}


function inicializarMarco() {
  //guarda una referencia al input type="color" en una variable
  input_color3 = document.querySelector("#colorMarco");
  //define el valor predeterminado del input type="color"
  input_color3.value = el_color;

  input_color3.addEventListener("input",actualizarColorMarco, false);
  //input_color.addEventListener("change", actualizar, false);
  input_color3.select();
}




function actualizar(event) {
  // detecta el nuevo color 
  el_color = event.target.value;
  
  console.log(el_color);

  localStorage.setItem('colorFondo', el_color);

  

  $(".trabajo").css("background-color",el_color);

  }



 

function actualizarLetra(event) {
  // detecta el nuevo color 
  el_color3 = event.target.value;
  
  console.log(el_color3);
     $("#"+colorText).css("color",el_color3);

  }

  function actualizarColorMarco(event) {
  // detecta el nuevo color 
  el_color4 = event.target.value;
  
  console.log(el_color4);

 

  $("#"+identificadorImg).css("border","5px solid "+el_color4);



  }


    let $modal = $("#recortarImagenes");
        $modal.draggable({
          handle: ".modal-header",
          cursor: 'move'
        });




    //fin de colores



 });

 

</script>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Smart Book</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="#" ><iconify-icon icon="material-symbols:insert-text" style="font-size: 24px;color:#fff;"></iconify-icon></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="local"><iconify-icon icon="material-symbols:image" style="font-size: 24px;color:#fff;"></iconify-icon></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#"><iconify-icon icon="mdi:printer-preview" style="font-size: 24px;color:#fff;"></iconify-icon></a>
    </li>

     <li class="nav-item" >
      <input type="color" id="colorLetra" style="display: none;">
      <a class="nav-link" href="#" id="colorforLetra"><iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;color:#fff;" ></iconify-icon></a>
    </li>

    <li class="nav-item">
  
    <select class="form-select" id="tipoLetra" name="tipoLetra">
          <option>Tipo de letra</option>
          <option>Calibri</option>
          <option>Verdana</option>
          <option>sans-serif</option>
          <option>Arial</option>
          <option>Verdana</option>
          <option>Helvetica</option>
          <option>Geneva</option>
          <option>Tahoma</option>
          <option>Trebuchet MS</option>
          <option>Open Sans</option>
          <option>Liberation Sans</option>
          <option>Impact</option>
          <option>Georgia</option>
          <option>Segoe UI</option>
          <option>Times New Roman</option>
          <option>Bodoni</option>
          <option>Garamond</option>
          <option>Palatino</option>
          <option>ITC Clearface</option>
          <option>Plantin</option>
          <option>Freight Text</option>
          <option>Didot</option>
          <option>American Typewriter</option>
          <option>Courier</option>
          <option>MS Courier New</option>
          <option>Monaco</option>
          <option>Lucinda Console</option>
          <option>Andalé Mono</option>
          <option>Menlo</option>
          <option>Consolas</option>
      </select>




    </li>


    <li class="nav-item">
       <select class="form-select" id="tamanioLetra" name="tamanioLetra" style="width:80px;">
          <option>Size</option>
          <?php

            for($i=0;$i<200; $i++){

              echo "<option>$i</option>";
            }

          ?>
      </select>
    </li>

    <li class="nav-item">
       <input type="color" id="colorFondo" style="width:25px;height: 25px;display: none;">
      <a class="nav-link" href="#" id="forFondo"><iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;color: #fff;"></iconify-icon></a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="#" id="atras"><iconify-icon icon="ic:round-arrow-back-ios" style="font-size: 22px;color: #fff;padding-top: 2px;"></iconify-icon></a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="#" id="agregar"><iconify-icon icon="material-symbols:add-box-outline-rounded" style="font-size: 24px;color: #fff;"></iconify-icon></a>
    </li>

      <li class="nav-item">
      <a class="nav-link" href="#" id="next"><iconify-icon icon="fluent:arrow-next-12-regular" style="font-size: 24px;color: #fff;"></iconify-icon></a>
    </li>


    <li class="nav-item">
       <select id="id_select2_example" style="width:150px;">
          <option value="2">Seleccionar</option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla1.PNG" value="plantilla1"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla2.PNG" value="plantilla2"></option>
          
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla4.PNG" value="plantilla4"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla5.PNG" value="plantilla5"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla6.PNG" value="plantilla6"></option>
          <!--option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla7.PNG" value="plantilla7"></option-->
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla8.PNG" value="plantilla8"></option>
          <!--option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla9.PNG" value="plantilla9"></option-->
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla10.PNG" value="plantilla10"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla11.PNG" value="plantilla11"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla12.PNG" value="plantilla12"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla13.PNG" value="plantilla13"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla14.PNG" value="plantilla14"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla15.PNG" value="plantilla15"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla16.PNG" value="plantilla16"></option>
          <option data-img_src="{{ URL::to('/') }}/img/plantillas/plantilla17.PNG" value="plantilla17"></option>
       </select>
      

    </li>

  


     <li class="nav-item" style="margin-left:30px;">
      <a class="btn btn-primary" id="generar" href="#">Generar album</a>
    </li>
    

   
  </ul>
</nav>




<div class="row" style="margin-top:30px;">
  <div class="col-md-1">
    <form method='post' action='' enctype="multipart/form-data" style="display:none;">
        <input type="file" id='files' name="file1" multiple><br>
              
    </form>
     <div style="width:120px; height:500px; overflow: scroll;border-radius: 10px;overflow-x: hidden;" id="imagenes-album"></div>

  </div>

  <div class="col-md-8 offset-2">

     <div id="vistasPreviasPadre" style="width:750px;height:70px;background-color:#fff;overflow: scroll;border-radius: 10px;overflow-y: hidden;color:#000">
           <table><tr id="vistasPrevias"></tr></table>


         </div>

       <div id="element-to-print">


        </div>
        <table style="margin-top: 10px;" id="inicial">
          
          <tr>

            <td>

              <div id="izquierda"   style="background-color:#DCD5D4;width:350px;height:350px;position: relative;border-style: dotted;border-color: coral;">
                
                  <div class="card" style="margin-top:150px;text-align: center;font-size: 24px;" id="portada">
                    Portada
                  </div>

              </div>


            </td>

             <td>
               <div id="lomo" style="background-color:#EBECAA;width:{{ $lomo}};height:350px;position: relative;"></div>

             </td>

             <td>

                 <div id="derecha"  style="background-color:#fff;width: 350px;height: 350px;position: relative;border-style: dotted;border-color: coral;">

                  
                    <!--div class="zona-de-soltar area1plantilla10" style="width: 49mm;height:105mm;margin-top:7mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 49mm;height:105mm;margin-top: -105mm;border-style:dotted;margin-left:50mm;"></div-->
                   

                 </div>
            

             </td>

             </tr>
        </table>
     
    
  </div>
 
</div>


 <!-- The Modal para mostrar controles de imagen-->
<div class="modal" id="modalImagenes" role="dialog" style="margin-top:0px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1">
  <div class="modal-dialog" style="width:270px;float: right;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Herramientas de Imagen <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
            <label>Brillo <iconify-icon icon="ph:sparkle" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="brillo" id="brillo" value="100" max="200" style="width:200px;">


            <label>Contraste <iconify-icon icon="material-symbols:contrast" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="contraste" id="contraste" value="90" style="width:200px;">



            <label>Difuminar <iconify-icon icon="fluent-mdl2:blur" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="difuminar" id="difuminar" value="0" style="width:200px;">


            <label>Opacidad <iconify-icon icon="mdi:opacity" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="opacidad" id="opacidad" value="100" style="width:200px;">


            <label>Sepia <iconify-icon icon="mdi:theme-light-dark" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="sepia" id="sepia" value="0" style="width:200px;">

            <label>Color de Marco</label>
            <input type="color" id="colorMarco" style="width:25px;height: 25px;">
            <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>

            <label>Grosor de marco <iconify-icon icon="fluent-mdl2:line-thickness" style="font-size: 24px;"></iconify-icon></label>
            <input type="range" name="grosorM" id="grosorM" value="0" style="width:200px;">


            <label>Rotar<iconify-icon icon="fluent-mdl2:line-thickness" style="font-size: 24px;"></iconify-icon></label>
            <input type="range" name="rotar" id="rotar" value="-360" style="width:200px;">

            <label>Máscara</label>

            <select id="id_select2_example3" style="width:150px;">
              <option value="2">Seleccionar</option>
              <option data-img_src="{{ URL::to('/') }}/img/mascaras/ninguna.png" value="0"></option>
              <option data-img_src="{{ URL::to('/') }}/img/mascaras/1.png" value="1"></option>
              <option data-img_src="{{ URL::to('/') }}/img/mascaras/2.png" value="2"></option>
              
              
            </select>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!--fin del modal editar imagen-->


<!-- modal para recortar-->

<!----Modal para recortar-->

<div class="modal fade" id="recortarImagenes"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" >
  <div class="modal-dialog" style="width:300px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Recortar Imágen</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

          <div class="card">
            <div class="card-body" >

                 <div id="contImagen">
                     <!--img src="img/boda1.jpeg" id="imagen"  width="100%"-->

                 </div>
                

         
                         
            </div>
          </div>
         
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:18px;">Cancelar</button>
        <button type="button" class="btn btn-primary"  id="descargar" style="font-size:18px;">Recortar <iconify-icon icon="ooui:cut-ltr" style="font-size: 18px;"></iconify-icon></button>
      </div>

    </div>
  </div>
</div>




<!--fin-->





</body>

</html>
