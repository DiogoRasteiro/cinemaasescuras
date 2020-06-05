//Form javascript

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}


//Seating

$(function(){

  $('#btnSeating').on('click', createseating);
  
  
  });
  //Note:In js the outer loop runs first then the inner loop runs completely so it goes o.l. then i.l. i.l .i.l .i.l. i.l etc and repeat
  
  function createseating(){
  
   var seatingValue = [];
   for ( var i = 0; i < 10; i++){
      for (var j=0; j<10; j++){
          var seatingStyle = "<div class='seat available'></div>";
          seatingValue.push(seatingStyle);
  
           if ( j === 9){
          console.log("hi");
           var seatingStyle = "<div class='clearfix'></div>";
          seatingValue.push(seatingStyle);    
       }
    }   
  }
  
  $('#messagePanel').html(seatingValue);
  
         $(function(){
              $('.seat').on('click',function(){ 
  
  
                if($(this).hasClass( "selected" )){
                  $( this ).removeClass( "selected" );                  
                }else{                   
                  $( this ).addClass( "selected" );
                }
  
              });
  
              $('.seat').mouseenter(function(){     
                  $( this ).addClass( "hovering" );
  
                     $('.seat').mouseleave(function(){ 
                     $( this ).removeClass( "hovering" );
                        
                     });
              });
         });  
  };