<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor Smart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google" value="notranslate">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/jquery.flippage.min.js"></script>
  <script src="js/html2canvas.js"></script>

 
  <link href="css/jquery.flippage.css" type="text/css" rel="stylesheet" />
  <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/js/cropper.min.js"></script>
  <link rel="stylesheet" href="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/css/cropper.min.css">


  <script type="text/javascript">
  
  var elementoArrastrado;

   var identificadorImg;

   var incremento=0;

   var el_color4 = "#ff0000";

   var colorText;

   

 
  document.addEventListener("drag", function( event ) {
  //console.log("drag")
  }, false);


  document.addEventListener("dragstart", function( event ) {
    // guarda información acerca del objeto arrastrado
    event.dataTransfer.setData('text/plain',null)
      // guarda una referéncia del elemento arrastrado
      elementoArrastrado = event.target;


      // cambia la opacidad del elemento a medio transparente
      event.target.style.opacity = .5;
  }, false);


  document.addEventListener("dragend", function( event ) {
      // reestablece el valor de la opacidad
      event.target.style.opacity = 1;


  }, false);

 
  document.addEventListener("dragover", function( event ) {
      // previene el comportamiento por defecto del elemento arrastrado
     event.preventDefault();
  }, false);

  document.addEventListener("dragenter", function( event ) {
      // comprueba si el event.target es una zona de soltar  
      if ( event.target.className == "zona-de-soltar" ) {
        // y di lo és cambia el color de fondo
          event.target.style.background = "#CED2D1";


      }

  }, false);

  document.addEventListener("dragleave", function( event ) {
      // comprueba si el event.target es una zona de soltar  
      if ( event.target.className == "zona-de-soltar"  ) {
        // y si lo és, reestablece el valor inicial
          event.target.style.background = "";

      }
  }, false);

  document.addEventListener("drop", function( event ) {
      // Si el elemento arrastrado es un link, este se abre en una nueve página.
      // Para que esto no pase hay que utilizar: 
      event.preventDefault();
      // comprueba si el event.target es una zona de soltar
      if ( event.target.className == "zona-de-soltar"  ) {
          // reestablece el valor inicial para el background
          event.target.style.background = "";
          // elimina el elemento arrastrado del del elemento padre

          console.log(event.target);


         elementoArrastrado.parentNode.removeChild( elementoArrastrado );

         console.log(elementoArrastrado);

       

          event.target.appendChild(elementoArrastrado);
      }
    
  }, false);

</script>

<script type="text/javascript">
  
$(document).ready(function(){

  var el_color = "#208D5E";
  var el_color2 = "#ff0000";
  var el_color3 = "#ff0000";

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

  $(".fondo").css("background-color",el_color);

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



});

</script>

<script>

        $(document).ready(function(){
          $('.exemples:eq(0)').flippage({
            width: 500,
            height: 333
          });
          
          $('.exemples:eq(1)').flippage({
            width: 300,
            height: 150
          });
        });
      
    </script>

  <style type="text/css">

body{

  background-color: #F0F0F0;
  //background-image: url("img/fondo4.jpg");





}

#zonasDeSoltar, #arrastrables{display:flex;}  
#arrastrables div{


width: 900px !important;


}
.arrastrable {
    flex:0 0 100px;
    width: auto;
    height: auto;
    text-align: center;
    background: white;
    border:1px solid;
    margin-top: 15px;
 
  }

  .zona-de-soltar {
    //flex:0 0 100px;
    width: 100%;
    height: 80px;
    //background: #000;
    padding: 10px;
    margin:10px 10px 0 0 ;

  }

  .punteado{
  border-style: dotted;
   border-width: 1px;
   border-color: 660033;
 
   font-family: verdana, arial;
   font-size: 10pt;
}

.zoom{


transition: 1.5ms ease;
 -moz-transition: 1.5s ease; /* Firefox */
 -webkit-transition: 1.5s ease; /* Chrome - Safari */
 -o-transition: 1.5s ease; /* Opera */
}
.zoom:hover{
transform : scale(1.2);
-moz-transform : scale(1.1); /* Firefox */
-webkit-transform : scale(1.1); /* Chrome - Safari */
-o-transform : scale(1.1); /* Opera */
-ms-transform : scale(1.1); /* IE9 */ }

.exemples > div {
        background-color: white;
      }

 .wrapper{
  position: absolute;
   top: 50%;
   left: 50%;

  max-width:250px;
  width: 100%;

 
  transform: translate(-50%, -50%);
  z-index: 2000;
  
}
.wrapper header{
  font-size: 23px;
  font-weight: 500;
  padding: 17px 30px;

  
}
.wrapper header.active{
  cursor: move;
  user-select: none;
}
.wrapper .content{
  display: flex;
 
  align-items: center;
  flex-direction: column;
  justify-content: center;
}
.campotransparente {background:transparent;}

/*.select2-container--default .select2-selection--single {
    background-color: #000;

  }*/


  /* width */
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

.fondoMini{

  background-color: black !important;
}

/*#modalImagenes{
    background:transparent !important;

}*/

.modal-backdrop
{
    opacity:0 !important;
}

.draggable { 
  position: absolute;
   top: 50%;
   left: 50%;
  padding: 0.5em;
  width: 240px; height: 50px;
  background:transparent;

 

 
  cursor:all-scroll;
  border-style: none;
  
 }


</style>
  

<script type="text/javascript">
  
   $(document).ready(function(){


    $('#id_select2_example').val('2').trigger('change.select2');


     


      $("#tipoLetra").change(function(){

        var letra=$(this).val();

       $("#"+colorText).css("font-family",letra);


        //font-family:

      });

      $("#tamanioLetra").change(function(){

        var tamanio=$(this).val();

    
        //document.getElementById("comment").style.fontSize =tamanio;

       $("#"+colorText).css("font-size",tamanio+"px");


        //font-family:

      });

      
      var decremento=0;

      var incrementoAux=0;


      $("#agregar").click(function(){



        if(incremento>0){

          
          resta=incremento-1;

          $("#padre"+incremento).css("display","none");
          $("#page1").css("display","none");

          $("#hijo"+incremento).removeClass("fondoMini");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;


        if(incremento==1){

          $("#page1").css("display","");
        }


        $("#paginador").css("display","");

        $(".pagination").append('<li class="page-item" ><a class="page-link" id="hijo'+incremento+'">'+incremento+'</a></li>');
        //$("#hijo"+incremento).addClass("fondoMini");


        $("#contenedorpages").append('<div class="zona-de-soltar fondo punteado" style="width:100%;height:325px;border:2;border-color: coral;background-color: #fff;text-align: center;" id="padre'+incremento+'"><div class="row"><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div></div><div class="row"><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div></div></div>');




      });

      var plantillaOk="";
      $("#id_select2_example").change(function(){

        valor=$(this).val();

         if(incremento>0){

          resta=incremento-1;

          $("#padre"+incremento).css("display","none");
          $("#page1").css("display","none");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;

        if(incremento==1){

          $("#page1").css("display","");
        }

       

        switch (valor) {
              case 'plantilla1':
                plantillaOk = '<div class="zona-de-soltar fondo punteado" style="width:100%;height:325px;border:2;border-color: coral;background-color: #fff;text-align: center;" id="padre'+incremento+'"><div class="row"><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div></div><div class="row"><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6" style="height:150px;"><div class="zona-de-soltar"></div></div></div></div>';
                break;
              case 'plantilla2':
                plantillaOk = "otra plantilla";
                break;
              case 'plantilla3':
                 plantillaOk = "otra plantilla";
                break;
             
        }


        $("#contenedorpages").append(plantillaOk);

        $("#paginador").css("display","");

        $(".pagination").append('<li class="page-item" ><a class="page-link" id="hijo'+incremento+'">'+incremento+'</a></li>');



        // alert(plantillaOk);







      });



      $("#atras").click(function(){

        


        if(incremento>1){
         // $("#next").attr("disabled",false);
          //$(this).attr("disabled",false);
          $("#padre"+incremento).css("display","none");


          $("#hijo"+incremento).removeClass("fondoMini");

             incremento=incremento-1;
            $("#padre"+incremento).css("display","");
            

           $("#hijo"+incremento).addClass("fondoMini");



        }else{
         // $(this).attr("disabled",true);

        }
        if(incremento==1){

          $("#page1").css("display","");
        }
       

           
     
      });

      $("#next").click(function(){

           incremento=incremento+1;
           decremento=incremento-1;



           if ( $("#padre"+incremento).length > 0 ) {

                $("#page1").css("display","none");

                 $("#padre"+incremento).css("display","");
                 $("#hijo"+incremento).addClass("fondoMini");

                 

                  $("#padre"+decremento).css("display","none");
                  $("#hijo"+decremento).removeClass("fondoMini");

                  



                  

            }

     
      });


       $(".fondoA").click(function(){


           id= $(this).attr("id");

           alert(id);


           // $("#padre"+incremento).css("display","");


     
      });


      


    

   });

</script>

<!-- para selector de las platillas-->

<script type="text/javascript">

  $(document).ready(function(){


 

  function custom_template(obj){
          var data = $(obj.element).data();
          var text = $(obj.element).text();
          if(data && data['img_src']){
            img_src = data['img_src'];
            template = $("<div><img src='"+ img_src +"' width=45 style='text-align:center;padding-top:4px;border: 1px solid #000;'>" + text + "</p></div>");
            return template;
          }
        }
  var options = {
    'templateSelection': custom_template,
    'templateResult': custom_template,
  }
  $('#id_select2_example').select2(options);
  $('.select2-container--default .select2-selection--single').css({'height': '50px'});

 

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




$('.clickable').dblclick(function() {
       
        
        identificadorImg=this.id;

       $('#modalImagenes').modal('show');
 
  });


var idSelec;
window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
   };

   var src;
//para el control de recortar
  $('.clickable').mousedown(function(event) {
    switch (event.which) {
        case 3:


           idSelec = $(this).attr("id");
           src = $(this).attr("src");

          $("#contImagen").html("<img src="+src+" width=100% id='imagen'>");

 

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

           // console.log(enlace.download);

           /* if (elementoArrastrado.src.includes("base64")) {

                enlace.href =elementoArrastrado.src;


              }else{
               

              }

              console.log(enlace.href);*/

            

            //console.log(enlace.href);

            $("#"+idSelec).attr('src',enlace.href);
            
          };

       // });


            
            $('#recortarImagenes').modal('show');

            //alert("mostrar el control de recorte"+idSelec);
            break;
    }
}); 



    $('#cargarImagenes').modal('show'); //para la carga de imagenes


    $("#cargaIni").click(function(){

        $('#cargarImagenes').modal('show'); //para la carga de imagenes      

    });



  
  });

</script>

<script type="text/javascript">
    
  </script>



<script type="text/javascript">

  //para el pdf

  $(document).ready(function(){



 $("#imprimir").click(function(){
  
    var pdf = new jsPDF('p', 'pt', 'letter');
       pdf.addHTML($('#contenedorpages')[0], function () {
           pdf.save('album.pdf');
       });


    });

  });



</script>

</head>

<body>

<div class="container" style="width:100% !important;">





  <div class="btn-toolbar">
    <div class="btn-group">
        <button type="button" class="btn" data-toggle="tooltip" title="Guardar">
        <iconify-icon icon="material-symbols:save" style="font-size: 24px;"></iconify-icon>


      </button>

    
      <!--button type="button" class="btn">
        <iconify-icon icon="material-symbols:content-copy-outline-rounded" style="font-size: 24px;"></iconify-icon>
      </button-->
      <!--button type="button" class="btn">
        <iconify-icon icon="uil:import" style="font-size: 24px;"></iconify-icon>
      </button-->
      <button type="button" class="btn" id="insertTexto" data-toggle="tooltip" title="Texto">
        <iconify-icon icon="material-symbols:insert-text" style="font-size: 24px;"></iconify-icon>
      </button>

       <button type="button" class="btn" id="cargaIni" data-toggle="tooltip" title="Cargar imágenes">
        <iconify-icon icon="material-symbols:image" style="font-size: 24px;"></iconify-icon>
      </button>
     
      <button type="button" class="btn" id="imprimir" data-toggle="tooltip" title="Imprimir">
        <iconify-icon icon="mdi:printer-preview" style="font-size: 24px;"></iconify-icon>
      </button>
    
      <button type="button" class="btn" data-toggle="tooltip" title="Fondo de proyecto">
        <input type="color" id="colorFondo" style="width:25px;height: 25px;">
        <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>
      </button>
      <button type="button" class="btn" >
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

       <select class="form-select" id="tamanioLetra" name="tamanioLetra" style="width:50px;">
          <option>size</option>
          <?php

            for($i=0;$i<200; $i++){

              echo "<option>$i</option>";
            }

          ?>
      </select>

       <input type="color" id="colorLetra" style="width:25px;height: 25px;" data-toggle="tooltip" title="Color de letra">
        <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>


         <iconify-icon icon="carbon:text-font" style="font-size: 24px;"></iconify-icon>
         
    </button>

    <button type="button" class="btn" id="atras" data-toggle="tooltip" title="Atrás">
        <iconify-icon icon="icon-park:back-one" style="font-size: 24px;"></iconify-icon>
    </button>
   <button type="button" class="btn" id="agregar" data-toggle="tooltip" title="Agregar página">
        <iconify-icon icon="material-symbols:add-box-outline-rounded" style="font-size: 24px;"></iconify-icon>
   </button>
    <button type="button" class="btn" id="next" data-toggle="tooltip" title="Siguiente">
        <iconify-icon icon="material-symbols:navigate-next" style="font-size: 24px;"></iconify-icon>
      </button>

<button type="button" class="btn">

  <label>Plantilla</label>
  <select id="id_select2_example" style="width:150px;">
    <option value="2">Seleccionar</option>
    <option data-img_src="img/plantillas/plantilla4.PNG" style="padding: 20px;" value="plantilla1"> 2 X 2 </option>
    <option data-img_src="img/plantillas/plantilla3-2.PNG" value="plantilla2"> 3 X 2 </option>
    <option data-img_src="img/plantillas/plantilla1-2.PNG" value="plantilla3"> 1 X 2 </option>
  </select>
</button>

  </div>









  </div>
</div>



  <div class="container-fluid" style="margin-top:10px;">
    <div class="row">
      <div class="col-sm-1" style="background-color:#F0F0F0;width:200px; height:500px; overflow: scroll;border-radius: 10px;overflow-x: hidden;" id="imagenes-album" >

        <div class="arrastrable" draggable="true">
          <img src="img/boda1.jpeg" width="100%" class="clickable" id="img12" style="cursor:pointer;height: 115px;background-size: cover;"/>

        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda2.jpeg" width="100%" class="clickable" id="img13" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda3.jpeg" width="100%" class="clickable" id="img14" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda4.jpeg" width="100%" class="clickable" id="img15" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda5.jpeg" width="100%" class="clickable" id="img16" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
       
        <div class="arrastrable" draggable="true">
          <img src="img/boda7.jpeg" width="100%" class="clickable" id="img18" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda8.jpeg" width="100%" class="clickable" id="img19" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda9.jpeg" width="100%" class="clickable" id="img20" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda10.jpeg" width="100%" class="clickable" id="img21" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda11.png" width="100%" class="clickable" id="img22" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/boda12.jpeg" width="100%" class="clickable" id="img23" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img1.jpg" width="100%" class="clickable" id="img1" style="cursor:pointer;height: 115px;background-size: cover;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img2.jpg" width="100%" class="clickable" id="img2" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img3.jpg" width="100%" class="clickable" id="img3" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img4.jpg" width="100%" class="clickable" id="img4" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img5.jpg" width="100%" class="clickable" id="img5" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
          <div class="arrastrable" draggable="true">
          <img src="img/img1.jpg" width="100%" class="clickable" id="img6" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img2.jpg" width="100%" class="clickable" id="img7" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img3.jpg" width="100%" class="clickable" id="img8" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img4.jpg" width="100%" class="clickable" id="img9" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img5.jpg" width="100%" class="clickable" id="img10" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/real.png" width="100%" class="clickable" id="img11" style="cursor:pointer;height: 115px;background-size: cover;"/>
        </div>
      </div>

      <div class="col-sm-4">
        <div id="page1" style="width:100%;height: 325px;background-color: #9A9D9C;margin:10px 10px 0 0 ;display: none;"></div>


      </div>



      <div class="col-sm-4" style="padding-right: 0px !important;padding-left: 0px !important;">

      

 <script>
  $(function() {
   // $( "#draggable" ).draggable();
  });
  </script>


<script type="text/javascript">

    var header;
    var wrapper
    var incrementoImagen=0;
    var valorwrapper;

  

     

      $("#insertTexto").click(function(){

            incrementoImagen=incrementoImagen+1;

            $("#padre"+incremento).append('<div id="draggable'+incrementoImagen+'" class="ui-widget-content draggable"><iconify-icon icon="entypo:erase" style="float:right;cursor:pointer;color:red;" class="eliminaText" id="'+incrementoImagen+'"></iconify-icon><textarea  class="campotransparente" rows="1" id="colorText'+incrementoImagen+'"  style="font-size: 20px;resize: none;border-style: none;text-align: center;" placeholder="Añade Texto"></textarea></div>');

            $( "#draggable"+incrementoImagen).draggable();


             $(".eliminaText").click(function(){

              idText= $(this).attr("id");


               $( "#draggable"+idText).remove();


            });

               $("#colorText"+incrementoImagen).click(function(){

                 colorText= $(this).attr("id");

                // alert(colorText);



            });


      });




  

    function onDrag({movementX, movementY}){
      let getStyle = window.getComputedStyle(wrapper);
      let leftVal = parseInt(getStyle.left);
      let topVal = parseInt(getStyle.top);
      wrapper.style.left = `${leftVal + movementX}px`;
      wrapper.style.top = `${topVal + movementY}px`;
    }








  </script>
        <div id="contenedorpages">

         
         <!--div class="zona-de-soltar fondo" style="width:100%;height:100px;border: 1;background-color: #fff;text-align: center;">
           <div class="row">
            <div class="col-sm-1 punteado" style="padding:10px;">

                  <div class="zona-de-soltar" style="height:10px !important;"></div>
            </div>

            <div class="col-sm-1 punteado" style="padding:10px;">

                <div class="zona-de-soltar" style="height:10px !important;"></div>
            </div>

          </div>

          <div class="row">
            <div class="col-sm-1 punteado" style="padding:10px;">

                  <div class="zona-de-soltar" style="height:10px !important;"></div>
            </div>

            <div class="col-sm-1 punteado" style="padding:10px;">

                <div class="zona-de-soltar" style="height:10px !important;"></div>
            </div>

          </div>

        </div-->



      </div>



         <!--div class="zona-de-soltar fondo" style="width:100%;height:500px;border: 1;background-color: #fff;text-align: center;">
           <div class="row">
            <div class="col-sm-6 punteado" style="padding:20px;">

                  <div class="zona-de-soltar"></div>
            </div>

            <div class="col-sm-6 punteado" style="padding:20px;">

                <div class="zona-de-soltar"></div>
            </div>

          </div>

          <div class="row">
            <div class="col-sm-6 punteado" style="padding:20px;">

                  <div class="zona-de-soltar"></div>
            </div>

            <div class="col-sm-6 punteado" style="padding:20px;">

                <div class="zona-de-soltar"></div>
            </div>

          </div>

        </div-->

          <nav aria-label="Page navigation example" style="display:none;" id="paginador">
            <ul class="pagination">
              <!--li class="page-item"><a class="page-link" href="#">Atrás</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Siguiente</a></li-->
            </ul>
          </nav>



    </div>

    <div class="col-sm-1">

        <div id="cont-mini"></div>
    </div>

  </div>



  <!-- The Modal para mostrar controles de imagen-->
<div class="modal" id="modalImagenes" role="dialog" style="margin-top:0px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1">
  <div class="modal-dialog" style="width:250px;float: right;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Herramientas de Imagen <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
            <label>Brillo <iconify-icon icon="ph:sparkle" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="brillo" id="brillo" value="200" style="width:200px;">


            <label>Contraste <iconify-icon icon="material-symbols:contrast" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="contraste" id="contraste" value="90" style="width:200px;">



            <label>Difuminar <iconify-icon icon="fluent-mdl2:blur" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="difuminar" id="difuminar" value="0" style="width:200px;">


            <label>Opacidad <iconify-icon icon="mdi:opacity" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="opacidad" id="opacidad" value="100" style="width:200px;">


            <label>Sepia <iconify-icon icon="mdi:theme-light-dark" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="sepia" id="sepia" value="0" style="width:200px;">

            <label>Agrega un Marco de color</label>
            <input type="color" id="colorMarco" style="width:25px;height: 25px;">
            <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>

            <label>Grosor de marco <iconify-icon icon="fluent-mdl2:line-thickness" style="font-size: 24px;"></iconify-icon></label>
            <input type="range" name="grosorM" id="grosorM" value="0" style="width:200px;">


            <label>Rotar<iconify-icon icon="fluent-mdl2:line-thickness" style="font-size: 24px;"></iconify-icon></label>
            <input type="range" name="rotar" id="rotar" value="-360" style="width:200px;">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!----Modal de inicio -->

<div class="modal" id="cargarImagenes" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" style="margin-top:100px;">
  <div class="modal-dialog" style="width:300px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Carga tus Imágenes</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

          <div class="card">
            <div class="card-body">
             <form method='post' action='' enctype="multipart/form-data">
               <input type="file" id='files' name="files[]" multiple><br>
              
            </form>
              <button type="button" class="btn btn-default"><img src="img/logos_carga/facebook.png" width="60"></button>
              <button type="button" class="btn btn-default"><img src="img/logos_carga/instagram.jpg" width="60"></button>
              <button type="button" class="btn btn-default"><img src="img/logos_carga/local.jpg" width="57"></button>

              
              
            </div>
          </div>
         
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!--button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button-->
      </div>

    </div>
  </div>
</div>




<!----Modal para recortar-->

<div class="modal" id="recortarImagenes" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" style="margin-top:100px;">
  <div class="modal-dialog" style="width:400px;float: right;">
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







</body>

</html>
