
var loadFile1 = function(event) {
    var image = document.getElementById('output1');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var image = document.getElementById('output2');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var image = document.getElementById('output3');
    image.src = URL.createObjectURL(event.target.files[0]);
  };


  

  function checkBox(){
  
    var terms = document.getElementById('terms');
    var termsError = document.getElementById('termsError');
    
    if (!terms.checked ) {
      termsError.style.display='block';
          
      
      
      return false; // Prevent form submission
    } else {
      termsError.style.display='none';
      
      
      return true; // Allow form submission
    }}




function genderFunc() {
  var genderRadios = document.getElementsByName('gender');
  var isChecked = false;
  for (var i = 0; i < genderRadios.length; i++) {
    if (genderRadios[i].checked) {
      isChecked = true;
      break;
    }
  }
  if (!isChecked) {
    document.getElementById('genderFemaleError').style.display = 'block';
    return false; // Prevent form submission
  } else {
    document.getElementById('genderFemaleError').style.display = 'none';
    return true; // Allow form submission
  }
}


function errorMsg() {
  var fields = [
    { id: 'profilePic', errorId: 'profilePicError' },
      { id: 'firstName', errorId: 'firstNameError' },
      { id: 'lastName', errorId: 'lastNameError' },
      //{ id: 'mobile', errorId: 'mobileError' },
      //{ id: 'cnic', errorId: 'cnicError' },
      { id: 'domicile', errorId: 'domicileError' },
      { id: 'address', errorId: 'addressError' },
      { id: 'city', errorId: 'cityError' },
      { id: 'province', errorId: 'provinceError' },
      { id: 'fatherName', errorId: 'fatherNameError' },
      // { id: 'fatherCnic', errorId: 'fatherCnicError' },
      { id: 'fatherOccupation', errorId: 'fatherOccupationError' },
      { id: 'fatherIncome', errorId: 'fatherIncomeError' },
      { id: 'matricObtainedMarks', errorId: 'matricObtainedMarksError' },
      { id: 'matricTotalMarks', errorId: 'matricTotalMarksError' },
      { id: 'matricSubject1', errorId: 'matricSubject1Error' },
      { id: 'matricSubject2', errorId: 'matricSubject2Error' },
      { id: 'matricSubject3', errorId: 'matricSubject3Error' },
      { id: 'matricSubject4', errorId: 'matricSubject4Error' },
      { id: 'matricDocuments', errorId: 'matricDocumentsError' },
      { id: 'studyFields', errorId: 'studyFieldsError' },
      { id: 'fscObtainedMarks', errorId: 'fscObtainedMarksError' },
      { id: 'fscTotalMarks', errorId: 'fscTotalMarksError' },
      { id: 'fscSubject1', errorId: 'fscSubject1Error' },
      { id: 'fscSubject2', errorId: 'fscSubject2Error' },
      { id: 'fscSubject3', errorId: 'fscSubject3Error' },
      { id: 'fscSubject4', errorId: 'fscSubject4Error' },
      { id: 'fscDocuments', errorId: 'fscDocumentsError' },
      { id: 'chooseField', errorId: 'chooseFieldError' },
      { id: 'terms', errorId: 'termsError' },
      // Add more fields in the same format
    ];

    
    fields.forEach(function(field) {
      var input = document.getElementById(field.id);
      var error = document.getElementById(field.errorId);
      
      if (input.value === '') {
        error.style.display = 'block';
        hasEmptyField = true;
      } else {
        error.style.display = 'none';
      }
  });
  
  
  
  
  return !hasEmptyField; // Return true if no empty fields, false otherwise
}


function emailInput(){

  var email = document.getElementById('email');
  var emailError = document.getElementById('emailError');
  var emailError1 = document.getElementById('emailError1');
  
  if(email.value===''){
    emailError.style.display= 'block';
    emailError1.style.display= 'none';
  }
  else if(!email.validity.valid){
    emailError1.style.display= 'block';
    emailError.style.display= 'none';
  }
  else{
    emailError1.style.display='none';
    emailError.style.display='none';
  }
  
}




function cnicInput(){
  
  var cnic = document.getElementById('cnic');
  var cnicError = document.getElementById('cnicError');
  var cnicError1 = document.getElementById('cnicError1');
  
  if(cnic.value===''){
    cnicError.style.display= 'block';
    cnicError1.style.display= 'none';
  }
  else if(!cnic.validity.valid){
    cnicError1.style.display= 'block';
    cnicError.style.display= 'none';
  }
  else{
    cnicError1.style.display='none';
    cnicError.style.display='none';
  }

}
function fatherCnicInput(){
  
  var fatherCnic = document.getElementById('fatherCnic');
  var fatherCnicError = document.getElementById('fatherCnicError');
  var fatherCnicError1 = document.getElementById('fatherCnicError1');
  
  if(fatherCnic.value===''){
    fatherCnicError.style.display= 'block';
    fatherCnicError1.style.display= 'none';
  }
  else if(!fatherCnic.validity.valid){
    fatherCnicError1.style.display= 'block';
    fatherCnicError.style.display= 'none';
  }
  else{
    fatherCnicError1.style.display='none';
    fatherCnicError.style.display='none';
  }
  
}
function mobileInput(){

  var mobile = document.getElementById('mobile');
  var mobileError = document.getElementById('mobileError');
  var mobileError1 = document.getElementById('mobileError1');

  if(mobile.value===''){
    mobileError.style.display= 'block';
    mobileError1.style.display= 'none';
  }
  else if(!mobile.validity.valid){
    mobileError1.style.display= 'block';
    mobileError.style.display= 'none';
  }
  else{
    mobileError1.style.display='none';
    mobileError.style.display='none';
  }

}



function validateMarks() {
    var matricObtainedMarks = document.getElementById("matricObtainedMarks").value;
    var matricTotalMarks = document.getElementById("matricTotalMarks").value;
    var fscObtainedMarks = document.getElementById("fscObtainedMarks").value;
    var fscTotalMarks = document.getElementById("fscTotalMarks").value;
  
    if (matricObtainedMarks !== "" && matricTotalMarks !== "" && fscTotalMarks !== "" && fscObtainedMarks !== "") {
      if (parseInt(matricObtainedMarks) <= parseInt(matricTotalMarks)) 
      {
        
      } 
      else 
      {
        alert("Validation failed! Obtained marks should be less than or equal to total marks.");
      }
      if (parseInt(fscObtainedMarks) <= parseInt(fscTotalMarks)) 
      {
        
      } 
      else 
      {
        alert("Validation failed! Obtained marks should be less than or equal to total marks.");
      }
    } 
    else {
      alert("Please enter both obtained marks and total marks.");
    }
  }