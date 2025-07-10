

//menu
function openmenu() {
    document.getElementById("menucont").style.display = "block";
    document.getElementById("void").style.display = "block";
   
  }
  function closemenu() {
    document.getElementById("menucont").style.display = "none";
    document.getElementById("void").style.display = "none";
   
  }

//product description
  function opencart(){
    document.getElementById("cart").style.display = "block";
    document.getElementById("void1").style.display = "block";
   

  }
  
  function closecart() {
    document.getElementById("cart").style.display = "none";
    document.getElementById("void1").style.display = "none";
    
  }

  
//about us
function openabtus(){
  document.getElementById("abtus").style.display = "block";
  document.getElementById("void2").style.display = "block";
  document.getElementById("menucont").style.display = "none";

}

function closeabtus() {
  document.getElementById("abtus").style.display = "none";
  document.getElementById("void2").style.display = "none";
  
}



//orders
function openorderswin(){
  document.getElementById("orderswin").style.display = "block";
  document.getElementById("void3").style.display = "block";
  document.getElementById("menucont").style.display = "none";


  document.getElementById("torecieve").style.display = "block";
  document.getElementById("torec").style.cssText="color:black; border-color:black;";
  document.getElementById("recorders").style.color = " #afaeae";
  document.getElementById("trate").style.color = " #afaeae";
  document.getElementById("hist").style.color = " #afaeae";
 
  
  

}

function closeorderswin() {
  document.getElementById("orderswin").style.display = "none";
  document.getElementById("void3").style.display = "none";

  document.getElementById("torecieve").style.display = "none";
  document.getElementById("recievedorders").style.display = "none";
  document.getElementById("torate").style.display = "none";
  document.getElementById("history").style.display = "none";
  document.getElementById("torecieve").style.display = "none";
}
  


///////////////////////////////////////////// orders TABBBB

//to recieve  tab
function opentorecieve(){
  
 
  


 document.getElementById("torec").style.cssText="color:  black; border-color : black;";
 document.getElementById("recorders").style.cssText="color:  #afaeae; borderColor : #afaeae;";
 document.getElementById("trate").style.cssText="color:  #afaeae; borderColor : #afaeae;";
 document.getElementById("hist").style.cssText="color:  #afaeae; borderColor : #afaeae;";


  document.getElementById("torecieve").style.display = "block";
  document.getElementById("recievedorders").style.display = "none";
  document.getElementById("torate").style.display = "none";
  document.getElementById("history").style.display = "none";
}


//recieved orders  tab
function openrecorders(){

  
 document.getElementById("torec").style.cssText="color:  #afaeae; border-color : #afaeae;";
 document.getElementById("recorders").style.cssText="color:  black; border-color  : black;";
 document.getElementById("trate").style.cssText="color:  #afaeae;  border-color  : #afaeae;";
 document.getElementById("hist").style.cssText="color:  #afaeae; border-color  : #afaeae;";


  document.getElementById("torecieve").style.display = "none";
  document.getElementById("recievedorders").style.display = "block";
  document.getElementById("torate").style.display = "none";
  document.getElementById("history").style.display = "none";
}


//to rate  tab
function opentorate(){
  
 document.getElementById("torec").style.cssText="color:  #afaeae;  border-color : #afaeae;";
 document.getElementById("recorders").style.cssText="color:  #afaeae; border-color : #afaeae;";
 document.getElementById("trate").style.cssText="color:  black;  border-color  : black;";
 document.getElementById("hist").style.cssText="color:  #afaeae;  border-color  : #afaeae;";

  document.getElementById("torecieve").style.display = "none";
  document.getElementById("recievedorders").style.display = "none";
  document.getElementById("torate").style.display = "block";
  document.getElementById("history").style.display = "none";
}


//history or orders  tab
function openhist(){

 document.getElementById("torec").style.cssText="color:  #afaeae;  border-color  : #afaeae;";
 document.getElementById("recorders").style.cssText="color:  #afaeae;  border-color  : #afaeae;";
 document.getElementById("trate").style.cssText="color:  #afaeae;  border-color  : #afaeae;";
 document.getElementById("hist").style.cssText="color:  black;  border-color : black;";

  document.getElementById("torecieve").style.display = "none";
  document.getElementById("recievedorders").style.display = "none";
  document.getElementById("torate").style.display = "none";
  document.getElementById("history").style.display = "block";
}

