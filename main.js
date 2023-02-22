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


