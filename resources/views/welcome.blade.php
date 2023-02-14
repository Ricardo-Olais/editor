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

  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>


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
    margin:10px 10px 60px ;

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
  background-color:#18456b;
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
  -webkit-mask-image: url('../img/mascaras/1.png');
  mask-image: url('../img/mascaras/1.png');
  object-fit: cover;-webkit-mask-size: cover;mask-size: cover;;

}

.mascara2 {
  -webkit-mask-image: url('../img/mascaras/2.png');
  mask-image: url('../img/mascaras/2.png');
  object-fit: cover;-webkit-mask-size: cover;mask-size: cover;;

}


</style>
  

<script type="text/javascript">
  
   $(document).ready(function(){


    function toggleZoomScreen() {
        document.body.style.zoom = "84%";
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

      
      var decremento=0;

      var incrementoAux=0;


      $("#agregar").click(function(){



        if(incremento>0){

          
          resta=incremento-1;

          $("#padre11"+incremento).css("display","none");
          $("#padre"+incremento).css("display","none");
         // $("#page1").css("display","none");

          $("#hijo"+incremento).removeClass("fondoMini");
        }

        incremento=incremento+1;
        incrementoAux=incremento+1;


        if(incremento==1){

          //$("#page1").css("display","");
        }


        $("#paginador").css("display","");

        $(".pagination").append('<li class="page-item" ><a class="page-link" id="hijo'+incremento+'">'+incremento+'</a></li>');
        //$("#hijo"+incremento).addClass("fondoMini");


        $("#contenedorpages").append('<div class="zona-de-soltar fondo" style="width:100%;height:450px;border-style:solid;border-width: 3px;border-color:red;background-color:#fff;text-align:center" id="padre'+incremento+'">'+incrementoAux+'<div class="row"><div class="col-sm-6"><div class="zona-de-soltar" style="height:240px;margin-top:30px"></div></div><div class="col-sm-6"><div class="zona-de-soltar" style="height:140px"></div><div class="zona-de-soltar" style="height:140px"></div></div></div>');


        $("#page1").append('<div class="zona-de-soltar fondo" style="width:100%;height:450px;border-style:solid;border-width: 3px;border-color:red;background-color:#fff;text-align:center" id="padre11'+incremento+'">'+incremento+'<div class="row"><div class="col-sm-6"><div class="zona-de-soltar" style="height:240px;margin-top:30px"></div></div><div class="col-sm-6"><div class="zona-de-soltar" style="height:140px"></div><div class="zona-de-soltar" style="height:140px"></div></div></div>');




        $("#vistasPrevias").append("<td style='padding-left:10px;padding:5px;' id='vista"+incremento+"'><img src='../img/libro_pag2.jpg' width=50><br><center><b style='text-align:center;'>"+incremento+" - "+incrementoAux+"</b></center></td>");




      });

     $("#id_select2_example2").change(function(){

         var imgfondo=$(this).val();
        // alert(imgfondo);
         $(".fondo").css("background-image","url("+imgfondo+")");
         $(".fondo").css("background-size","cover");
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

          $("#padre"+incremento).css("display","none");
          $("#page1").css("display","none");
          //$("#atras").prop( "disabled", false);
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

          $("#next").prop( "disabled", false);
         // $("#next").attr("disabled",false);
          //$(this).attr("disabled",false);
          $("#padre11"+incremento).css("display","none");
          $("#padre"+incremento).css("display","none");


            $("#vista"+incremento).removeClass("fondoMini");

             incremento=incremento-1;
            $("#padre11"+incremento).css("display","");
            $("#padre"+incremento).css("display","");

            

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



           if ( $("#padre"+incremento).length > 0 ) {


                
               // $("#page1").css("display","none");
                 $("#padre11"+incremento).css("display","");
                 $("#padre"+incremento).css("display","");
                 $("#vista"+incremento).addClass("fondoMini");

                 
                  $("#padre11"+decremento).css("display","none");
                  $("#padre"+decremento).css("display","none");


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


  
  $("input[name=file1]").change(function() {
            var names = [];
            var base64data;
            for (var i = 0; i < $(this).get(0).files.length; ++i) {

               url= URL.createObjectURL($(this).get(0).files[i]);


                $("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+url+'" width="100%" class="clickable"  style="cursor:pointer;height: auto;background-size: cover;" id="img'+i+'"/></div>');




             /* let reader = new FileReader();
               reader.readAsDataURL($(this).get(0).files[i]); 


                  reader.onloadend = function() {
                    base64data = reader.result;        
                   // console.log(base64data);

                    $("#imagenes-album").append('<div class="arrastrable" draggable="true"><img src="'+base64data+'" width="100%" class="clickable"  style="cursor:pointer;height: auto;background-size: cover;" id="img'+i+'"/></div>');



                 }*/

      
         
            }


        $('.clickable').dblclick(function() {
       
        
            identificadorImg=this.id;

           // alert(identificadorImg);

           $('#modalImagenes').modal('show');
 
        });


        //click para recortar

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





      //fin de click para recortar
});









var idSelec;
window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
   };

 


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

 /* var doc = new jsPDF("p", "mm", "a4");

  var width = doc.internal.pageSize.width;
  var height = doc.internal.pageSize.height;

console.log(width);*/


function getPDF() {
 var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#contenedorpages');

        specialElementHandlers = {
            '#getPDF': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Prueba.pdf');
            }, margins
        );
}



 $("#imprimir").click(function(){

     // getPDF();
  
    var pdf = new jsPDF('p', 'pt', 'letter');

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
       },margins);

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


{{ $pages }}


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

  <!--label>Plantilla</label-->
  <select id="id_select2_example" style="width:150px;">
    <option value="2">Seleccionar</option>
    <option data-img_src="../img/plantillas/plantilla1.PNG" value="plantilla1"></option>
    <option data-img_src="../img/plantillas/plantilla2.PNG" value="plantilla2"></option>
    <option data-img_src="../img/plantillas/plantilla3.PNG" value="plantilla3"></option>
    <option data-img_src="../img/plantillas/plantilla4.PNG" value="plantilla4"></option>
    <option data-img_src="../img/plantillas/plantilla5.PNG" value="plantilla5"></option>
    <option data-img_src="../img/plantillas/plantilla6.PNG" value="plantilla6"></option>
    <option data-img_src="../img/plantillas/plantilla7.PNG" value="plantilla7"></option>
    <option data-img_src="../img/plantillas/plantilla8.PNG" value="plantilla8"></option>
    <option data-img_src="../img/plantillas/plantilla9.PNG" value="plantilla9"></option>
    <option data-img_src="../img/plantillas/plantilla10.PNG" value="plantilla10"></option>
    <option data-img_src="../img/plantillas/plantilla11.PNG" value="plantilla11"></option>
    <option data-img_src="../img/plantillas/plantilla12.PNG" value="plantilla12"></option>
    <option data-img_src="../img/plantillas/plantilla13.PNG" value="plantilla13"></option>
    <option data-img_src="../img/plantillas/plantilla14.PNG" value="plantilla14"></option>
    <option data-img_src="../img/plantillas/plantilla15.PNG" value="plantilla15"></option>
    <option data-img_src="../img/plantillas/plantilla16.PNG" value="plantilla16"></option>
    <option data-img_src="../img/plantillas/plantilla17.PNG" value="plantilla17"></option>
  </select>
</button>



<button type="button" class="btn">

  <!--label>Imagen de Fondo</label-->
  <select id="id_select2_example2" style="width:150px;">
    <option value="2">Seleccionar</option>
    <option data-img_src="../img/fondos/1.jpeg" value="../img/fondos/1.jpeg"></option>
    <option data-img_src="../img/fondos/2.jpeg" value="../img/fondos/2.jpeg"></option>
    <option data-img_src="../img/fondos/3.jpeg" value="../img/fondos/3.jpeg"></option>
    <option data-img_src="../img/fondos/4.jpeg" value="../img/fondos/4.jpeg"></option>
    <option data-img_src="../img/fondos/5.jpeg" value="../img/fondos/5.jpeg"></option>
    <option data-img_src="../img/fondos/6.jpeg" value="../img/fondos/6.jpeg"></option>
    <option data-img_src="../img/fondos/7.jpeg" value="../img/fondos/7.jpeg"></option>
    <option data-img_src="../img/fondos/8.jpeg" value="../img/fondos/8.jpeg"></option>
    <option data-img_src="../img/fondos/9.jpeg" value="../img/fondos/9.jpeg"></option>
    <option data-img_src="../img/fondos/10.jpeg" value="../img/fondos/10.jpeg"></option>
    <option data-img_src="../img/fondos/11.jpeg" value="../img/fondos/11.jpeg"></option>
    <option data-img_src="../img/fondos/12.jpeg" value="../img/fondos/12.jpeg"></option>
    
  </select>
</button>


<button type="button" class="btn">

  <!--label>Imagen de Fondo</label-->
  
</button>
  </div>









  </div>
</div>



  <div class="container-fluid" style="margin-top:10px;">



    <div class="row">
      <div class="col-sm-1" style="background-color:#F0F0F0;width:200px; height:500px; overflow: scroll;border-radius: 10px;overflow-x: hidden;" id="imagenes-album" ><!--aqui van las imagenes-->

      </div>

      <div class="col-sm-10">
         <div id="vistasPreviasPadre" style="width:100%;height:80px;background-color:#F0F3F3;overflow: scroll;border-radius: 10px;overflow-y: hidden;">
           <table><tr id="vistasPrevias"></tr></table>


         </div>
      </div>

      <div class="col-sm-4">
        <div id="page1" style="width: 450;height: 450px;background-color: #9A9D9C;margin:10px 10px 0 0 ;margin-right: -15px;"></div>


      </div>


     



      <div class="col-sm-4" style="padding-right: 0px !important;padding-left: 0px !important;" id="parapdf">

      

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
        <div id="contenedorpages" >

        </div>



          <nav aria-label="Page navigation example" style="display:none;" id="paginador">
            <ul class="pagination">
            
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
              <option data-img_src="../img/mascaras/ninguna.png" value="0"></option>
              <option data-img_src="../img/mascaras/1.png" value="1"></option>
              <option data-img_src="../img/mascaras/2.png" value="2"></option>
              
              
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
            <div class="card-body">
             <form method='post' action='' enctype="multipart/form-data" style="display:none;">
               <input type="file" id='files' name="file1" multiple><br>
              
            </form>
              <button type="button" class="btn btn-default"><img src="../img/logos_carga/facebook.png" width="60"></button>
              <button type="button" class="btn btn-default"><img src="../img/logos_carga/instagram.jpg" width="60"></button>
              <button type="button" class="btn btn-default" id="local"><img src="../img/logos_carga/local.jpg" width="57"></button>

              
              
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
