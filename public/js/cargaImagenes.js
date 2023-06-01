$(document).ready(function(){



  var incremento=0;
  var decremento;

  var contadorIzquierda=0;
  var contadorDerecha=0;
  var muestraPortada=0;
  var dimensionesXP=0;
  var posicionP=0;
  var incrementoImagen=0;

  //  $('#cargarImagenes').modal('show'); //para la carga de imagenes


   $("#cargaIni").click(function(){

       // $('#cargarImagenes').modal('show'); //para la carga de imagenes      

    });

  //control para seleccionar plantillas
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

  $('#id_select2_example3').select2(options);
  $('.select2-container--default .select2-selection--single').css({'height': '40px'});


$("#id_select2_example").change(function(){

        valor=$(this).val();

        //alert(incremento); 

         // incremento //derecha

        // alert(valor);



         if(tipo=="c" || tipo=="h"){

            if(valor=="plantilla1"){



               $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla1" style="width: 50mm;height:50mm;margin-top:20mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -67mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -20mm;border-style: dotted;"></div>');
                 if(incremento>0){

                      resta=incremento-1; //izquierda

                    }
               $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla1" style="width: 50mm;height:50mm;margin-top:20mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -67mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla1" style="width: 40mm;height:40mm;float: right;margin-top: -20mm;border-style: dotted;"></div>');
            
             
              }

            if(valor=="plantilla2"){

              if(muestraPortada==1){

                 $("#izquierdaPortada").html(' <div class="zona-de-soltar area1plantilla2" style="width: 83mm;height:83mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

                
                $("#derechaPortada").html(' <div class="zona-de-soltar area1plantilla2" style="width: 83mm;height:83mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');
              
                 return false;
              }

               $("#pagDerecha"+incremento).html(' <div class="zona-de-soltar area1plantilla2" style="width: 83mm;height:83mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');


                 if(incremento>0){

                      resta=incremento-1; //izquierda

                    }

               $("#pagIzquierda"+resta).html(' <div class="zona-de-soltar area1plantilla2" style="width: 83mm;height:83mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div>');

        

               }


            if(valor=="plantilla4"){

               $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla3" style="width: 50mm;height:83mm;margin-top:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -83mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -40mm;border-style: dotted;"></div>');

                if(incremento>0){

                      resta=incremento-1; //izquierda

                    }
               $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla3" style="width: 50mm;height:83mm;margin-top:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -83mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla3" style="width: 40mm;height:40mm;float: right;margin-top: -40mm;border-style: dotted;"></div>');


              }



           if(valor=="plantilla5"){

              $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla4" style="width: 83mm;height:60mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla4" style="width: 40mm;height:40mm;margin-top: -20mm;margin-left: 26mm;border-style: dotted;"></div>');

                  if(incremento>0){

                      resta=incremento-1; //izquierda

                    }

              $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla4" style="width: 83mm;height:60mm;margin-top:5mm;margin-left: 5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla4" style="width: 40mm;height:40mm;margin-top: -20mm;margin-left: 26mm;border-style: dotted;"></div>');


             }


           if(valor=="plantilla6"){

             $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla5" style="width:45mm;height:83mm;margin-top:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla5" style="width: 45mm;height:68mm;float: right;margin-top: -75mm;border-style: dotted;"></div>');

              if(incremento>0){

                      resta=incremento-1; //izquierda

                    }
              $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla5" style="width:45mm;height:83mm;margin-top:5mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla5" style="width: 45mm;height:68mm;float: right;margin-top: -75mm;border-style: dotted;"></div>');

             

            }

           if(valor=="plantilla8"){

        
            $("#pagDerecha"+incremento).html('<div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 85px;margin-left: 80px;border-style:dotted;"></div></div>');

              if(incremento>0){

                      resta=incremento-1; //izquierda

                    }

              $("#pagIzquierda"+resta).html('<div class="zona-de-soltar areacentro" style="width: 50mm;height:50mm;margin-top: 85px;margin-left: 80px;border-style:dotted;"></div></div>');


            }


            if(valor=="plantilla10"){

               $("#pagDerecha"+incremento).html(' <div class="zona-de-soltar area1plantilla10" style="width: 45mm;height:85mm;margin-top:5mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 45mm;height:85mm;float: right;margin-top: -85mm;border-style:dotted;"></div>');

                  if(incremento>0){

                      resta=incremento-1; //izquierda

                    }

              $("#pagIzquierda"+resta).html(' <div class="zona-de-soltar area1plantilla10" style="width: 45mm;height:85mm;margin-top:5mm;border-style:dotted;"></div><div class="zona-de-soltar area2plantilla10" style="width: 45mm;height:85mm;float: right;margin-top: -85mm;border-style:dotted;"></div>');


              }


             if(valor=="plantilla11"){

               $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla11" style="width: 83mm;height:70mm;margin-top:10mm;margin-left: 5mm;border-style: dotted;"></div>');
                 
                  if(incremento>0){

                      resta=incremento-1; //izquierda

                    }

                $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla11" style="width: 83mm;height:70mm;margin-top:10mm;margin-left: 5mm;border-style: dotted;"></div>');
                
          

              }


            if(valor=="plantilla12"){

               $("#pagDerecha"+incremento).html('<div class="zona-de-soltar area1plantilla12" style="width: 40mm;height:40mm;margin-top:5mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla12" style="width: 40mm;height:40mm;margin-top:1mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla12" style="width: 60mm;height:90mm;margin-top: -85mm;margin-left:27mm;border-style: dotted;">');

               if(incremento>0){

                      resta=incremento-1; //izquierda

                    }
          
                $("#pagIzquierda"+resta).html('<div class="zona-de-soltar area1plantilla12" style="width: 40mm;height:40mm;margin-top:5mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area2plantilla12" style="width: 40mm;height:40mm;margin-top:1mm;margin-left:10mm;border-style: dotted;"></div><div class="zona-de-soltar area3plantilla12" style="width: 60mm;height:90mm;margin-top: -85mm;margin-left:27mm;border-style: dotted;">');

            }












          }


        



});








  $("#local").click(function(){

     $("#files").trigger("click");

  });

  //control de paginas

 // alert(paginas);

   


  var myTimeout = setTimeout(myGreeting, 2000);

      function esPar(numero){ 
        return (numero % 2) == 0; 
      } 

      function myGreeting() {
          
            for(i=0;i<paginas;i++){
            

                $("#agregar")[0].click();

                validad=i+1;

               if(validad==paginas){

                    var at=(paginas-1)/2;



                   //console.log(at);

                    reversa(at);

                  //$("#atras")[0].click();
               }

            }
        }


       function reversa(at) {
        
            var i = at;
            while (i--) {
                
                if(i>-1){

                  //console.log(i);

                  $("#atras")[0].click();

                }
                
            }
        }

      // $("#izquierda").append('<div id="pagIzquierda'+incremento+'"> pagina '+incremento+'<div class="zona-de-soltar" style="width:100%;height:80mm;margin-top:7mm;border-style:dotted;"></div></div>');

        $("#vistasPrevias").append("<td style='padding-left:10px;padding:5px;cursor:pointer;' id='vistap0'><img src='"+urlRaiz+"/img/hoja.png' width=15 ><img src='"+urlRaiz+"/img/hoja.png' width=15 ><br><center><b style='text-align:center;'>Portada</b></center></td>");

        
        $("#vistap0").click(function(){

          $("#inicial-portada").css("display","");
          $("#inicial").css("display","none");

          muestraPortada=1;

          

        });

       


        $("#agregar").click(function(){

           

                 $("#portada").css("display","none");
                 $("#izquierda").css("background-color","#fff");
                
                  incremento=incremento+1;
                  decremento=incremento-2;


                  //ocultamos la pagina cero
                   $("#pagIzquierda0").css("display","none");

                // console.log("derecha"+incremento+ "es par? = "+esPar(incremento));
        
                 if(!esPar(incremento)){

                  // contadorIzquierda=contadorIzquierda+1;
                   

                  $("#pagDerecha"+incremento).css("display","");
                  $("#pagDerecha"+decremento).css("display","none");

                   $("#derecha").append('<div id="pagDerecha'+incremento+'" class="trabajo pagDerecha'+incremento+'"><div class="trabajo"><div class="zona-de-soltar" style="width:100%;height:80mm;margin-top:7mm;border-style:dotted;"></div>'+incremento+'</div></div>');


                  //agregamos el div a la derecha, ocultamos el anterior
                 }else{

                   //  contadorDerecha=0;

                   $("#pagIzquierda"+incremento).css("display","");
                   $("#pagIzquierda"+decremento).css("display","none");

                   $("#izquierda").append('<div id="pagIzquierda'+incremento+'" class="trabajo pagIzquierda'+incremento+'"><div class="trabajo"><div class="zona-de-soltar" style="width:100%;height:80mm;margin-top:7mm;border-style:dotted;"></div>'+incremento+'</div></div>');

                  
                  //es impar, agregamos div a la izquierda ocultamos el anterior
                 }
                 //alert(urlRaiz);

                 $("#vistasPrevias").append("<td style='padding-left:10px;padding:5px;cursor:pointer;' id='vista"+incremento+"' class='vistasp'><img src='"+urlRaiz+"/img/hoja.png' width=15 ><br><center><b style='text-align:center;'>"+incremento+"</b></center></td>");

                  $(".vistasp").click(function(){

                  

                    $("#inicial-portada").css("display","none");
                    $("#inicial").css("display","");

                    muestraPortada=0;

                    

                  });
              


      });




       $("#atras").click(function(){

             //alert(incremento);

           // if(incremento>1){
              aux=incremento-1;
             $("#pagIzquierda"+aux).css("display","none");

             $("#pagDerecha"+incremento).css("display","none");
                incremento=incremento-2;
             $("#pagDerecha"+incremento).css("display","");




             //pagina izquierda
              $("#pagIzquierda"+decremento).css("display","none");
              decremento=incremento-1;

              var p=paginas-1;

              $("#pagIzquierda"+p).css("display","none");

              if(decremento>1){
                 $("#pagIzquierda"+decremento).css("display","");
              }
             

              if(decremento==0){

                $("#portada").css("display","");
                $("#izquierda").css("background-color","#DCD5D4");

              }

              

             


          //  }

      });

       incrementoNext=0;

       $("#next").click(function(){

          //alert(paginas);

           $("#portada").css("display","none");
           $("#izquierda").css("background-color","#fff");

           if(incremento>0){

             $("#pagDerecha1").css("display","none");
           }

       

         if((incrementoNext+2)<=paginas){

                incremento=incremento+1;
                incrementoNext=incremento+1;

               // alert("libro1 " + incrementoNext);

                 $("#pagDerecha"+incrementoNext).css("display","");

                 $("#pagIzquierda"+incremento).css("display","");

              // alert(incremento+ " --- "+incrementoNext);

                incrementoAntesIzquierda=incremento-2;
                incrementoAntesDerecha=incrementoNext-2;

                $("#pagDerecha"+incrementoAntesDerecha).css("display","none");
                $("#pagIzquierda"+incrementoAntesIzquierda).css("display","none");



                incremento=incremento+1;

          }else{

            alert("fin de libro " + incrementoNext);
          }


       });



      pagesAlmbum = [];

      $("#generar").click(function(){

         // alert("hola");


      /*$("#element-to-print div").each(function(){



              cadena="'"+$(this).attr('id')+"'";
              ident=cadena.replace(/[^0-9]+/g, "");
             
              if(ident!=""){
              pagesAlmbum.push(ident);

            }


          });

       pagesAlmbum.sort();

      console.log(pagesAlmbum);*/
      var agregaPag;
      var dimensionesX=0;
      var dimensionesY=0;
      var left=0;

      $.blockUI({ css: {border: 'none','z-index': '5000',padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '10px','-moz-border-radius': '10px',opacity: 1, color: '#fff'} }); setTimeout($.unblockUI, 5000); 


       agregaPagportada=$("#izquierdaPortada").html();
       agregaPagportada2=$("#derechaPortada").html();

       $("#element-to-print-portada").append("<div class='trabajo'>" +agregaPagportada+agregaPagportada2+"</div>");
      // $("#element-to-print-portada").append("<div class='trabajo'>" +agregaPagportada2+"</div>");

      // return false;
      


      for(i=1;i<=paginas;i++){

   
        if(!esPar(i)){

          agregaPag=$("#pagDerecha"+i).html();

          console.log("pagDerecha"+i);


        }else{
          console.log("pagIzquierda"+i);
          agregaPag=$("#pagIzquierda"+i).html();

        }

       
        console.log(agregaPag);
        $("#inicial").css("display","none");



        $("#element-to-print").append("<div class='trabajo'>" +agregaPag+"</div>");




        if(paginas==i){

          console.log("fin");

          //alert(localStorage.getItem('colorFondo'));
          if(tipo=="c" && medida=="21x21"){
         

          $(".trabajo").css("width","210mm");
          $(".trabajo").css("height","205mm");
          $(".trabajo").css("margin-left","17mm");
          $(".trabajo").css("background-color",localStorage.getItem('colorFondo'));

         // $(".trabajo").css("display","");
         // $("#element-to-print").css("display","");

         //plantilla1
          $(".area1plantilla1").css("width","100mm");
          $(".area1plantilla1").css("height","70mm");
          $(".area1plantilla1").css("margin-top","65mm");
          $(".area1plantilla1").css("margin-left","5mm");

          //width: 90mm; height: 70mm; float: right; margin-top: -120mm; margin-right: 5mm;


          $(".area2plantilla1").css("width","90mm");
          $(".area2plantilla1").css("height","80mm");
          $(".area2plantilla1").css("margin-top","-120mm");
          $(".area2plantilla1").css("margin-right","5mm");

         


          //width: 90mm; height: 80mm; float: right; margin-top: -20mm; margin-right: 5mm;

          $(".area3plantilla1").css("width","90mm");
          $(".area3plantilla1").css("height","90mm");
          $(".area3plantilla1").css("margin-top","-30mm");
          $(".area3plantilla1").css("margin-right","5mm");

      
         //plantilla2
          $(".area1plantilla2").css("width","200mm");
          $(".area1plantilla2").css("height","195mm");
          $(".area1plantilla2").css("margin-top","5mm");
          $(".area1plantilla2").css("margin-left","5mm");


          //plantilla 3
          $(".area1plantilla3").css("width","90mm");
          $(".area1plantilla3").css("height","190mm");
          $(".area1plantilla3").css("margin-top","7mm");
          $(".area1plantilla3").css("margin-left","5mm");

          $(".area2plantilla3").css("width","90mm");
          $(".area2plantilla3").css("height","90mm");
          $(".area2plantilla3").css("margin-top","-190mm");
          $(".area2plantilla3").css("margin-right","5mm");

 
          $(".area3plantilla3").css("width","90mm");
          $(".area3plantilla3").css("height","90mm");
          $(".area3plantilla3").css("margin-top","-90mm");
          $(".area3plantilla3").css("margin-right","5mm");



          //plantilla 5

          $(".area1plantilla4").css("width","200mm");
          $(".area1plantilla4").css("height","110mm");
          $(".area1plantilla4").css("margin-top","5mm");
          $(".area1plantilla4").css("margin-left","5mm");

       

          $(".area2plantilla4").css("width","100mm");
          $(".area2plantilla4").css("height","100mm");
          $(".area2plantilla4").css("margin-top","-40mm");
          $(".area2plantilla4").css("margin-left","55mm");

          //plantilla 6
          $(".area1plantilla5").css("width","95mm");
          $(".area1plantilla5").css("height","190mm");
          $(".area1plantilla5").css("margin-top","5mm");
          $(".area1plantilla5").css("margin-left","5mm");


          $(".area2plantilla5").css("width","95mm");
          $(".area2plantilla5").css("height","120mm");
          $(".area2plantilla5").css("margin-top","-160mm");
          $(".area2plantilla5").css("margin-left","5mm");



          //plantilla8 area centro

          $(".areacentro").css("width","70mm");
          $(".areacentro").css("height","70mm");
          $(".areacentro").css("margin-top","60mm");
          $(".areacentro").css("margin-left","70mm");

          //plantilla 10

          $(".area1plantilla10").css("width","95mm");
          $(".area1plantilla10").css("height","190mm");
          $(".area1plantilla10").css("margin-top","7mm");
          $(".area1plantilla10").css("margin-left","5mm");

          $(".area2plantilla10").css("width","95mm");
          $(".area2plantilla10").css("height","190mm");
          $(".area2plantilla10").css("margin-top","-190mm");
          $(".area2plantilla10").css("float","");
         
          $(".area2plantilla10").css("margin-left","105mm");

          //plantilla 11
          $(".area1plantilla11").css("width","170mm");
          $(".area1plantilla11").css("height","170mm");
          $(".area1plantilla11").css("margin-top","20mm");
          $(".area1plantilla11").css("margin-left","20mm");

          //plantilla 12  //pendiente

          /*$(".area1plantilla12").css("width","250mm");
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
          $(".area3plantilla12").css("margin-left","20mm");*/



          dimensionesX=211;
          dimensionesY=211;
          left=3;
          posicion="portrait";

          dimensionesXP=822;
          posicionP="landscape";
          


          }

          if(tipo=="c" && medida=="30x30"){

          $(".trabajo").css("width","293mm");
          $(".trabajo").css("height","290mm");
          $(".trabajo").css("margin-left","13mm");
          $(".trabajo").css("background-color",localStorage.getItem('colorFondo'));



          //PLANTILLA 1
          $(".area1plantilla1").css("width","150mm");
          $(".area1plantilla1").css("height","100mm");
          $(".area1plantilla1").css("margin-top","85mm");
          $(".area1plantilla1").css("margin-left","5mm");

          $(".area2plantilla1").css("width","120mm");
          $(".area2plantilla1").css("height","90mm");
          $(".area2plantilla1").css("margin-top","-150mm");
          $(".area2plantilla1").css("margin-right","5mm");


          $(".area3plantilla1").css("width","120mm");
          $(".area3plantilla1").css("height","90mm");
          $(".area3plantilla1").css("margin-top","-50mm");
          $(".area3plantilla1").css("margin-right","5mm");

          //plantilla 2

          $(".area1plantilla2").css("width","280mm");
          $(".area1plantilla2").css("height","277mm");
          $(".area1plantilla2").css("margin-top","5mm");
          $(".area1plantilla2").css("margin-left","5mm");


          //plantilla 3

         /* $(".area1plantilla3").css("width","150mm");
          $(".area1plantilla3").css("height","270mm");
          $(".area1plantilla3").css("margin-top","7mm");
          $(".area1plantilla3").css("margin-left","5mm");

          $(".area2plantilla3").css("width","120mm");
          $(".area2plantilla3").css("height","130mm");
          $(".area2plantilla3").css("margin-top","-270mm");
          $(".area2plantilla3").css("margin-right","5mm");


          $(".area3plantilla3").css("width","120mm");
          $(".area3plantilla3").css("height","130mm");
          $(".area3plantilla3").css("margin-top","-130mm");
          $(".area3plantilla3").css("margin-right","5mm");*/

          //plantilla 5

          $(".area1plantilla4").css("width","280mm");
          $(".area1plantilla4").css("height","170mm");
          $(".area1plantilla4").css("margin-top","5mm");
          $(".area1plantilla4").css("margin-left","5mm");

          //width: 100mm;height:100mm;margin-top: -40mm;margin-left: 100mm;

          $(".area2plantilla4").css("width","100mm");
          $(".area2plantilla4").css("height","100mm");
          $(".area2plantilla4").css("margin-top","-40mm");
          $(".area2plantilla4").css("margin-left","100mm");

          //plantilla 8

            $(".areacentro").css("width","100mm");
            $(".areacentro").css("height","100mm");
            $(".areacentro").css("margin-top","85mm");
            $(".areacentro").css("margin-left","95mm");


             dimensionesX=296;
             dimensionesY=296;
             left=8;
             posicion="portrait";




          }


          //horizontal
          if(tipo=="h" & medida=="18x14"){


          $(".trabajo").css("width","183mm");
          $(".trabajo").css("height","140mm");
          $(".trabajo").css("margin-left","17mm");
          $(".trabajo").css("background-color",localStorage.getItem('colorFondo'));


          //plantilla 1

          $(".area1plantilla1").css("width","80mm");
          $(".area1plantilla1").css("height","80mm");
          $(".area1plantilla1").css("margin-top","30mm");
          $(".area1plantilla1").css("margin-left","5mm");

          $(".area2plantilla1").css("width","50mm");
          $(".area2plantilla1").css("height","50mm");
          $(".area2plantilla1").css("margin-top","-110mm");
          $(".area2plantilla1").css("float","");
          $(".area2plantilla1").css("margin-left","120mm");

          $(".area3plantilla1").css("width","50mm");
          $(".area3plantilla1").css("height","50mm");
          $(".area3plantilla1").css("margin-top","15mm");
          $(".area3plantilla1").css("float","");
          $(".area3plantilla1").css("margin-left","120mm");

          //plantilla 2 width: 170mm; height: 130mm; margin-top: 5mm; margin-left: 5mm;

          $(".area1plantilla2").css("width","172mm");
          $(".area1plantilla2").css("height","130mm");
          $(".area1plantilla2").css("margin-top","5mm");
          $(".area1plantilla2").css("margin-left","5mm");


          //plantilla 5 width: 163mm; height: 80mm; margin-top: 5mm; margin-left: 5mm;

          $(".area1plantilla4").css("width","170mm");
          $(".area1plantilla4").css("height","80mm");
          $(".area1plantilla4").css("margin-top","5mm");
          $(".area1plantilla4").css("margin-left","5mm");

          //width: 70mm; height: 70mm; margin-top: -40mm; margin-left: 50mm;
          $(".area2plantilla4").css("width","70mm");
          $(".area2plantilla4").css("height","70mm");
          $(".area2plantilla4").css("margin-top","-35mm");
          $(".area2plantilla4").css("margin-left","55mm");


          //plantilla 8

          $(".areacentro").css("width","90mm");
          $(".areacentro").css("height","90mm");
          $(".areacentro").css("margin-top","45mm");
          $(".areacentro").css("margin-left","30mm");




             dimensionesX=186;
             dimensionesY=146;
             left=8;
             posicion="landscape";


          }


          if(tipo=="h" & medida=="30x40"){


          $(".trabajo").css("width","393mm");
          $(".trabajo").css("height","300mm");
          $(".trabajo").css("margin-left","5mm");
          $(".trabajo").css("background-color",localStorage.getItem('colorFondo'));


          //plantilla 1

          $(".area1plantilla1").css("width","80mm");
          $(".area1plantilla1").css("height","80mm");
          $(".area1plantilla1").css("margin-top","30mm");
          $(".area1plantilla1").css("margin-left","5mm");

          $(".area2plantilla1").css("width","50mm");
          $(".area2plantilla1").css("height","50mm");
          $(".area2plantilla1").css("margin-top","-110mm");
          $(".area2plantilla1").css("float","");
          $(".area2plantilla1").css("margin-left","120mm");

          $(".area3plantilla1").css("width","50mm");
          $(".area3plantilla1").css("height","50mm");
          $(".area3plantilla1").css("margin-top","15mm");
          $(".area3plantilla1").css("float","");
          $(".area3plantilla1").css("margin-left","120mm");

          //plantilla 2 width: 380mm; height: 287mm; margin-top: 5mm; margin-left: 5mm;

          $(".area1plantilla2").css("width","380mm");
          $(".area1plantilla2").css("height","287mm");
          $(".area1plantilla2").css("margin-top","5mm");
          $(".area1plantilla2").css("margin-left","5mm");


          //plantilla 5 width: 380mm; height: 200mm; margin-top: 5mm; margin-left: 5mm;

          $(".area1plantilla4").css("width","380mm");
          $(".area1plantilla4").css("height","200mm");
          $(".area1plantilla4").css("margin-top","5mm");
          $(".area1plantilla4").css("margin-left","5mm");

          //width: width: 150mm; height: 150mm; margin-top: -90mm; margin-left: 120mm;
          $(".area2plantilla4").css("width","150mm");
          $(".area2plantilla4").css("height","150mm");
          $(".area2plantilla4").css("margin-top","-90mm");
          $(".area2plantilla4").css("margin-left","120mm");


          //plantilla 8

          $(".areacentro").css("width","90mm");
          $(".areacentro").css("height","90mm");
          $(".areacentro").css("margin-top","45mm");
          $(".areacentro").css("margin-left","30mm");



             dimensionesX=396;
             dimensionesY=306;
             left=0;
             posicion="landscape";


          }


         parapdf(dimensionesX,dimensionesY,posicion,left);

         paraportadapdf(dimensionesXP,dimensionesY,posicionP,left);


        }





      }


   


      //recorrer divs para organizar paginas



      

    function parapdf(dimensionesX,dimensionesY,posicion,left){
      //para generar pdf
      var element = document.getElementById('element-to-print');


         var opt = {
                margin: [1,left, 3, 0], //top, left, buttom, right,  //1,3,8 
                //margin: [80, 0, 30, 0], //top, left, buttom, right,
                filename: 'albumSmart18x14.pdf',
                image: {type: 'jpeg',quality: 0.98},
                html2canvas: {dpi: 300, scale: 1},
                pagebreak: {mode: ['avoid-all','css', 'legacy']},
                jsPDF: {unit: 'mm', format:[dimensionesY,dimensionesX], orientation: posicion} //landscape   
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
                          //if (i > 1) {
                            doc.setPage(i);
                            doc.setFontSize(10);
                            doc.text('Página ' + i + ' de ' + totalPages+ " Pedido: 00073635 Fecha : 2023-03-01, álbum ", (doc.internal.pageSize.getWidth() / 2.3), (doc.internal.pageSize.getHeight() - 0.8));

                            if(i==totalPages){
                              //setTimeout($.unblockUI,0);

                               location.reload();

                             

                            }
                            //?????
                          //}
                      }//.save();
        
                 }).outputPdf().then(function(pdf) {
                // This logs the right base64
                //console.log(btoa(pdf));
                  pdfR=(btoa(pdf));

                $.post(urlRaiz+"/pdf",{pdf:pdfR,_token:token});

            });

        }

          });



     function paraportadapdf(dimensionesX,dimensionesY,posicion,left){
      //para generar pdf
      var element = document.getElementById('element-to-print-portada');


         var opt = {
                margin: [1,left, 3, 0], //top, left, buttom, right,  //1,3,8 
                //margin: [80, 0, 30, 0], //top, left, buttom, right,
                filename: 'albumSmart18x14.pdf',
                image: {type: 'jpeg',quality: 0.98},
                html2canvas: {dpi: 300, scale: 1},
                //pagebreak: {mode: ['avoid-all','css', 'legacy']},
                jsPDF: {unit: 'mm', format:[dimensionesY,dimensionesX], orientation: posicion} //landscape   
            };

           var worker = html2pdf();
        
            console.log(worker);
            worker.set(opt)
                  .from(element)
                  .toPdf()
                  .get('pdf')
                  .then(function (doc) {
                     /* var totalPages = doc.internal.getNumberOfPages();
                      for (var i=1; i<=totalPages; i++) {
                          //if (i > 1) {
                            doc.setPage(i);
                            doc.setFontSize(10);
                            doc.text('Página ' + i + ' de ' + totalPages+ " Pedido: 00073635 Fecha : 2023-03-01, álbum ", (doc.internal.pageSize.getWidth() / 2.3), (doc.internal.pageSize.getHeight() - 0.8));

                            if(i==totalPages){
                              //setTimeout($.unblockUI,0);

                               //location.reload();

                             

                            }
                            //?????
                          //}
                      }//.save();*/
        
                 }).outputPdf().then(function(pdf) {
                // This logs the right base64
                //console.log(btoa(pdf));
                  pdfR=(btoa(pdf));

                $.post(urlRaiz+"/pdfportada",{pdfp:pdfR,_token:token});

            });

        }


        //para insertar texto

          $("#insertTexto").click(function(){

            incrementoImagen=incrementoImagen+1;

            $("#pagDerecha"+incremento).append('<div id="draggable'+incrementoImagen+'" class="ui-widget-content draggable"><iconify-icon icon="entypo:erase" style="float:right;cursor:pointer;color:red;" class="eliminaText" id="'+incrementoImagen+'"></iconify-icon><textarea  class="campotransparente" rows="1" id="colorText'+incrementoImagen+'"  style="font-size: 20px;resize: none;border-style: none;text-align: center;" placeholder="Añade Texto"></textarea></div>');

            $( "#draggable"+incrementoImagen).draggable();


             $(".eliminaText").click(function(){

              idText= $(this).attr("id");


               $( "#draggable"+idText).remove();


            });

               $("#colorText"+incrementoImagen).click(function(){

                 localStorage.setItem('colorText', $(this).attr("id"));

                   colorText= $(this).attr("id");

                // alert(colorText);



            });


      });




});