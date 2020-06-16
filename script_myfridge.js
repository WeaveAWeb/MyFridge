function openFridge(){
  if(document.getElementById("fridge_btn").value=="open"){
  document.getElementById("fridge").src="fridge_opened.png";
  document.getElementById("fridge_btn").value="close";
  document.getElementById("instantBtn").style.display="block";
  // document.getElementById("add_instant").disable="flase";
}
else if(document.getElementById("fridge_btn").value=="close"){
  document.getElementById("fridge").src="fridge_closed.png";
  document.getElementById("fridge_btn").value="open";
  document.getElementById("instantBtn").style.display="none";
  document.getElementById("instantList").style.display="none";
}
}

function showInst(){
  document.getElementById("instantList").style.display="block";
}
function closeList(){
  document.getElementById("instantList").style.display="none";
}

function chickenClick(){
  if(document.getElementById("chicken").style.opacity=="1"){
  document.getElementById("chicken").style.opacity="0.5";}
  else if(document.getElementById("chicken").style.opacity=="0.5"){
  document.getElementById("chicken").style.opacity="1";}
}
function mandooClick(){
  if(document.getElementById("mandoo").style.opacity=="1"){
  document.getElementById("mandoo").style.opacity="0.5";}
  else if(document.getElementById("mandoo").style.opacity=="0.5"){
  document.getElementById("mandoo").style.opacity="1";}
}
function dongasClick(){
  if(document.getElementById("dongas").style.opacity=="1"){
  document.getElementById("dongas").style.opacity="0.5";}
  else if(document.getElementById("dongas").style.opacity=="0.5"){
  document.getElementById("dongas").style.opacity="1";}
}
function pizzaClick(){
  if(document.getElementById("pizza").style.opacity=="1"){
  document.getElementById("pizza").style.opacity="0.5";}
  else if(document.getElementById("pizza").style.opacity=="0.5"){
  document.getElementById("pizza").style.opacity="1";}
}
