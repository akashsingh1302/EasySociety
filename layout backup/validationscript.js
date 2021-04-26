
// Validating Flat Owner Name
function namecheck(){
  var name;
  name = document.getElementById("owner").value;
  var res = name.split(" ");
  if(res.length > 4)
  {
      alert("The entered name contains too many words or just whitespaces");
      return;
  }
  else
  res.forEach(myFunction);
}

function myFunction(value, index, array) 
{
  var letters = /[0-9`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
  if(value.match(letters)){
      alert("Use of invalid characters in a name");
      return;
  }
  else if(value.length<3)
  {
      alert("Words are too short or contains just whitespaces");
      return;
  }
}

//Validating Contact Number
function validatecontact(){

  var mob = document.getElementById("phone").value;
  var phoneno = /^\d{10}$/;
  if((!mob.match(phoneno)) || mob[0] < 6)
  {
    alert("Enter Valid 10 digit Indian mobile Number");
    return;
  }
}

//Validating Email Address
function validateemail()
{
  var email = document.getElementById("emailaddr").value;
  if(!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)))
  {
    alert("You have entered an invalid email address!")
    return;
  }

}
// Validating No of housing members
function membercheck() {
  var m;
  m = document.getElementById("members").value;
  if (isNaN(m) || m < 0 || m > 10) {
   alert("The Maximum Members per flat cannot exceed 10.");
   return;
  }
}

// Validating Flat Area
function areacheck(){
  var x;
  x = document.getElementById("farea").value;
  if (isNaN(x) || x < 250 || x > 500) {
   alert("Square feet area allowed between 250 & 500");
   return;
   }
}

// Validating Two Wheelers
function twowheelcheck(){
  var y;
  y = document.getElementById("twowheel").value;
  if (isNaN(y) || y < 0 || y > 2) {
   alert("Maximum two wheelers allowed per flat is 2.");
   return;
  }
  
}

// Validating Four Wheelers
function fourwheelcheck(){
  var z;
  z = document.getElementById("fourwheel").value;
  if (isNaN(z) || z < 0  || z > 2) {
   alert("Maximum four wheelers allowed per flat is 2.");
   return;
  }
}

// Validating Remaining Dues
function validatedues(){
  var dues;
  dues = document.getElementById("r_dues").value;
  if(isNaN(dues) || dues > 10000)
  {
    alert("Amount Entered is larger than 10K");
    return;
  }
}

// Validating Username
function usernamecheck(){
    var uname;
    uname = document.getElementById("username").value;
    
    var letters = /^[A-Za-z0-9@_]+$/;
    if(!uname.match(letters)){
        alert("Username contains invalid characters");
    }
    else if(uname.length < 5){
    alert("Length too short for a username");
    }
}

// Code Logic for Selecting Flat Address
 


function countryChange(selectObj) { 

  var countryLists = new Array(4) 
  countryLists["empty"] = ["Select a Flat"]; 
  countryLists["one"] = ["101", "102", "103","104"]; 
  countryLists["two"] = ["201", "202", "203","204"]; 
  countryLists["three"] = ["301", "302", "303","304"]; 
  countryLists["four"]= ["401", "402", "403","404"]; 
 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value;  

 cList = countryLists[which]; 
 var cSelect = document.getElementById("flatnumber"); 
 var len=cSelect.options.length; 

 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 

 var newOption; 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  
 newOption.text=cList[i]; 

 try { 
 cSelect.add(newOption);
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 

 } 
 } 

function wingcheck(){
    var wing = document.getElementById("wing").value;
    if(wing == "a")
    {
        alert("Select a Valid Wing");
        document.newmember.wing.focus();
        return;
    }
}

function floorcheck(){
    var floor = document.getElementById("floor").value;
    if(floor == "empty")
    {
        alert("Select a Valid FLoor");
        document.newmember.floor.focus();
        return;
    }
}

function flatnocheck(){
    var flatno = document.getElementById("flatnumber").value;
    if(flatno == "0")
    {
        alert("Select a Valid Flat Number");
        document.newmember.flatno.focus();
        return;
    }
}

function namecheck(){
    var name;
    name = document.getElementById("owner").value;
    var res = name.split(" ");
    console.log("Entering");
    if(res.length > 4)
    {
        var w = window.open('','','width=100,height=100');
        w.document.write('The entered name contains too many words or just whitespaces');
        w.focus();
        setTimeout(function() {w.close();}, 5000);
        document.newmember.owner.focus();
        return;
    }
    else
    return res.forEach(myFunction);
  }
  
  function myFunction(value, index, array) 
  {
    var letters = /[0-9`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    if(value.match(letters)){
        alert("Use of invalid characters in a name");
        document.newmember.owner.focus();
        return;
    }
    else if(value.length<3)
    {
        alert("Words are too short or contains just whitespaces");
        document.newmember.owner.focus();
        return;
    }
  }
  
  //Validating Contact Number
  function validatecontact(){
  
    var mob = document.getElementById("phone").value;
    var phoneno = /^\d{10}$/;
    if((!mob.match(phoneno)) || mob[0] < 6)
    {
      alert("Enter Valid 10 digit Indian mobile Number");
      document.newmember.phoneno.focus();
      return;
    }
  }
  
  //Validating Email Address
  function validateemail()
  {
    var email = document.getElementById("emailaddr").value;
    if(!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)))
    {
      alert("You have entered an invalid email address!")
      document.newmember.email.focus();
      return;
    }
  }
  // Validating No of housing members
  function membercheck() {
    var m;
    m = document.getElementById("members").value;
    if (isNaN(m) || m < 0 || m > 10) {
     alert("The Maximum Members per flat cannot exceed 10.");
     document.newmember.members.focus();
     return;
    }
  }
  
  // Validating Flat Area
  function areacheck(){
    var x;
    x = document.getElementById("farea").value;
    if (isNaN(x) || x < 250 || x > 500) {
     alert("Square feet area allowed between 250 & 500");
     document.newmember.area.focus();
     return;
     }
  }
  
  // Validating Two Wheelers
  function twowheelcheck(){
    var y;
    y = document.getElementById("twowheel").value;
    if (isNaN(y) || y < 0 || y > 2) {
     alert("Maximum two wheelers allowed per flat is 2.");
     document.getElementById("twowheel").focus();
     return;
    }
  }
  
  // Validating Four Wheelers
  function fourwheelcheck(){
    var z;
    z = document.getElementById("fourwheel").value;
    if (isNaN(z) || z < 0  || z > 2) {
     alert("Maximum four wheelers allowed per flat is 2.");
     document.getElementById("fourwheel").focus();
     return;
    }

  }
  
  // Validating Remaining Dues
  function validatedues(){
    var dues;
    dues = document.getElementById("r_dues").value;
    if(isNaN(dues) || dues > 10000)
    {
      alert("Amount Entered is larger than 10K");
      document.newmember.r_dues.focus();
      return;
    }
  }
  
  // Validating Username
  function usernamecheck(){
      var uname;
      uname = document.getElementById("username").value;
      
      var letters = /^[A-Za-z0-9@_]+$/;
      if(!uname.match(letters)){
          alert("Username contains invalid characters");
          document.newmember.username.focus();
          return false;
      }
      else if(uname.length < 5){
      alert("Length too short for a username");
      document.newmember.username.focus();
      return;
      }
  }