
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <!-- Favicon and title -->
  <title>Starter template - Halfmoon</title>

  <!-- Halfmoon CSS -->
  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
  <!--
    Or,
    Use the following (no variables, supports IE11):
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon.min.css" rel="stylesheet" />
    Learn more: https://www.gethalfmoon.com/docs/customize/#notes-on-browser-compatibility
  -->
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-set-preferred-mode-onload="true">
  <!-- Modals go here -->
  <!-- Reference: https://www.gethalfmoon.com/docs/modal -->

  <!-- Page wrapper start -->
  <div class="page-wrapper with-navbar">

    <!-- Sticky alerts (toasts), empty container -->
    <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
    <div class="sticky-alerts"></div>

    <!-- Navbar start -->
    <nav class="navbar justify-content-center">
        <img class="w-200" src="LOGOSOFO.png">
        
    </nav>
    <!-- Navbar end -->


    <!-- Content wrapper start -->
    <div class="content-wrapper" style="padding: 35px;
    margin: auto;">

    
    <div class="container" >




    <h1>Driver Tracking System</h1>

    <div id="datalariGetir">

    </div>

    <br/>

    <form>
      <label for="username">Driver Name:</label>
      <input class="form-control h-50" type="text" id="username" name="username" required>
      <br>
      <label for="vehiclePlate">Vehicle Plate:</label>
      <input class="form-control h-50" type="text" id="vehiclePlate" name="vehiclePlate" required>
      <br>


      
      <button class="btn baslatici w-full h-50" type="button" id="loadBtn">START LOADING/UNLOADING</button>
      <button class="btn bitirici  w-full h-50" type="button" id="loadBtn2">FINISH LOADING/UNLOADING</button>
      <button class="btn baslatici w-full h-50" type="button" id="driveBtn">START DRIVING</button>
      <button class="btn bitirici  w-full h-50" type="button" id="driveBtn2">FINISH THE DRIVE</button>
      <button class="btn baslatici w-full h-50" type="button" id="pauseBtn">START PAUSE (You have 1 right)</button>
      <button class="btn bitirici  w-full h-50" type="button" id="pauseBtn2">FINISH PAUSE</button>



      <br><br>
      <label for="vehiclekonum">Driving Start Position:</label>
      <input class="form-control h-50" type="text" id="vehiclekonum" name="vehiclekonum">
      <br>
      <label for="vehiclekonum">Drive End Position:</label>
      <input class="form-control h-50" type="text" id="vehiclekonumson" name="vehiclekonum">
      <input class="form-control" type="hidden" id="tumveriyiaktar" name="tumveriyiaktar">
      <br>
      <label>Your comment about the ride:</label>
      <textarea class="form-control" placeholder="Your comment about the ride"></textarea>
      <br>

      <button class="btn btn-danger h-50 w-full" type="button" id="bitisButonu">End today's ride</button>


    </form>

    <br/><br/>
    

    <br/>

   
        
    
   
    <div class="position-fixed bottom-0 left-0 bg-very-dark w-full h-50 text-white d-flex justify-content-center font-size-18 align-items-center border rounded-top">
        

    <p>Instant Date and Time: <span id="currentDateTime"></span></p>


    </div>



    </div>
    </div>
    <!-- Content wrapper end -->

  </div>
  <!-- Page wrapper end -->

  <!-- Halfmoon JS -->
  <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script>
    const usernameInput = document.getElementById("username");
    const vehiclePlateInput = document.getElementById("vehiclePlate");

    const currentDateTimeSpan = document.getElementById("currentDateTime");

    setInterval(function() {
      const currentDateTime = new Date();
      currentDateTimeSpan.innerHTML = "<b>"+currentDateTime.toLocaleString()+"</b>";
    }, 1000);


    const loadBtn = document.getElementById("loadBtn");
    const driveBtn = document.getElementById("driveBtn");
    const pauseBtn = document.getElementById("pauseBtn");

    const loadBtn2 = document.getElementById("loadBtn2");
    const driveBtn2 = document.getElementById("driveBtn2");
    const pauseBtn2 = document.getElementById("pauseBtn2");



    
    

    




    $("#loadBtn2").hide();
    $("#driveBtn").hide();
    $("#driveBtn2").hide();
    $("#pauseBtn").hide();
    $("#pauseBtn2").hide();
    $("#bitisButonu").prop('disabled', true);

    var syacanzi = 1;

    syacanzi++;




    var liste1 = [];
    
    loadBtn.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-success" role="alert"><h4 class="alert-heading">Added Timestamp</h4>LOADING/UNLOADING STARTED '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  

        


        $("#loadBtn").hide();
        $("#loadBtn2").show();
        $("#pauseBtn").hide();
        loadBtn.innerHTML = syacanzi +". START LOADING/UNLOADING";
        $("#username").prop('disabled', true);
        $("#vehiclePlate").prop('disabled', true);


        const daterr = new Date();
        const loadverisaatolustur = daterr.getHours().toString().padStart(2, "0")+"-"+daterr.getMinutes().toString().padStart(2, "0");
        liste1.push(loadverisaatolustur);

     });

    loadBtn2.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-secondary" role="alert"><h4 class="alert-heading">Added Timestamp</h4>LOADING/UNLOADING COMPLETED '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  
        $("#loadBtn2").hide();
        $("#driveBtn").show();
        $("#pauseBtn").show();

        loadBtn2.innerHTML = syacanzi +". FINISH LOADING/UNLOADING";

        const daterr2 = new Date();
        const loadverisaatolustur2 = daterr2.getHours().toString().padStart(2, "0")+"-"+daterr2.getMinutes().toString().padStart(2, "0");
        $('#tumveriyiaktar').val($('#tumveriyiaktar').val()+"[`yukleme`-"+liste1[0]+"-"+loadverisaatolustur2+"];");

        liste1.pop();



        
    });


    var liste2 = [];
    driveBtn.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-success" role="alert"><h4 class="alert-heading">Added Timestamp</h4>DRIVING STARTED '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  
        $("#driveBtn").hide();
        $("#driveBtn2").show();
        $("#pauseBtn").hide();
        driveBtn.innerHTML = syacanzi +". START DRIVING";


        const daterr3 = new Date();
        const loadverisaatolustur3 = daterr3.getHours().toString().padStart(2, "0")+"-"+daterr3.getMinutes().toString().padStart(2, "0");
        liste2.push(loadverisaatolustur3);


    });
    
    driveBtn2.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-secondary" role="alert"><h4 class="alert-heading">Added Timestamp</h4>DRIVE COMPLETED '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  
        $("#driveBtn2").hide();
        $("#loadBtn").show();
        $("#pauseBtn").show();
        driveBtn2.innerHTML = syacanzi +". FINISH THE DRIVE";
        syacanzi++;

        const daterr4 = new Date();
        const loadverisaatolustur4 = daterr4.getHours().toString().padStart(2, "0")+"-"+daterr4.getMinutes().toString().padStart(2, "0");
        $('#tumveriyiaktar').val($('#tumveriyiaktar').val()+"[`direksiyon`-"+liste2[0]+"-"+loadverisaatolustur4+"];");

        liste2.pop();

        $("#bitisButonu").prop('disabled', false);


    });


    var liste3 = [];
    pauseBtn.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-success" role="alert"><h4 class="alert-heading">Added Timestamp</h4>PAYDOS STARTED  '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  
        $("#pauseBtn").hide();
        $("#pauseBtn2").show();
        $("#loadBtn").prop('disabled', true);
        $("#loadBtn2").prop('disabled', true);
        $("#driveBtn").prop('disabled', true);
        $("#driveBtn2").prop('disabled', true);
        const daterr5 = new Date();
        const loadverisaatolustur5 = daterr5.getHours().toString().padStart(2, "0")+"-"+daterr5.getMinutes().toString().padStart(2, "0");
        liste3.push(loadverisaatolustur5);


    });
    pauseBtn2.addEventListener("click", function() {
        $('#datalariGetir').html('<div><br/><div class="alert alert-secondary" role="alert"><h4 class="alert-heading">Added Timestamp</h4>PAYDOS FINISHED  '+$('#currentDateTime')[0]['innerText']+' </div> </div>');  
        $("#pauseBtn2").hide();
        $("#loadBtn").prop('disabled', false);
        $("#loadBtn2").prop('disabled', false);
        $("#driveBtn").prop('disabled', false);
        $("#driveBtn2").prop('disabled', false);
        $("#pauseBtn").prop('disabled', true);
        $("#pauseBtn2").prop('disabled', true);


        

        pauseBtn.innerHTML = "You do not have the right to PAYDOS";
        pauseBtn2.innerHTML = "You do not have the right to PAYDOS";


        const daterr6 = new Date();
        const loadverisaatolustur6 = daterr6.getHours().toString().padStart(2, "0")+"-"+daterr6.getMinutes().toString().padStart(2, "0");
        $('#tumveriyiaktar').val($('#tumveriyiaktar').val()+"[`paydos`-"+liste3[0]+"-"+loadverisaatolustur6+"];");

        liste3.pop();



        
    });


    halfmoon.toggleDarkMode()










    const $usernameInput = $("#username");
  const $licensePlateInput = $("#vehiclePlate");
  const $loadButton = $("#loadBtn");

  checkInputs();

  $usernameInput.on("input", function() {
    checkInputs();
  });

  $licensePlateInput.on("input", function() {
    checkInputs();
  });

  function checkInputs() {
    if ($usernameInput.val().length > 0 && $licensePlateInput.val().length > 0) {
      $loadButton.prop("disabled", false);
    } else {
      $loadButton.prop("disabled", true);
    }
  }







  </script>

  <style>
  .baslatici{
    border: 1px solid green !important;
  }
  .bitirici{
    border: 1px solid red !important;
  }
  .btn{
    margin-bottom:10px !important;
  }
  label{
    font-size:20px;
  }


  </style>
  
</body>
</html>