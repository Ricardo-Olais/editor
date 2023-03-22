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
  <script src="{{ URL::to('/') }}/js/jquery.flippage.min.js"></script>
  <script src="{{ URL::to('/') }}/js/html2canvas.js"></script>

 
  <link href="{{ URL::to('/') }}/css/jquery.flippage.css" type="text/css" rel="stylesheet" />
  <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/js/cropper.min.js"></script>
  <link rel="stylesheet" href="https://parzibyte.github.io/ejemplos-javascript/recortar-imagen/css/cropper.min.css">

  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script-->
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="{{ URL::to('/') }}/js/jquery.blockUI.production.js"></script>



<script type="text/javascript">
  
  $(document).ready(function(){

      /*$.blockUI({ css: {border: 'none','z-index': '5000',padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '10px','-moz-border-radius': '10px',opacity: 1, color: '#fff'} }); setTimeout($.unblockUI, 3000); */


  });


</script>



  <script type="text/javascript">
  
  var elementoArrastrado;

   var identificadorImg;

   var incremento=0;

   var el_color4 = "#ff0000";

   var colorText;

   var urlRaiz="{{ URL::to('/') }}";




    var tipo="{{ $type }}";

    var jr;


   

 
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
       if ( event.target.className == "zona-de-soltar" || event.target.className=="zona-de-soltar areacentro" || event.target.className=="zona-de-soltar area1plantilla1" || event.target.className=="zona-de-soltar area2plantilla1" || event.target.className=="zona-de-soltar area3plantilla1" || event.target.className=="zona-de-soltar area1plantilla2" || event.target.className=="zona-de-soltar area1plantilla3" || event.target.className=="zona-de-soltar area2plantilla3" || event.target.className=="zona-de-soltar area3plantilla3" || event.target.className=="zona-de-soltar area1plantilla4" || event.target.className=="zona-de-soltar area2plantilla4" || event.target.className=="zona-de-soltar area1plantilla5" || event.target.className=="zona-de-soltar area2plantilla5" || event.target.className=="zona-de-soltar area1plantilla10" || event.target.className=="zona-de-soltar area2plantilla10" || event.target.className=="zona-de-soltar area1plantilla11" || event.target.className=="zona-de-soltar area2plantilla11" || event.target.className=="zona-de-soltar area1plantilla12" || event.target.className=="zona-de-soltar area2plantilla12" || event.target.className=="zona-de-soltar area3plantilla12" || event.target.className=="zona-de-soltar area1plantilla13" || event.target.className=="zona-de-soltar area2plantilla13" || event.target.className=="zona-de-soltar area3plantilla13" || event.target.className=="zona-de-soltar area4plantilla13" || event.target.className=="zona-de-soltar area1plantilla14" || event.target.className=="zona-de-soltar area2plantilla14" || event.target.className=="zona-de-soltar area1plantilla15" || event.target.className=="zona-de-soltar area2plantilla15" || event.target.className=="zona-de-soltar area3plantilla15" || event.target.className=="zona-de-soltar area1plantilla16" || event.target.className=="zona-de-soltar area2plantilla16") { //area1plantilla16
        // y di lo és cambia el color de fondo
          event.target.style.background = "#CED2D1";

          //console.log(event.target.style.height);


      }

  }, false);

  document.addEventListener("dragleave", function( event ) {
      // comprueba si el event.target es una zona de soltar  
         if ( event.target.className == "zona-de-soltar" || event.target.className=="zona-de-soltar areacentro" || event.target.className=="zona-de-soltar area1plantilla1" || event.target.className=="zona-de-soltar area2plantilla1" || event.target.className=="zona-de-soltar area3plantilla1" || event.target.className=="zona-de-soltar area1plantilla2" || event.target.className=="zona-de-soltar area1plantilla3" || event.target.className=="zona-de-soltar area2plantilla3" || event.target.className=="zona-de-soltar area3plantilla3" || event.target.className=="zona-de-soltar area1plantilla4" || event.target.className=="zona-de-soltar area2plantilla4" || event.target.className=="zona-de-soltar area1plantilla5" || event.target.className=="zona-de-soltar area2plantilla5" || event.target.className=="zona-de-soltar area1plantilla10" || event.target.className=="zona-de-soltar area2plantilla10" || event.target.className=="zona-de-soltar area1plantilla11" || event.target.className=="zona-de-soltar area2plantilla11" || event.target.className=="zona-de-soltar area1plantilla12" || event.target.className=="zona-de-soltar area2plantilla12" || event.target.className=="zona-de-soltar area3plantilla12" || event.target.className=="zona-de-soltar area1plantilla13" || event.target.className=="zona-de-soltar area2plantilla13" || event.target.className=="zona-de-soltar area3plantilla13" || event.target.className=="zona-de-soltar area4plantilla13" || event.target.className=="zona-de-soltar area1plantilla14" || event.target.className=="zona-de-soltar area2plantilla14" || event.target.className=="zona-de-soltar area1plantilla15" || event.target.className=="zona-de-soltar area2plantilla15" || event.target.className=="zona-de-soltar area3plantilla15" || event.target.className=="zona-de-soltar area1plantilla16" || event.target.className=="zona-de-soltar area2plantilla16") {  //
        // y si lo és, reestablece el valor inicial
          event.target.style.background = "";

      }
  }, false);

  var app = document.querySelector('#imagenes-album');

  document.addEventListener("drop", function( event ) {
      // Si el elemento arrastrado es un link, este se abre en una nueve página.
      // Para que esto no pase hay que utilizar: 
      event.preventDefault();

     // alert(event.target.className);
      // comprueba si el event.target es una zona de soltar
     if ( event.target.className == "zona-de-soltar" || event.target.className=="zona-de-soltar areacentro" || event.target.className=="zona-de-soltar area1plantilla1" || event.target.className=="zona-de-soltar area2plantilla1" || event.target.className=="zona-de-soltar area3plantilla1" || event.target.className=="zona-de-soltar area1plantilla2" || event.target.className=="zona-de-soltar area1plantilla3" || event.target.className=="zona-de-soltar area2plantilla3" || event.target.className=="zona-de-soltar area3plantilla3" || event.target.className=="zona-de-soltar area1plantilla4" || event.target.className=="zona-de-soltar area2plantilla4" || event.target.className=="zona-de-soltar area1plantilla5" || event.target.className=="zona-de-soltar area2plantilla5" || event.target.className=="zona-de-soltar area1plantilla10" || event.target.className=="zona-de-soltar area2plantilla10" || event.target.className=="zona-de-soltar area1plantilla11" || event.target.className=="zona-de-soltar area2plantilla11" || event.target.className=="zona-de-soltar area1plantilla12" || event.target.className=="zona-de-soltar area2plantilla12" || event.target.className=="zona-de-soltar area3plantilla12" || event.target.className=="zona-de-soltar area1plantilla13" || event.target.className=="zona-de-soltar area2plantilla13" || event.target.className=="zona-de-soltar area3plantilla13" || event.target.className=="zona-de-soltar area4plantilla13" || event.target.className=="zona-de-soltar area1plantilla14" || event.target.className=="zona-de-soltar area2plantilla14" || event.target.className=="zona-de-soltar area1plantilla15" || event.target.className=="zona-de-soltar area2plantilla15" || event.target.className=="zona-de-soltar area3plantilla15" || event.target.className=="zona-de-soltar area1plantilla16" || event.target.className=="zona-de-soltar area2plantilla16") {
          // reestablece el valor inicial para el background
         
          event.target.style.background = "";

          event.target.style.border = "";
          // elimina el elemento arrastrado del del elemento padre

         // console.log(event.target);


        // elementoArrastrado.parentNode.removeChild( elementoArrastrado );

        // console.log(event.target);

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

  background-color: #8ADCDC !important;
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

 button.btn-settings {
  margin: 25px;
  padding: 20px 30px;
  font-size: 1.2em;
  background-color: #337ab7;
  color: white;
}
button.btn-settings:active {
  color: white;
}
.modal {
    overflow: hidden;
}

.modal-header {
  height:30px;
  padding: 20px;
  background-color:#000;
  color:white;
}
.modal-title {
  margin-top:-10px;
  font-size:16px;
}
.modal-header .close {
  margin-top:-10px;
  color:#fff;
}
.modal-body {
  color:#888;
  padding: 5px 35px 20px;
}
.modal-body h3 {
  text-align: center;
}
.modal-body p {
  padding-top:10px;
  font-size: 1.1em;
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
  
   $(document).ready(function(){


    function toggleZoomScreen() {
        document.body.style.zoom = "90%";
    }


    toggleZoomScreen();


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

      var validadPages={{ $pages }};

      //alert(validadPages);


      
      var decremento=0;

      var incrementoAux=0;

      var myTimeout = setTimeout(myGreeting, 2000);

      function myGreeting() {
          
            for(i=0;i<validadPages;i++){

              //alert(i);
              $("#agregar")[0].click();

              validad=i+1;

             // console.log(validadPages);


               if(validad==validadPages){

                reversa();
               }

            }
        }


       function reversa() {
        
            var i = validadPages;
            while (i--) {
                
                if(i>0){

                  $("#atras")[0].click();

                 // console.log(i);
                }
                
            }
        }






    

      $("#vistasPrevias").append("<td style='padding-left:10px;padding:5px;cursor:pointer;' id='vistaPotada' class='vistasPortadavscontra'><img src='"+urlRaiz+"/img/libro_pag2.jpg' width=30><br><center><b style='text-align:center;'>Portada</b></center></td>");


      $("#vistaPotada").click(function(){

          $("#element-to-print-portada").css("display","");
          $("#element-to-print").css("display","none");


      });

     





      $("#agregar").click(function(){

       // alert(incremento);

      
        if(incremento>0){

           $("#atras").prop( "disabled", false);

          
          resta=incremento-1;

          $("#cuadrado"+incremento).css("display","none");
        //  $("#padre"+incremento).css("display","none");
         // $("#page1").css("display","none");

          $("#hijo"+incremento).removeClass("fondoMini");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;


        if(incremento==1){

          //$("#page1").css("display","");
        }


        if(tipo=="c"){

        $(".inicial").append("<div id= 'cuadrado"+incremento+"' class= 'trabajo '><div class= 'zona-de-soltar'></div>Página "+incremento+"</div>");

        }

        if(tipo=="v"){

        $(".inicial").append("<div id= 'cuadrado"+incremento+"' class= 'trabajoVertical'><div class= 'zona-de-soltar-vertical'></div>Página "+incremento+" Vertical</div>");

        }


          if(tipo=="h"){

        $(".inicial").append("<div id= 'cuadrado"+incremento+"' class= 'trabajoHorizontal'><div class= 'zona-de-soltar-horizontal'></div>Página "+incremento+" horizontal</div>");

        }


          if(incremento==validadPages){

            $("#vista"+1).addClass("fondoMini");
            


          }

          $("#vistasPrevias").append("<td style='padding-left:10px;padding:5px;cursor:pointer;' id='vista"+incremento+"' class='vistasp'><img src='"+urlRaiz+"/img/hoja.png' width=30 ><br><center><b style='text-align:center;'>"+incremento+"</b></center></td>");


            $(".vistasp").click(function(){

         

          $("#element-to-print-portada").css("display","none");
          $("#element-to-print").css("display","");


      });

             

        


      });


    



     $("#id_select2_example2").change(function(){

         var imgfondo=$(this).val();
        // alert(imgfondo);
         $(".trabajo").css("background-image","url("+imgfondo+")");
         $(".trabajo").css("background-size","cover");
         //alert(incremento);

      });


     $("#id_select2_example3").change(function(){

         var idm=$(this).val();


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

         //$("#img0").addClass("mascara1");

         /*
          .two {
            -webkit-mask-image: url('2.png');
            mask-image: url('2.png');

          }
         */

        // alert(imgfondo);
        /* $(".fondo").css("background-image","url("+imgfondo+")");
         $(".fondo").css("background-size","cover");
         $(".fondo").css("opacity","absolute");
         $(".fondo").css("z-index","2000");*/
         //alert(incremento);

      });



      var plantillaOk="";
      $("#id_select2_example").change(function(){

        valor=$(this).val();

         if(incremento>0){

          resta=incremento-1;

        }





        //alert(valor);

      if(tipo=="c"){

        if(valor=="plantilla1"){
         
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla1" style="width: 60mm;height:50mm;margin-top:25mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -67mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -20mm;border-style: dotted;"></div>');

          }



         if(valor=="plantilla2"){

          $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla2" style="width: 93mm;height:93mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

        

          }

          if(valor=="plantilla4"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla3" style="width: 60mm;height:90mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -90mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -40mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla5"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla4" style="width: 94mm;height:60mm;margin-top:7mm;margin-left: 5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla4" style="width: 40mm;height:40mm;margin-top: -20mm;margin-left: 35mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla6"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla5" style="width: 55mm;height:90mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla5" style="width: 45mm;height:68mm;float: right;margin-top: -80mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla8"){

        
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 100px;margin-left: 100px;border-style:dotted;"></div></div>');


          }


          /* if(valor=="plantilla8"){

            $("#padre"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');

            if(incremento>1){
            $("#padre11"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');
          }

          }*/


          //############ la 9 pendiente


           if(valor=="plantilla10"){

            $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla10" style="width: 49mm;height:90mm;margin-top:7mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 49mm;height:90mm;float: right;margin-top: -90mm;border-style:dotted;"></div>');


          }


           if(valor=="plantilla11"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla11" style="width: 93mm;height:70mm;margin-top:15mm;margin-left: 5mm;border-style: dotted;"></div>');

          

          }


           if(valor=="plantilla12"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla12" style="width: 40mm;height:40mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla12" style="width: 40mm;height:40mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla12" style="width: 60mm;height:90mm;margin-top: -95mm;margin-left:35mm;border-style: dotted;">');

          

          }


            if(valor=="plantilla13"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla13" style="width: 40mm;height:40mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla13" style="width: 40mm;height:40mm;margin-top:1mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla13" style="width: 40mm;height:50mm;margin-top: -81mm;margin-left:55mm;border-style: dotted;"></div><div class="zona-de-soltar area4plantilla13" style="width: 40mm;height:30mm;margin-top:1mm;margin-left:55mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla14"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla14" style="width: 40mm;height:50mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla14" style="width: 40mm;height:50mm;margin-top: -15mm;margin-left:55mm;border-style: dotted;"></div>');

         

          }

            if(valor=="plantilla15"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla15" style="width: 50mm;height:40mm;margin-top:30mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla15" style="width: 37mm;height:40mm;margin-top: -60mm;margin-left:65mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla15" style="width: 37mm;height:40mm;margin-top: 5mm;margin-left:65mm;border-style: dotted;"></div>');

         

          }


          //############# la 16 pendiente

            if(valor=="plantilla17"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla16" style="width: 95mm;height:45mm;margin-top:5mm;margin-left:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla16" style="width: 95mm;height:45mm;margin-top: 5mm;margin-left:5mm;border-style: dotted;"></div>');

          

          }

        }

        //para los verticales

        if(tipo=="v"){

        if(valor=="plantilla1"){
         
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla1" style="width: 60mm;height:60mm;margin-top:25mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -67mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -20mm;border-style: dotted;"></div>');

          }



         if(valor=="plantilla2"){

          $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla2" style="width: 93mm;height:105mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

        

          }

          if(valor=="plantilla4"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla3" style="width: 60mm;height:105mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla3" style="width: 40mm;height:50mm;float: right;margin-top: -105mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla3" style="width: 40mm;height:50mm;float: right;margin-top: -50mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla5"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla4" style="width: 94mm;height:70mm;margin-top:7mm;margin-left: 5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla4" style="width: 40mm;height:40mm;margin-top: -20mm;margin-left: 35mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla6"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla5" style="width: 55mm;height:105mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla5" style="width: 45mm;height:68mm;float: right;margin-top: -90mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla8"){

        
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 120px;margin-left: 100px;border-style:dotted;"></div></div>');


          }


          /* if(valor=="plantilla8"){

            $("#padre"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');

            if(incremento>1){
            $("#padre11"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');
          }

          }*/


          //############ la 9 pendiente


           if(valor=="plantilla10"){

            $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla10" style="width: 49mm;height:105mm;margin-top:7mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 49mm;height:105mm;margin-top: -105mm;border-style:dotted;"></div>');


          }


           if(valor=="plantilla11"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla11" style="width: 93mm;height:90mm;margin-top:15mm;margin-left: 5mm;border-style: dotted;"></div>');

          

          }


           if(valor=="plantilla12"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla12" style="width: 40mm;height:40mm;margin-top:20mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla12" style="width: 40mm;height:40mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla12" style="width: 60mm;height:90mm;margin-top: -95mm;margin-left:35mm;border-style: dotted;">');

          

          }


            if(valor=="plantilla13"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla13" style="width: 40mm;height:50mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla13" style="width: 40mm;height:50mm;margin-top:1mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla13" style="width: 40mm;height:60mm;margin-top: -101mm;margin-left:55mm;border-style: dotted;"></div><div class="zona-de-soltar area4plantilla13" style="width: 40mm;height:40mm;margin-top:1mm;margin-left:55mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla14"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla14" style="width: 40mm;height:60mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla14" style="width: 40mm;height:60mm;margin-top: -25mm;margin-left:55mm;border-style: dotted;"></div>');

         

          }

            if(valor=="plantilla15"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla15" style="width: 50mm;height:50mm;margin-top:30mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla15" style="width: 37mm;height:50mm;margin-top: -70mm;margin-left:65mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla15" style="width: 37mm;height:50mm;margin-top: 2mm;margin-left:65mm;border-style: dotted;"></div>');

         

          }


          //############# la 16 pendiente

            if(valor=="plantilla17"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla16" style="width: 95mm;height:50mm;margin-top:5mm;margin-left:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla16" style="width: 95mm;height:50mm;margin-top: 5mm;margin-left:5mm;border-style: dotted;"></div>');

          

          }

        }//fin de verticales




        //para horizontales

          if(tipo=="h"){

        if(valor=="plantilla1"){
         
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla1" style="width: 70mm;height:75mm;margin-top:15mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla1" style="width: 50mm;height:40mm;float: right;margin-top: -80mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla1" style="width: 50mm;height:40mm;float: right;margin-top: -32mm;border-style: dotted;"></div>');

          }



         if(valor=="plantilla2"){

          $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla2" style="width:113mm;height:93mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

        

          }

          if(valor=="plantilla4"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla3" style="width: 70mm;height:90mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla3" style="width: 45mm;height:45mm;float: right;margin-top: -90mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla3" style="width: 45mm;height:45mm;float: right;margin-top: -43mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla5"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla4" style="width: 113mm;height:70mm;margin-top:7mm;margin-left: 5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla4" style="width: 40mm;height:40mm;margin-top: -20mm;margin-left: 42mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla6"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla5" style="width: 55mm;height:90mm;margin-top:7mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla5" style="width: 45mm;height:68mm;float: right;margin-top: -80mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla8"){

        
            $("#cuadrado"+incremento).html('<div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 110px;margin-left: 145px;border-style:dotted;"></div></div>');


          }


          /* if(valor=="plantilla8"){

            $("#padre"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');

            if(incremento>1){
            $("#padre11"+incremento).html('<div class="row"><center><div class="col-sm-12"><div class="zona-de-soltar" style="height:180px;margin-top:10px;border-style:dotted;margin:auto;width:50%;margin:26%"></div></div></div>');
          }

          }*/


          //############ la 9 pendiente


           if(valor=="plantilla10"){

            $("#cuadrado"+incremento).html(' <div class="zona-de-soltar area1plantilla10" style="width: 60mm;height:93mm;margin-top:7mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 60mm;height:93mm;margin-top: -93mm;border-style:dotted;"></div>');


          }


           if(valor=="plantilla11"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla11" style="width: 113mm;height:93mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

          

          }


           if(valor=="plantilla12"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla12" style="width: 40mm;height:40mm;margin-top:5mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla12" style="width: 40mm;height:40mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla12" style="width: 60mm;height:93mm;margin-top: -90mm;margin-left:60mm;border-style: dotted;">');

          

          }


            if(valor=="plantilla13"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla13" style="width: 40mm;height:50mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla13" style="width: 40mm;height:50mm;margin-top:1mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla13" style="width: 40mm;height:60mm;margin-top: -101mm;margin-left:55mm;border-style: dotted;"></div><div class="zona-de-soltar area4plantilla13" style="width: 40mm;height:40mm;margin-top:1mm;margin-left:55mm;border-style: dotted;"></div>');


          }


           if(valor=="plantilla14"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla14" style="width: 40mm;height:60mm;margin-top:10mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla14" style="width: 40mm;height:60mm;margin-top: -25mm;margin-left:55mm;border-style: dotted;"></div>');

         

          }

            if(valor=="plantilla15"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla15" style="width: 50mm;height:50mm;margin-top:30mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla15" style="width: 37mm;height:50mm;margin-top: -70mm;margin-left:65mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla15" style="width: 37mm;height:50mm;margin-top: 2mm;margin-left:65mm;border-style: dotted;"></div>');

         

          }


          //############# la 16 pendiente

            if(valor=="plantilla17"){

            $("#cuadrado"+incremento).html('<div class="zona-de-soltar area1plantilla16" style="width: 95mm;height:50mm;margin-top:5mm;margin-left:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla16" style="width: 95mm;height:50mm;margin-top: 5mm;margin-left:5mm;border-style: dotted;"></div>');

          

          }

        }//fin de verticales




          





          
     


      });

      



      $("#atras").click(function(){

        


        if(incremento>1){

          $("#next").prop( "disabled", false);
         // $("#next").attr("disabled",false);
          //$(this).attr("disabled",false);
          $("#cuadrado"+incremento).css("display","none");
          
          $("#vista"+incremento).removeClass("fondoMini");

             incremento=incremento-1;
            $("#cuadrado"+incremento).css("display","");
           // $("#padre"+incremento).css("display","");

            

            $("#vista"+incremento).addClass("fondoMini");



        }else{
         // $(this).attr("disabled",true);

        }
        if(incremento==1){

          
          $("#atras").prop( "disabled", true);

         // $("#page1").css("display","");
        }
       

           
     
      });

      $("#next").click(function(){

           incremento=incremento+1;
           decremento=incremento-1;



           $("#atras").prop( "disabled", false);



           if ( $("#cuadrado"+incremento).length > 0 ) {


                
               // $("#page1").css("display","none");
                 $("#cuadrado"+incremento).css("display","");

                 $("#vista"+incremento).addClass("fondoMini");
                 
                 
                 
                  $("#cuadrado"+decremento).css("display","none");


                  $("#vista"+decremento).removeClass("fondoMini");

            }

            //alert(incrementoAux+"  ---  "+incremento);

            if((incrementoAux-1)==incremento){

               $("#next").prop( "disabled", true);
         
            }else{

                $("#next").prop( "disabled", false);
            }


           

     
      });


       $(".fondoA").click(function(){


           id= $(this).attr("id");

           alert(id);


           // $("#padre"+incremento).css("display","");


     
      });


      let $modal = $("#recortarImagenes");
        $modal.draggable({
          handle: ".modal-header",
          cursor: 'move'
        });
        //$modal.resizable();


    

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
            template = $("<div><img src='"+ img_src +"' width=90 style='text-align:center;padding-top:4px;border: 1px solid #000;'>" + text + "</p></div>");
            return template;
          }
        }
  var options = {
    'templateSelection': custom_template,
    'templateResult': custom_template,
  }


  $('#id_select2_example').select2(options);
  $('.select2-container--default .select2-selection--single').css({'height': '40px'});

 
  $('#id_select2_example2').select2(options);
  $('.select2-container--default .select2-selection--single').css({'height': '40px'});

  $('#id_select2_example3').select2(options);
  $('.select2-container--default .select2-selection--single').css({'height': '40px'});

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


    var url;

  $("#local").click(function(){


    $("#files").trigger("click");

      ///alert("hola");


  });




  

  function convierte64(img){

    return new Promise((resolve, _) => {
    const reader = new FileReader();
    reader.onloadend = () => resolve(reader.result);
    reader.readAsDataURL(img);


    console.log(reader.result);

    return reader.result;
  });
  }


  var reader;
  var base64data;
  var valorImg;
  function getBase64(file,jr) {
         var reader = new FileReader();
         reader.readAsDataURL(file);
         reader.onload = function () {
            valorImg=reader.result;

            console.log(valorImg);

           $("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+valorImg+'" width="100%" class="clickable"  style="cursor:pointer;object-fit:cover;width:100%;height:100%;" id="img'+jr+'"/></div>');


           $('.clickable').dblclick(function() {
       
        
            identificadorImg=this.id;

           // alert(identificadorImg);

           $('#modalImagenes').modal('show');
 
            });

                   var src;
//para el control de recortar
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

           
         };
         reader.onerror = function (error) {
           console.log('Error: ', error);
         };



        return valorImg;
}




  $("input[name=file1]").change(function() {
            var names = [];
           
            for (jr = 0; jr < $(this).get(0).files.length; ++jr) {

               //blob= URL.createObjectURL($(this).get(0).files[i]);

                getBase64($(this).get(0).files[jr],jr); // prints the base64 string


                 



               /*$("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+url+'" width="100%" class="clickable"  style="cursor:pointer;object-fit:cover;width:100%;height:100%;" id="img'+i+'"/></div>');*/




              /* reader = new FileReader();
               reader.readAsDataURL($(this).get(0).files[i]);

               //console.log(reader); 


                  reader.onloadend = function() {
                    base64data = reader.result;        
                    console.log(base64data);

                    $("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+base64data+'" width="100%" class="clickable"  style="cursor:pointer;object-fit:cover;width:100%;height:100%;" id="img'+i+'"/></div>');



                 }*/

      
         
            }


        /*$('.clickable').dblclick(function() {
       
        
            identificadorImg=this.id;

           // alert(identificadorImg);

           $('#modalImagenes').modal('show');
 
        });*/


        //click para recortar

         /* var src;
//para el control de recortar
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
}); */





      //fin de click para recortar
});









var idSelec;
window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
   };

 


    //$('#cargarImagenes').modal('show'); //para la carga de imagenes


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

 /* var doc = new jsPDF("p", "mm", "a4");

  var width = doc.internal.pageSize.width;
  var height = doc.internal.pageSize.height;

console.log(width);*/


function getPDF() {

   

    var element= document.getElementById("contenedorpages");

   var opt = {
            margin: [0, 0, 30, 0], //top, left, buttom, right,
            filename: 'albumSmart.pdf',
            image: {type: 'jpeg',quality: 0.98},
            html2canvas: {dpi: 300, scale: 1, letterRendering: true},
            pagebreak: {mode: 'avoid-all'},
            jsPDF: {unit: 'pt', format: 'tabloid', orientation: 'portrait'}
        };
        var worker = html2pdf();
        
            console.log(worker);
            worker.set(opt)
                  .from(element)
                  .toPdf()
                  .get('pdf')
                  .then(function (doc) {
                      var totalPages = doc.internal.getNumberOfPages();
                      for (var i=1; i<=totalPages; i++) {
                          if (i > 1) {
                            doc.setPage(i);
                            //?????
                          }
                      }
        
                 }).save();

    
}



 $("#imprimir").click(function(){

     getPDF();

    // $(".fondo").css("display","");
  
   /* var pdf = new jsPDF('p', 'pt', 'letter');

    $(".fondo").css("display","");

    var el = document.getElementById("contenedorpages");
     //console.log(el.innerHTML);

       margins = {
            top: 80,
            bottom: 60,
            left: 100,
            width: 522
        };
  

       pdf.addHTML($('#contenedorpages'), function () {
           pdf.save('album.pdf');
           $(".fondo").css("display","none");
       },margins);*/

    /*var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#contenedorpages')[0];

       
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, 
            margins.top, { 
                'width': margins.width
                
            },

            function (dispose) {
                pdf.save('Prueba.pdf');
            }, margins
        );*/
    








    });

  });



</script>


<script type="text/javascript">

$(document).ready(function(){




});


</script>

</head>

<body>

<div class="container" style="width:100% !important;">




  <div class="btn-toolbar" style="margin:auto;text-align: center;">
    <div class="btn-group">
        <img src="{{ URL::to('/') }}/img/fondo1.jpg" width="60">
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

  <!--label>Plantilla</label-->
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
</button>



<button type="button" class="btn">

  <!--label>Imagen de Fondo</label-->
  <select id="id_select2_example2" style="width:150px;">
    <option value="2">Seleccionar</option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/1.jpeg" value="{{ URL::to('/') }}/img/fondos/1.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/2.jpeg" value="{{ URL::to('/') }}/img/fondos/2.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/3.jpeg" value="{{ URL::to('/') }}/img/fondos/3.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/4.jpeg" value="{{ URL::to('/') }}/img/fondos/4.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/5.jpeg" value="{{ URL::to('/') }}/img/fondos/5.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/6.jpeg" value="{{ URL::to('/') }}/img/fondos/6.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/7.jpeg" value="{{ URL::to('/') }}/img/fondos/7.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/8.jpeg" value="{{ URL::to('/') }}/img/fondos/8.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/9.jpeg" value="{{ URL::to('/') }}/img/fondos/9.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/10.jpeg" value="{{ URL::to('/') }}/img/fondos/10.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/11.jpeg" value="{{ URL::to('/') }}/img/fondos/11.jpeg"></option>
    <option data-img_src="{{ URL::to('/') }}/img/fondos/12.jpeg" value="{{ URL::to('/') }}/img/fondos/12.jpeg"></option>
    
  </select>
</button>


<button type="button" class="btn btn-primary" style="margin-top:10px;background-color: black;" id="pdf">Enviar proyecto</button>


<button type="button" class="btn">

  <!--label>Imagen de Fondo</label-->
  
</button>
  </div>









  </div>
</div>



  <div class="container-fluid" style="margin-top:10px;">



    <div class="row">
      <div class="col-sm-1" style="background-color:#F0F0F0;width:150px; height:600px; overflow: scroll;border-radius: 10px;overflow-x: hidden;" id="imagenes-album" ><!--aqui van las imagenes-->

      </div>

      <!--div class="col-sm-10">
         <div id="vistasPreviasPadre" style="width:100%;height:80px;background-color:#F0F3F3;overflow: scroll;border-radius: 10px;overflow-y: hidden;">
           <table><tr id="vistasPrevias"></tr></table>


         </div>
      </div>

      <div class="col-sm-4">
        <div id="page1" style="width: 450;height: 450px;margin:10px 10px 0 0 ;margin-right: -15px;"></div>


      </div-->


     



     

      

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

            $("#cuadrado"+incremento).append('<div id="draggable'+incrementoImagen+'" class="ui-widget-content draggable"><iconify-icon icon="entypo:erase" style="float:right;cursor:pointer;color:red;" class="eliminaText" id="'+incrementoImagen+'"></iconify-icon><textarea  class="campotransparente" rows="1" id="colorText'+incrementoImagen+'"  style="font-size: 20px;resize: none;border-style: none;text-align: center;" placeholder="Añade Texto"></textarea></div>');

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

     <style type="text/css">


 


 .trabajo{

    width: 105mm;
    height: 105mm;
    background-color:#fff;
    border-style:dotted;margin: auto;
    border-color: red;


 }

 .trabajoVertical{
    width: 105mm;
    height: 120mm;
    background-color:#fff;
    border-style:dotted;margin: auto;
    border-color: red;

 }

 .zona-de-soltar-vertical{

   width: 105mm;height:120mm;
  

 }

 .trabajoVertical{
   outline: red solid 1px;
   page-break-inside: avoid;
}

.trabajoHorizontal{

    width: 125mm;
    height: 105mm;
    background-color:#fff;
    border-style:dotted;margin: auto;
    border-color: red;
}


 .zona-de-soltar-horizontal{

   width: 125mm;height:105mm;
  

 }






 .zona-de-soltar{

   width: 105mm;height:105mm;
  

 }

   .trabajo {
   outline: red solid 3mm;
   page-break-inside: avoid;
    }
    #nextpage1 {
      page-break-before: always;
    }

 


</style>


  <script type="text/javascript">

$(document).ready(function(){



function sleepFor(sleepDuration){
    var now = new Date().getTime();
    while(new Date().getTime() < now + sleepDuration){ 
        /* Do nothing */ 
    }
}



$("#pdf").click(function(){


 $('.zona-de-soltar > img').each(function(index, elemento){


    idImagen =  $(elemento).attr("id");

    console.log(index);



    x =  $(elemento).css("left");
    y =  $(elemento).css("top");
    z =  $(elemento).css("z-index");
 
    //alert("Imagen: " + idImagen + " coordenada " + x + "."+y +" Profundidad: " + z);
  });

  //return false;
    



$.blockUI({ css: {border: 'none','z-index': '5000',padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '10px','-moz-border-radius': '10px',opacity: 1, color: '#fff'} }); setTimeout($.unblockUI, 5000); 

//configuraciones de impresión 30 * 30 cuadado pro



var libro="30x30";


if(tipo=="c" && libro=="30x30"){


      $(".trabajo").css("width","293mm");
      $(".trabajo").css("height","290mm");

      $(".zona-de-soltar").css("width","293mm");
      $(".zona-de-soltar").css("height","290mm");

      $(".trabajo").css("display","");



      $(".areacentro").css("width","100mm");
      $(".areacentro").css("height","100mm");
      $(".areacentro").css("margin-top","85mm");
      $(".areacentro").css("margin-left","95mm");

      //#############variables de impresion
      //###plantilla 1

      //width: 150mm; height: 100mm; margin-top: 85mm;margin-left:5mm

      $(".area1plantilla1").css("width","150mm");
      $(".area1plantilla1").css("height","100mm");
      $(".area1plantilla1").css("margin-top","85mm");
      $(".area1plantilla1").css("margin-left","5mm");

      //width: 120mm;height:90mm;float: right;margin-top: -150mm;


      $(".area2plantilla1").css("width","120mm");
      $(".area2plantilla1").css("height","90mm");
      $(".area2plantilla1").css("margin-top","-150mm");
      $(".area2plantilla1").css("margin-right","5mm");

     


      //width: 120mm;height:90mm;float: right;margin-top: -50mm;

      $(".area3plantilla1").css("width","120mm");
      $(".area3plantilla1").css("height","90mm");
      $(".area3plantilla1").css("margin-top","-50mm");
      $(".area3plantilla1").css("margin-right","5mm");


      //####plantilla 2
      //width: 280mm;height:277mm;margin-top:5mm;margin-left: 5mm;
      $(".area1plantilla2").css("width","280mm");
      $(".area1plantilla2").css("height","277mm");
      $(".area1plantilla2").css("margin-top","5mm");
      $(".area1plantilla2").css("margin-left","5mm");



      //###plantilla3


      //width: 160mm;height:270mm;margin-top:7mm;
      $(".area1plantilla3").css("width","150mm");
      $(".area1plantilla3").css("height","270mm");
      $(".area1plantilla3").css("margin-top","7mm");
      $(".area1plantilla3").css("margin-left","5mm");


      //width: 120mm; height: 130mm; float: right; margin-top: -270mm;margin-right:5mm

      $(".area2plantilla3").css("width","120mm");
      $(".area2plantilla3").css("height","130mm");
      $(".area2plantilla3").css("margin-top","-270mm");
      $(".area2plantilla3").css("margin-right","5mm");


      //width: 120mm;height:130mm;float: right;margin-top: -130mm;

      $(".area3plantilla3").css("width","120mm");
      $(".area3plantilla3").css("height","130mm");
      $(".area3plantilla3").css("margin-top","-130mm");
      $(".area3plantilla3").css("margin-right","5mm");


      //###plantilla 4

      //width: 279mm;height:170mm;margin-top:7mm;margin-left: 5mm;

      $(".area1plantilla4").css("width","280mm");
      $(".area1plantilla4").css("height","170mm");
      $(".area1plantilla4").css("margin-top","5mm");
      $(".area1plantilla4").css("margin-left","5mm");

      //width: 100mm;height:100mm;margin-top: -40mm;margin-left: 100mm;

      $(".area2plantilla4").css("width","100mm");
      $(".area2plantilla4").css("height","100mm");
      $(".area2plantilla4").css("margin-top","-40mm");
      $(".area2plantilla4").css("margin-left","100mm");


      //plantilla5

      //width: 160mm; height: 275mm; margin-top: 5mm; margin-left: 5mm;
      $(".area1plantilla5").css("width","160mm");
      $(".area1plantilla5").css("height","275mm");
      $(".area1plantilla5").css("margin-top","5mm");
      $(".area1plantilla5").css("margin-left","5mm");



      //width: 110mm; height: 215mm; float: right; margin-top: -240mm;margin-right:5mm

      $(".area2plantilla5").css("width","110mm");
      $(".area2plantilla5").css("height","215mm");
      $(".area2plantilla5").css("margin-top","-240mm");
      $(".area2plantilla5").css("margin-left","5mm");


      //#plantilla  10

      //width: 140mm;height:275mm;margin-top:7mm;margin-left:5mm


      $(".area1plantilla10").css("width","135mm");
      $(".area1plantilla10").css("height","275mm");
      $(".area1plantilla10").css("margin-top","7mm");
      $(".area1plantilla10").css("margin-left","5mm");


      //width: 135mm; height: 275mm; margin-top: -275mm;margin-left:150mm

      $(".area2plantilla10").css("width","135mm");
      $(".area2plantilla10").css("height","275mm");
      $(".area2plantilla10").css("margin-top","-275mm");
      $(".area2plantilla10").css("float","");
     
      $(".area2plantilla10").css("margin-left","150mm");


      //###plantilla 11

      //width: 250mm;height:245mm;margin-top:20mm;margin-left: 20mm;border-style: dotted;

      $(".area1plantilla11").css("width","250mm");
      $(".area1plantilla11").css("height","245mm");
      $(".area1plantilla11").css("margin-top","20mm");
      $(".area1plantilla11").css("margin-left","20mm");


      //###plantilla 12  PENDIENTE
      $(".area1plantilla12").css("width","250mm");
      $(".area1plantilla12").css("height","245mm");
      $(".area1plantilla12").css("margin-top","20mm");
      $(".area1plantilla12").css("margin-left","20mm");


      $(".area2plantilla12").css("width","250mm");
      $(".area2plantilla12").css("height","245mm");
      $(".area2plantilla12").css("margin-top","20mm");
      $(".area2plantilla12").css("margin-left","20mm");

      $(".area3plantilla12").css("width","250mm");
      $(".area3plantilla12").css("height","245mm");
      $(".area3plantilla12").css("margin-top","20mm");
      $(".area3plantilla12").css("margin-left","20mm");


      //###plantilla 13

      //area2plantilla13

      //width: 117mm; height: 124mm; margin-top: 10mm; margin-left: 5mm;

      $(".area1plantilla13").css("width","120mm");
      $(".area1plantilla13").css("height","124mm");
      $(".area1plantilla13").css("margin-top","10mm");
      $(".area1plantilla13").css("margin-left","5mm");

      //width: 120mm;height:124mm;margin-top:5mm;margin-left:10mm

      $(".area2plantilla13").css("width","120mm");
      $(".area2plantilla13").css("height","124mm");
      $(".area2plantilla13").css("margin-top","5mm");
      $(".area2plantilla13").css("margin-left","5mm");

      //width: 150mm;height:160mm;margin-top: -253mm;margin-left:135mm


      $(".area3plantilla13").css("width","150mm");
      $(".area3plantilla13").css("height","160mm");
      $(".area3plantilla13").css("margin-top","-253mm");
      $(".area3plantilla13").css("margin-left","135mm");

      //width: 150mm;height:89mm;margin-top:4mm;margin-left:135mm


      $(".area4plantilla13").css("width","150mm");
      $(".area4plantilla13").css("height","89mm");
      $(".area4plantilla13").css("margin-top","4mm");
      $(".area4plantilla13").css("margin-left","135mm");


      //###plantilla 14

      //width: 130mm;height:170mm;margin-top:10mm;margin-left:10mm
      $(".area1plantilla14").css("width","130mm");
      $(".area1plantilla14").css("height","170mm");
      $(".area1plantilla14").css("margin-top","10mm");
      $(".area1plantilla14").css("margin-left","5mm");

      //width: 130mm;height:170mm;margin-top: -80mm;margin-left:150mm
      $(".area2plantilla14").css("width","130mm");
      $(".area2plantilla14").css("height","170mm");
      $(".area2plantilla14").css("margin-top","-80mm");
      $(".area2plantilla14").css("margin-left","155mm");


      //###plantilla 15

      //area1plantilla15

      //width: 130mm;height:100mm;margin-top:90mm;margin-left:10mm

      $(".area1plantilla15").css("width","130mm");
      $(".area1plantilla15").css("height","100mm");
      $(".area1plantilla15").css("margin-top","90mm");
      $(".area1plantilla15").css("margin-left","10mm");

      //width: 120mm;height:125mm;margin-top: -170mm;margin-left:150mm


      $(".area2plantilla15").css("width","120mm");
      $(".area2plantilla15").css("height","125mm");
      $(".area2plantilla15").css("margin-top","-170mm");
      $(".area2plantilla15").css("margin-left","150mm");

      //width: 120mm;height:125mm;margin-top: 5mm;margin-left:150mm


      $(".area3plantilla15").css("width","120mm");
      $(".area3plantilla15").css("height","125mm");
      $(".area3plantilla15").css("margin-top","5mm");
      $(".area3plantilla15").css("margin-left","150mm");

      //##plantilla 16

      //width: 280mm;height:135mm;margin-top:5mm;margin-left:5mm

      $(".area1plantilla16").css("width","280mm");
      $(".area1plantilla16").css("height","135mm");
      $(".area1plantilla16").css("margin-top","5mm");
      $(".area1plantilla16").css("margin-left","5mm");


      //width: 280mm;height:135mm;margin-top: 5mm;margin-left:5mm
      $(".area2plantilla16").css("width","280mm");
      $(".area2plantilla16").css("height","135mm");
      $(".area2plantilla16").css("margin-top","5mm");
      $(".area2plantilla16").css("margin-left","5mm");


}

//para los 21 x 21 cm cuadrado

if(tipo=="c" && libro=="21x21"){


      $(".trabajo").css("width","211mm");
      $(".trabajo").css("height","211mm");

      $(".zona-de-soltar").css("width","208mm");
      $(".zona-de-soltar").css("height","205mm");

      $(".trabajo").css("display","");



      $(".areacentro").css("width","100mm");
      $(".areacentro").css("height","100mm");
      $(".areacentro").css("margin-top","85mm");
      $(".areacentro").css("margin-left","95mm");

      //#############variables de impresion
      //###plantilla 1

      //width: 150mm; height: 100mm; margin-top: 85mm;margin-left:5mm

      $(".area1plantilla1").css("width","150mm");
      $(".area1plantilla1").css("height","100mm");
      $(".area1plantilla1").css("margin-top","85mm");
      $(".area1plantilla1").css("margin-left","5mm");

      //width: 120mm;height:90mm;float: right;margin-top: -150mm;


      $(".area2plantilla1").css("width","120mm");
      $(".area2plantilla1").css("height","90mm");
      $(".area2plantilla1").css("margin-top","-150mm");
      $(".area2plantilla1").css("margin-right","5mm");

     


      //width: 120mm;height:90mm;float: right;margin-top: -50mm;

      $(".area3plantilla1").css("width","120mm");
      $(".area3plantilla1").css("height","90mm");
      $(".area3plantilla1").css("margin-top","-50mm");
      $(".area3plantilla1").css("margin-right","5mm");


      //####plantilla 2
      //width: 280mm;height:277mm;margin-top:5mm;margin-left: 5mm;
      $(".area1plantilla2").css("width","205mm");
      $(".area1plantilla2").css("height","204mm");
      $(".area1plantilla2").css("margin-top","5mm");
      $(".area1plantilla2").css("margin-left","5mm");



      //###plantilla3


      //width: 160mm;height:270mm;margin-top:7mm;
      $(".area1plantilla3").css("width","294mm");
      $(".area1plantilla3").css("height","270mm");
      $(".area1plantilla3").css("margin-top","7mm");
      $(".area1plantilla3").css("margin-left","5mm");


      //width: 120mm; height: 130mm; float: right; margin-top: -270mm;margin-right:5mm

      $(".area2plantilla3").css("width","120mm");
      $(".area2plantilla3").css("height","130mm");
      $(".area2plantilla3").css("margin-top","-270mm");
      $(".area2plantilla3").css("margin-right","5mm");


      //width: 120mm;height:130mm;float: right;margin-top: -130mm;

      $(".area3plantilla3").css("width","120mm");
      $(".area3plantilla3").css("height","130mm");
      $(".area3plantilla3").css("margin-top","-130mm");
      $(".area3plantilla3").css("margin-right","5mm");


      //###plantilla 4

      //width: 279mm;height:170mm;margin-top:7mm;margin-left: 5mm;

      $(".area1plantilla4").css("width","280mm");
      $(".area1plantilla4").css("height","170mm");
      $(".area1plantilla4").css("margin-top","5mm");
      $(".area1plantilla4").css("margin-left","5mm");

      //width: 100mm;height:100mm;margin-top: -40mm;margin-left: 100mm;

      $(".area2plantilla4").css("width","100mm");
      $(".area2plantilla4").css("height","100mm");
      $(".area2plantilla4").css("margin-top","-40mm");
      $(".area2plantilla4").css("margin-left","100mm");


      //plantilla5

      //width: 160mm; height: 275mm; margin-top: 5mm; margin-left: 5mm;
      $(".area1plantilla5").css("width","160mm");
      $(".area1plantilla5").css("height","275mm");
      $(".area1plantilla5").css("margin-top","5mm");
      $(".area1plantilla5").css("margin-left","5mm");



      //width: 110mm; height: 215mm; float: right; margin-top: -240mm;margin-right:5mm

      $(".area2plantilla5").css("width","110mm");
      $(".area2plantilla5").css("height","215mm");
      $(".area2plantilla5").css("margin-top","-240mm");
      $(".area2plantilla5").css("margin-left","5mm");


      //#plantilla  10

      //width: 140mm;height:275mm;margin-top:7mm;margin-left:5mm


      $(".area1plantilla10").css("width","135mm");
      $(".area1plantilla10").css("height","275mm");
      $(".area1plantilla10").css("margin-top","7mm");
      $(".area1plantilla10").css("margin-left","5mm");


      //width: 135mm; height: 275mm; margin-top: -275mm;margin-left:150mm

      $(".area2plantilla10").css("width","135mm");
      $(".area2plantilla10").css("height","275mm");
      $(".area2plantilla10").css("margin-top","-275mm");
      $(".area2plantilla10").css("float","");
     
      $(".area2plantilla10").css("margin-left","150mm");


      //###plantilla 11

      //width: 250mm;height:245mm;margin-top:20mm;margin-left: 20mm;border-style: dotted;

      $(".area1plantilla11").css("width","250mm");
      $(".area1plantilla11").css("height","245mm");
      $(".area1plantilla11").css("margin-top","20mm");
      $(".area1plantilla11").css("margin-left","20mm");


      //###plantilla 12  PENDIENTE
      $(".area1plantilla12").css("width","250mm");
      $(".area1plantilla12").css("height","245mm");
      $(".area1plantilla12").css("margin-top","20mm");
      $(".area1plantilla12").css("margin-left","20mm");


      $(".area2plantilla12").css("width","250mm");
      $(".area2plantilla12").css("height","245mm");
      $(".area2plantilla12").css("margin-top","20mm");
      $(".area2plantilla12").css("margin-left","20mm");

      $(".area3plantilla12").css("width","250mm");
      $(".area3plantilla12").css("height","245mm");
      $(".area3plantilla12").css("margin-top","20mm");
      $(".area3plantilla12").css("margin-left","20mm");


      //###plantilla 13

      //area2plantilla13

      //width: 117mm; height: 124mm; margin-top: 10mm; margin-left: 5mm;

      $(".area1plantilla13").css("width","120mm");
      $(".area1plantilla13").css("height","124mm");
      $(".area1plantilla13").css("margin-top","10mm");
      $(".area1plantilla13").css("margin-left","5mm");

      //width: 120mm;height:124mm;margin-top:5mm;margin-left:10mm

      $(".area2plantilla13").css("width","120mm");
      $(".area2plantilla13").css("height","124mm");
      $(".area2plantilla13").css("margin-top","5mm");
      $(".area2plantilla13").css("margin-left","5mm");

      //width: 150mm;height:160mm;margin-top: -253mm;margin-left:135mm


      $(".area3plantilla13").css("width","150mm");
      $(".area3plantilla13").css("height","160mm");
      $(".area3plantilla13").css("margin-top","-253mm");
      $(".area3plantilla13").css("margin-left","135mm");

      //width: 150mm;height:89mm;margin-top:4mm;margin-left:135mm


      $(".area4plantilla13").css("width","150mm");
      $(".area4plantilla13").css("height","89mm");
      $(".area4plantilla13").css("margin-top","4mm");
      $(".area4plantilla13").css("margin-left","135mm");


      //###plantilla 14

      //width: 130mm;height:170mm;margin-top:10mm;margin-left:10mm
      $(".area1plantilla14").css("width","130mm");
      $(".area1plantilla14").css("height","170mm");
      $(".area1plantilla14").css("margin-top","10mm");
      $(".area1plantilla14").css("margin-left","5mm");

      //width: 130mm;height:170mm;margin-top: -80mm;margin-left:150mm
      $(".area2plantilla14").css("width","130mm");
      $(".area2plantilla14").css("height","170mm");
      $(".area2plantilla14").css("margin-top","-80mm");
      $(".area2plantilla14").css("margin-left","155mm");


      //###plantilla 15

      //area1plantilla15

      //width: 130mm;height:100mm;margin-top:90mm;margin-left:10mm

      $(".area1plantilla15").css("width","130mm");
      $(".area1plantilla15").css("height","100mm");
      $(".area1plantilla15").css("margin-top","90mm");
      $(".area1plantilla15").css("margin-left","10mm");

      //width: 120mm;height:125mm;margin-top: -170mm;margin-left:150mm


      $(".area2plantilla15").css("width","120mm");
      $(".area2plantilla15").css("height","125mm");
      $(".area2plantilla15").css("margin-top","-170mm");
      $(".area2plantilla15").css("margin-left","150mm");

      //width: 120mm;height:125mm;margin-top: 5mm;margin-left:150mm


      $(".area3plantilla15").css("width","120mm");
      $(".area3plantilla15").css("height","125mm");
      $(".area3plantilla15").css("margin-top","5mm");
      $(".area3plantilla15").css("margin-left","150mm");

      //##plantilla 16

      //width: 280mm;height:135mm;margin-top:5mm;margin-left:5mm

      $(".area1plantilla16").css("width","280mm");
      $(".area1plantilla16").css("height","135mm");
      $(".area1plantilla16").css("margin-top","5mm");
      $(".area1plantilla16").css("margin-left","5mm");


      //width: 280mm;height:135mm;margin-top: 5mm;margin-left:5mm
      $(".area2plantilla16").css("width","280mm");
      $(".area2plantilla16").css("height","135mm");
      $(".area2plantilla16").css("margin-top","5mm");
      $(".area2plantilla16").css("margin-left","5mm");


}




if(tipo=="v"){


      $(".trabajoVertical").css("width","306mm");
      $(".trabajoVertical").css("height","396mm");//

      $(".zona-de-soltar-vertical").css("width","303mm");
      $(".zona-de-soltar-vertical").css("height","390mm");

      $(".trabajoVertical").css("display","");


      //width: 150mm; height: 150mm; margin-top: 110mm; margin-left: 80mm;

      $(".areacentro").css("width","150mm");
      $(".areacentro").css("height","150mm");
      $(".areacentro").css("margin-top","110mm");
      $(".areacentro").css("margin-left","80mm");

      //#############variables de impresion
      //###plantilla 1

      //width: 160mm; height: 380mm; margin-top: 5mm;margin-left:5mm;

      $(".area1plantilla1").css("width","160mm");
      $(".area1plantilla1").css("height","380mm");
      $(".area1plantilla1").css("margin-top","5mm");
      $(".area1plantilla1").css("margin-left","5mm");

      //width: 120mm; height: 190mm;margin-left:180mm; margin-top: -380mm;

      //width: 120mm; height: 190mm; margin-top: -380mm; margin-left: 180mm;
      $(".area2plantilla1").css("width","120mm");
      $(".area2plantilla1").css("height","190mm");
      $(".area2plantilla1").css("margin-top","-380mm");
      $(".area2plantilla1").css("margin-left","180mm");


      //width: 120mm; height: 185mm; float: right; margin-top: -185mm; margin-left: 180mm;

      $(".area3plantilla1").css("width","120mm");
      $(".area3plantilla1").css("height","185mm");
      $(".area3plantilla1").css("margin-top","-185mm");
      $(".area3plantilla1").css("margin-left","180mm");



    



      //####plantilla 2
      //width: 280mm;height:277mm;margin-top:5mm;margin-left: 5mm;
      $(".area1plantilla2").css("width","295mm");
      $(".area1plantilla2").css("height","385mm");
      $(".area1plantilla2").css("margin-top","5mm");
      $(".area1plantilla2").css("margin-left","5mm");



      //###plantilla3


      
      //width: 160mm;height:270mm;margin-top:7mm;
      $(".area1plantilla3").css("width","160mm");
      $(".area1plantilla3").css("height","270mm");
      $(".area1plantilla3").css("margin-top","7mm");
      $(".area1plantilla3").css("margin-left","5mm");


      //width: 120mm;height:130mm;float: right;margin-top: -270mm;

      $(".area2plantilla3").css("width","120mm");
      $(".area2plantilla3").css("height","130mm");
      $(".area2plantilla3").css("margin-top","-270mm");
      $(".area2plantilla3").css("float","right");


      //width: 120mm;height:130mm;float: right;margin-top: -130mm;

      $(".area3plantilla3").css("width","120mm");
      $(".area3plantilla3").css("height","130mm");
      $(".area3plantilla3").css("margin-top","-130mm");
      $(".area3plantilla3").css("float","right");


      //###plantilla 4

      //width: 290mm; height: 220mm; margin-top: 7mm; margin-left: 5mm;

      $(".area1plantilla4").css("width","290mm");
      $(".area1plantilla4").css("height","2200mm");
      $(".area1plantilla4").css("margin-top","7mm");
      $(".area1plantilla4").css("margin-left","5mm");

      //width: 120mm; height: 100mm; margin-top: -56mm; margin-left: 90mm;

      $(".area2plantilla4").css("width","120mm");
      $(".area2plantilla4").css("height","100mm");
      $(".area2plantilla4").css("margin-top","-56mm");
      $(".area2plantilla4").css("margin-left","100mm");


      //plantilla5

      //width: 180mm; height: 370mm; margin-top: 7mm; margin-left: 5mm;
      $(".area1plantilla5").css("width","180mm");
      $(".area1plantilla5").css("height","370mm");
      $(".area1plantilla5").css("margin-top","7mm");
      $(".area1plantilla5").css("margin-left","5mm");



      //width: 110mm; height: 215mm; float: right; margin-top: -295mm;

      $(".area2plantilla5").css("width","110mm");
      $(".area2plantilla5").css("height","215mm");
      $(".area2plantilla5").css("margin-top","-295mm");
      $(".area2plantilla5").css("float","right");


      //#plantilla  10 aqui

      //width: 140mm; height: 375mm; margin-top: 7mm; margin-left: 5mm;


      $(".area1plantilla10").css("width","140mm");
      $(".area1plantilla10").css("height","375mm");
      $(".area1plantilla10").css("margin-top","7mm");
      $(".area1plantilla10").css("margin-left","5mm");


      //width: 140mm; height: 375mm; float: right; margin-top: -375mm;

      $(".area2plantilla10").css("width","140mm");
      $(".area2plantilla10").css("height","375mm");
      $(".area2plantilla10").css("margin-top","-375mm");
     // $(".area2plantilla10").css("float","right");

 
      //###plantilla 11 aqui

      //width: 265mm; height: 360mm; margin-top: 20mm; margin-left: 20mm;

      $(".area1plantilla11").css("width","265mm");
      $(".area1plantilla11").css("height","360mm");
      $(".area1plantilla11").css("margin-top","20mm");
      $(".area1plantilla11").css("margin-left","20mm");


      //###plantilla 12 
      $(".area1plantilla12").css("width","250mm");
      $(".area1plantilla12").css("height","245mm");
      $(".area1plantilla12").css("margin-top","20mm");
      $(".area1plantilla12").css("margin-left","20mm");


      $(".area2plantilla12").css("width","250mm");
      $(".area2plantilla12").css("height","245mm");
      $(".area2plantilla12").css("margin-top","20mm");
      $(".area2plantilla12").css("margin-left","20mm");

      $(".area3plantilla12").css("width","250mm");
      $(".area3plantilla12").css("height","245mm");
      $(".area3plantilla12").css("margin-top","20mm");
      $(".area3plantilla12").css("margin-left","20mm");


      //###plantilla 13

      //area2plantilla13

      //width: 120mm;height:124mm;margin-top:10mm;margin-left:10mm

      $(".area1plantilla13").css("width","117mm");
      $(".area1plantilla13").css("height","124mm");
      $(".area1plantilla13").css("margin-top","10mm");
      $(".area1plantilla13").css("margin-left","20mm");

      //width: 120mm;height:124mm;margin-top:5mm;margin-left:10mm

      $(".area2plantilla13").css("width","120mm");
      $(".area2plantilla13").css("height","124mm");
      $(".area2plantilla13").css("margin-top","5mm");
      $(".area2plantilla13").css("margin-left","10mm");

      //width: 150mm;height:160mm;margin-top: -253mm;margin-left:135mm


      $(".area3plantilla13").css("width","150mm");
      $(".area3plantilla13").css("height","160mm");
      $(".area3plantilla13").css("margin-top","-253mm");
      $(".area3plantilla13").css("margin-left","135mm");

      //width: 150mm;height:89mm;margin-top:4mm;margin-left:135mm


      $(".area4plantilla13").css("width","150mm");
      $(".area4plantilla13").css("height","89mm");
      $(".area4plantilla13").css("margin-top","4mm");
      $(".area4plantilla13").css("margin-left","135mm");


      //###plantilla 14

      //width: 130mm;height:170mm;margin-top:10mm;margin-left:10mm
      $(".area1plantilla14").css("width","130mm");
      $(".area1plantilla14").css("height","170mm");
      $(".area1plantilla14").css("margin-top","10mm");
      $(".area1plantilla14").css("margin-left","10mm");

      //width: 130mm;height:170mm;margin-top: -80mm;margin-left:150mm
      $(".areaplantilla14").css("width","130mm");
      $(".area2plantilla14").css("height","170mm");
      $(".area2plantilla14").css("margin-top","-80mm");
      $(".area2plantilla14").css("margin-left","150mm");


      //###plantilla 15

      //area1plantilla15

      //width: 130mm;height:100mm;margin-top:90mm;margin-left:10mm

      $(".area1plantilla15").css("width","130mm");
      $(".area1plantilla15").css("height","100mm");
      $(".area1plantilla15").css("margin-top","90mm");
      $(".area1plantilla15").css("margin-left","10mm");

      //width: 120mm;height:125mm;margin-top: -170mm;margin-left:150mm


      $(".area2plantilla15").css("width","120mm");
      $(".area2plantilla15").css("height","125mm");
      $(".area2plantilla15").css("margin-top","-170mm");
      $(".area2plantilla15").css("margin-left","150mm");

      //width: 120mm;height:125mm;margin-top: 5mm;margin-left:150mm


      $(".area3plantilla15").css("width","120mm");
      $(".area3plantilla15").css("height","125mm");
      $(".area3plantilla15").css("margin-top","5mm");
      $(".area3plantilla15").css("margin-left","150mm");

      //##plantilla 16

      //width: 280mm;height:135mm;margin-top:5mm;margin-left:5mm

      $(".area1plantilla16").css("width","280mm");
      $(".area1plantilla16").css("height","135mm");
      $(".area1plantilla16").css("margin-top","5mm");
      $(".area1plantilla16").css("margin-left","5mm");


      //width: 280mm;height:135mm;margin-top: 5mm;margin-left:5mm
      $(".area2plantilla16").css("width","280mm");
      $(".area2plantilla16").css("height","135mm");
      $(".area2plantilla16").css("margin-top","5mm");
      $(".area2plantilla16").css("margin-left","5mm");


}




//return false;


var element = document.getElementById('element-to-print');


if(libro=="30x30"){

    var opt = {
                margin: [2, 0, 30, 0], //top, left, buttom, right,
                //margin: [80, 0, 30, 0], //top, left, buttom, right,
                filename: 'albumSmart30x30.pdf',
                image: {type: 'jpeg',quality: 0.98},
                html2canvas: {dpi: 300, scale: 1},
                pagebreak: {mode: 'avoid-all'},
                jsPDF: {unit: 'mm', format: 'C3', orientation: 'landscape'} //landscape   portrait
            };

  }


  if(libro=="21x21"){

    var opt = {
                margin: [30, 22, 30, 0], //top, left, buttom, right,
                //margin: [80, 0, 30, 0], //top, left, buttom, right,
                filename: 'albumSmart21x21.pdf',
                image: {type: 'jpeg',quality: 0.98},
                html2canvas: {dpi: 300, scale: 1},
                pagebreak: {mode: 'avoid-all'},
                jsPDF: {unit: 'mm', format: 'B4', orientation: 'portrait'} //landscape   portrait
            };

  }



        var worker = html2pdf();
        
            console.log(worker);
            worker.set(opt)
                  .from(element)
                  .toPdf()
                  .get('pdf')
                  .then(function (doc) {
                      var totalPages = doc.internal.getNumberOfPages();
                      for (var i=1; i<=totalPages; i++) {
                          //if (i > 1) {
                            doc.setPage(i);
                            doc.setFontSize(10);
                            doc.text('Página ' + i + ' de ' + totalPages+ " Pedido: 00073635 Fecha : 2023-03-01", (doc.internal.pageSize.getWidth() / 2.3), (doc.internal.pageSize.getHeight() - 0.8));

                            if(i==totalPages){
                              //setTimeout($.unblockUI,0);

                               location.reload();

                             

                            }
                            //?????
                          //}
                      }
        
                 }).save();

            //setTimeout($.unblockUI,0);

    });

});

 

  </script>


    

    <div class="col-sm-10">
      <!--input type="button" name="pdf" value="PDF" id="pdf"-->

      <div id="vistasPreviasPadre" style="width:100%;height:80px;background-color:#F0F3F3;overflow: scroll;border-radius: 10px;overflow-y: hidden;">
           <table><tr id="vistasPrevias"></tr></table>


         </div>


        <!--portada-->
         <div id="element-to-print-portada" style="display:none;">

          <div class="col-sm-4">
             <center><span style="color:blue;"> PORTADA</span></center>

              
            <div id="POR1" class="trabajo">

              <div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 100px;margin-left: 100px;border-style:dotted;">
                
                 <img src="{{ URL::to('/') }}/img/boda9.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">
              </div>


            </div>



          </div>



          <!--div class="col-sm-1" style="width:10px !important;margin-top: 20px;">
            <img src="{{ URL::to('/') }}/img/lomo.png" style="height:105mm;width: 20px;margin-left: 52px;">
          </div-->


        
          <div class="col-sm-4" style="margin-left: 80px;margin-left: -10px;">
            <center><span style="color:blue;">CONTRA PORTADA</span></center>
              <div id="POR2" class="trabajo">
                   <div class="zona-de-soltar">
                     <img src="{{ URL::to('/') }}/img/boda9.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">
                   </div>
              </div>
          </div>
             

          </div>


        <!-- -->


    <!--inicio de interiores-->
    <div id="spacio" style="width:100%;height:20px;"></div>
     <div id="element-to-print">
      <style type="text/css">
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
      <div class="inicial">
      


   


    </div>

  </div>

  <!--fin de interiores-->

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

<!----Modal de inicio -->

<div class="modal" id="cargarImagenes" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" style="margin-top:100px;">
  <div class="modal-dialog" style="width:340px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Carga tus Imágenes</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

          <div class="card">
            <div class="card-body" style="margin-top:30px;">
             <form method='post' action='' enctype="multipart/form-data" style="display:none;">
               <input type="file" id='files' name="file1" multiple><br>
              
            </form>
              <button type="button" class="btn btn-default"><img src="{{ URL::to('/') }}/img/logos_carga/facebook.png" width="60"></button>
              <button type="button" class="btn btn-default"><img src="{{ URL::to('/') }}/img/logos_carga/instagram.jpg" width="60"></button>
              <button type="button" class="btn btn-default" id="local"><img src="{{ URL::to('/') }}/img/logos_carga/local.jpg" width="57"></button>

              
              
            </div>
          </div>
         
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
      </div>

    </div>
  </div>
</div>




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







</body>

</html>
