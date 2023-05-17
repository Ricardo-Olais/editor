
  var elementoArrastrado;
  var identificadorImg;

 
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
    
         event.target.appendChild(elementoArrastrado);
          
      }
    
  }, false);


//para recortar la foto


  

