$("#regButton").on("click", (e)=>{
  //Prevent html submission
  e.preventDefault();

  //Checks
  //if(!checkEmptyInput()){return;}
  if(!validateEmail($(":input")[1].value)){
    alert("Invalid email format, please try again");
    return;
  }

  //Passed from validations
  var AjaxObject = $.ajax({
    type: "POST",
    url: "./registerBackend.php",
    data: {
      "userId" : $(":input")[0].value,
      "email" : $(":input")[1].value,
      "username" : $(":input")[2].value,
      "password" : $(":input")[3].value,
    }
  });

  AjaxObject.done(data=>{
    alert(data);
  });

})



$("#logButton").on("click", (e)=>{
  //Prevent html submission
  e.preventDefault();

  //Checks
  //if(!checkEmptyInput()){return;}

  //Passed from validations
  var AjaxObject = $.ajax({
    type: "POST",
    url: "./loginBackend.php",
    data: {
      "username" : $(":input")[0].value,
      "password" : $(":input")[1].value,
    }
  });

  AjaxObject.done(data=>{
    alert(data);
  });

})



//Helper functions
function validateEmail(email){
    var regex = /\S+@\S+\.\S+/;
    return regex.test(email);
}

function checkEmptyInput(){
  let data = $(":input");
  for(let i=0; i<data.length; i++){
    if(data[i].value.trim() === ""){
      alert("Please fill all fields");
      return false;
    }
  }
    return true;
}
