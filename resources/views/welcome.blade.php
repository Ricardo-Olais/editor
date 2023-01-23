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

  <script type="text/javascript">
  
  var elementoArrastrado;

   var identificadorImg;

   var el_color4 = "#ff0000";

 
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
          event.target.style.background = "";


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

        //  alert("entra");

        

         elementoArrastrado.parentNode.removeChild( elementoArrastrado );

         
          nuevo="<div class='arrastrable' draggable='true'><img src='img/img1.jpg' width='100%' class='zoom' style='opacity: 1;'></div>";

        $(document).ready(function(){

           console.log(elementoArrastrado);
        
          $("#imagenes-album").append(nuevo);


        });


          // y lo agrega al elemento de destino





          event.target.appendChild(elementoArrastrado );
      }
    
  }, false);

</script>

<script type="text/javascript">
  
$(document).ready(function(){

  var el_color = "#208D5E";
  var el_color2 = "#ff0000";
  var el_color3 = "#ff0000";

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

  $("#comment").css("color",el_color3);

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

  background-image: url("img/fondo5.jpg");





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
    height: 200px;
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



box-shadow: 0 0 20px rgba(0, 0, 0, .8);
-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .8);
-moz-box-shadow: 0 0 20px rgba(0, 0, 0, .8);
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

  background-color: #337ab7 !important;
}

/*#modalImagenes{
    background:transparent !important;

}*/

.modal-backdrop
{
    opacity:0 !important;
}
</style>
  

<script type="text/javascript">
  
   $(document).ready(function(){


      $("#insertTexto").click(function(){

          $("#text1").css("display","");

      });


      $("#tipoLetra").change(function(){

        var letra=$(this).val();

        $("#comment").css("font-family",letra);


        //font-family:

      });

      $("#tamanioLetra").change(function(){

        var tamanio=$(this).val();

    
        //document.getElementById("comment").style.fontSize =tamanio;

       $("#comment").css("font-size",tamanio+"px");


        //font-family:

      });

      var incremento=0;
      var decremento=0;

      var incrementoAux=0;


      $("#agregar").click(function(){



        if(incremento>0){

          resta=incremento-1;

          $("#padre"+incremento).css("display","none");

          $("#hijo"+incremento).removeClass("fondoMini");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;


        $("#contenedorpages").append('<div class="zona-de-soltar fondo" style="width:100%;height:500px;border: 1;background-color: #fff;text-align: center;" id="padre'+incremento+'"><div class="row"><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div></div><div class="row"><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div></div></div>');

        
        $("#cont-mini").append('<div class="fondoA" style="width:100%;height:100px;border: 1;background-color: #000;text-align: center;border:1;margin-top:10px;cursor:pointer;color:#fff;border-radius:15px;" id="hijo'+incremento+'"><img src="img/relleno.jpg" style="width:50px;">Página '+incremento+' <iconify-icon icon="mdi:alpha-x-circle-outline" style="font-size:20px;color:red;cursor:pointer;"></iconify-icon></div>');

        $("#hijo"+incremento).addClass("fondoMini");




     



      });

      var plantillaOk="";
      $("#id_select2_example").change(function(){

        valor=$(this).val();

         if(incremento>0){

          resta=incremento-1;

          $("#padre"+incremento).css("display","none");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;

       

        switch (valor) {
              case 'plantilla1':
                plantillaOk = '<div class="zona-de-soltar fondo" style="width:100%;height:500px;border: 1;background-color: #fff;text-align: center;" id="padre'+incremento+'"><div class="row"><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div></div><div class="row"><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div><div class="col-sm-6 punteado" style="padding:20px;"><div class="zona-de-soltar"></div></div></div></div>';
                break;
              case 'plantilla2':
                plantillaOk = "otra plantilla";
                break;
              case 'plantilla3':
                 plantillaOk = "otra plantilla";
                break;
             
        }


        $("#contenedorpages").append(plantillaOk);

        $("#cont-mini").append('<div class="fondoA" style="width:100%;height:100px;border: 1;background-color: #000;text-align: center;border:1;margin-top:10px;cursor:point;color:#fff;" id="hijo'+incremento+'"><img src="img/relleno.jpg" style="width:50px;">Página '+incremento+'</div>');



        // alert(plantillaOk);







      });



      $("#atras").click(function(){

        //alert(incremento);

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

           
     
      });

      $("#next").click(function(){

           incremento=incremento+1;
           decremento=incremento-1;



           if ( $("#padre"+incremento).length > 0 ) {

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




$('.clickable').click(function() {
       
        
        identificadorImg=this.id;

       $('#modalImagenes').modal('show');
 
  });





  


  


  });

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
        <button type="button" class="btn">
        <iconify-icon icon="material-symbols:save" style="font-size: 24px;"></iconify-icon>


      </button>

      <button type="button" class="btn">
        <iconify-icon icon="fluent:screen-cut-20-filled" style="font-size: 24px;"></iconify-icon>
      </button>
      <button type="button" class="btn">
        <iconify-icon icon="material-symbols:content-copy-outline-rounded" style="font-size: 24px;"></iconify-icon>
      </button>
      <button type="button" class="btn">
        <iconify-icon icon="uil:import" style="font-size: 24px;"></iconify-icon>
      </button>
      <button type="button" class="btn" id="insertTexto">
        <iconify-icon icon="material-symbols:insert-text" style="font-size: 24px;"></iconify-icon>
      </button>

       <button type="button" class="btn">
        <iconify-icon icon="material-symbols:image" style="font-size: 24px;"></iconify-icon>
      </button>
     
      <button type="button" class="btn" id="imprimir">
        <iconify-icon icon="mdi:printer-preview" style="font-size: 24px;"></iconify-icon>
      </button>
    
      <button type="button" class="btn">
        <input type="color" id="colorFondo" style="width:25px;height: 25px;">
        <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>
      </button>
      <button type="button" class="btn">
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

       <input type="color" id="colorLetra" style="width:25px;height: 25px;">
        <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon>


         <iconify-icon icon="carbon:text-font" style="font-size: 24px;"></iconify-icon>
         
    </button>

    <button type="button" class="btn" id="atras">
        <iconify-icon icon="icon-park:back-one" style="font-size: 24px;"></iconify-icon>
    </button>
   <button type="button" class="btn" id="agregar">
        <iconify-icon icon="material-symbols:add-box-outline-rounded" style="font-size: 24px;"></iconify-icon>
   </button>
    <button type="button" class="btn" id="next">
        <iconify-icon icon="material-symbols:navigate-next" style="font-size: 24px;"></iconify-icon>
      </button>

<button type="button" class="btn">

  <label>Plantilla</label>
  <select id="id_select2_example" style="width:150px;">
    <option>Seleccionar</option>
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
      <div class="col-sm-1" style="background-color:black;" id="imagenes-album">
        <div class="arrastrable" draggable="true">
          <img src="img/img1.jpg" width="100%" class="zoom clickable" id="img1" style="cursor:pointer;" />
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img2.jpg" width="100%" class="zoom clickable" id="img2" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img3.jpg" width="100%" class="zoom clickable" id="img3" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img4.jpg" width="100%" class="zoom clickable" id="img4" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img5.jpg" width="100%" class="zoom clickable" id="img5" style="cursor:pointer;"/>
        </div>
          <div class="arrastrable" draggable="true">
          <img src="img/img1.jpg" width="100%" class="zoom clickable" id="img6" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img2.jpg" width="100%" class="zoom clickable" id="img7" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img3.jpg" width="100%" class="zoom clickable" id="img8" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img4.jpg" width="100%" class="zoom clickable" id="img9" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/img5.jpg" width="100%" class="zoom clickable" id="img10" style="cursor:pointer;"/>
        </div>
        <div class="arrastrable" draggable="true">
          <img src="img/real.png" width="100%" class="zoom clickable" id="img11" style="cursor:pointer;"/>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-1">

         <div class="wrapper" id="text1" style="display: none;"><!--para mover e insertar texto-->
              <header>
                <textarea  class="form-control campotransparente" rows="2" id="comment" style="font-size: 20px;resize: none;border-style: none;text-align: center;" placeholder="Añade Texto"></textarea>
          </header>
            
          </div>

         


<script type="text/javascript">


    const wrapper = document.querySelector(".wrapper"),
    header = wrapper.querySelector("header");

    function onDrag({movementX, movementY}){
      let getStyle = window.getComputedStyle(wrapper);
      let leftVal = parseInt(getStyle.left);
      let topVal = parseInt(getStyle.top);
      wrapper.style.left = `${leftVal + movementX}px`;
      wrapper.style.top = `${topVal + movementY}px`;
    }

    header.addEventListener("mousedown", ()=>{
      header.classList.add("active");
      header.addEventListener("mousemove", onDrag);
    });

    document.addEventListener("mouseup", ()=>{
      header.classList.remove("active");
      header.removeEventListener("mousemove", onDrag);
    });
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





    </div>

    <div class="col-sm-1">

        <div id="cont-mini"></div>
    </div>

  </div>



  <!-- The Modal para mostrar controles de imagen-->
<div class="modal" id="modalImagenes" role="dialog" style="margin-top:0px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1">
  <div class="modal-dialog" style="width:300px;float: right;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Herramientas de Imagen <iconify-icon icon="ic:baseline-color-lens" style="font-size: 24px;"></iconify-icon></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
            <label>Brillo <iconify-icon icon="ph:sparkle" style="font-size: 20px;"></iconify-icon></label>
            <input type="range" name="brillo" id="brillo" value="100" style="width:200px;">


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




</body>

</html>
