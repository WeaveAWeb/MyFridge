function show_fridge(){
  window.open("dbRead.php","add_popup","width=400,height=300,left=400,top=200");
}
function popup(){
  window.open("add_popup.html","add_popup","width=400,height=300,left=400,top=200");
}

function add_meat(){
  document.getElementById("kind").value="meat";
  popup();
}
function add_grilled(){
  document.getElementById("kind").value="meat";
  document.getElementById("name").value="slicedPork";
  popup();
}
function add_pork(){
  document.getElementById("kind").value="meat";
  document.getElementById("name").value="porkBelly";
  popup();
}
function add_onion(){
  document.getElementById("kind").value="vegetable";
  document.getElementById("name").value="onion";
  popup();
}
function add_pa(){
  document.getElementById("kind").value="vegetable";
  document.getElementById("name").value="파";
  popup();
}
function add_potato(){
  document.getElementById("kind").value="vegetable";
  document.getElementById("name").value="감자";
  popup();
}
function add_carrot(){
  document.getElementById("kind").value="vegetable";
  document.getElementById("name").value="당근";
  popup();
}
