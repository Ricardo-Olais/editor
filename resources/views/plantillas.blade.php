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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
  
  div {
   outline: red solid 1px;
   page-break-inside: avoid;
}
#nextpage1 {
  page-break-before: always;
}
</style>

  <script type="text/javascript">

$(document).ready(function(){




$("#pdf").click(function(){

$(".trabajo").css("width","293mm");
$(".trabajo").css("height","290mm");

$(".area").css("width","293mm");
$(".area").css("height","290mm");

$(".areacentro").css("width","100mm");
$(".areacentro").css("height","100mm");
$(".areacentro").css("margin-top","85mm");
$(".areacentro").css("margin-left","85mm");






/*var element = document.getElementById('element-to-print');
var opt = {
            margin: [80, 0, 30, 0], //top, left, buttom, right,
            filename: 'albumSmart.pdf',
            image: {type: 'jpeg',quality: 0.98},
            html2canvas: {dpi: 300, scale: 1},
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
                          //if (i > 1) {
                            doc.setPage(i);
                            doc.setFontSize(10);
                            doc.text('Página ' + i + ' de ' + totalPages, (doc.internal.pageSize.getWidth() / 2.3), (doc.internal.pageSize.getHeight() - 0.8));
                            //?????
                          //}
                      }
        
                 }).save();*/



    });

});

 

  </script>

  


</head>

<body>

<input type="button" name="pdf" value="PDF" id="pdf">

<div id="element-to-print">

<style type="text/css">
 .inicial  {
     
      
      center top no-repeat;
     
      font-size: 12px;
      margin: 0
 }

 


 .trabajo{

    width: 105mm;
    height: 105mm;
    background-color:pink !important;
    border-style:dotted;margin: auto;
    border-color: red;


 }

 .area{

   width: 105mm;height:105mm;
  

 }


</style>
<div class="inicial">

  <b><h1>Smart Book</h1></b>

  <!--div id="cuadrado1" class="trabajo">

     <div class="zona-de-soltar area">

    
       <img src="img/boda9.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

     </div>
    
    
  

  </div>


  <div id="cuadrado2" class="trabajo">

      <div class="zona-de-soltar area">
        
        <img src="img/boda7.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

      </div>


  </div>




   <div id="cuadrado4" class="trabajo">

      <div class="zona-de-soltar area">
        
        <img src="img/boda7.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

      </div>


  </div>

  <div id="cuadrado5" class="trabajo">

      <div class="zona-de-soltar area">
        
        <img src="img/boda7.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

      </div>


  </div>



   <div id="cuadrado6" class="trabajo">

      <div class="zona-de-soltar area">
        
         <img src="img/boda6.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

      </div>



  </div>

   <div id="cuadrado7" class="trabajo">

     <div class="zona-de-soltar area">
       
       <img src="img/boda1.jpeg" style="cursor:pointer;object-fit:cover;width:100%;height:100%;">

     </div>
    
    
  

  </div-->

    
    
  

  </div>

     
    
    
  

  </div>



</div>






</body>
</html>






<div id="cuadrado8" class="trabajo">

  <div class="zona-de-soltar area1plantilla15" style="width: 95mm;height:45mm;margin-top:5mm;margin-left:5mm"></div><div class="zona-de-soltar area3plantilla15" style="width: 95mm;height:45mm;margin-top: 5mm;margin-left:5mm"></div>
 

  </div>
 



<div id="cuadrado8" class="trabajo" style="width: 293mm; height: 290mm;">

  <div class="zona-de-soltar area1plantilla15" style="width: 280mm;height:135mm;margin-top:5mm;margin-left:5mm"></div>



  <div class="zona-de-soltar area3plantilla15" style="width: 280mm;height:135mm;margin-top: 5mm;margin-left:5mm"></div>
 

  </div>

