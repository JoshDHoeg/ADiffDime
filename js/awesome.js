//javascript functions
function navopen(){
  console.log("open");
  document.getElementById("sidenav").style.display = "block";
  document.getElementById("sidenav").style.width = "100%";
  document.getElementById("navclose").style.display = "block";
  document.getElementById("navopen").style.display = "none";
}

function navclose(){
  console.log("close");
  document.getElementById("sidenav").style.display = "none";
  document.getElementById("navclose").style.display = "none";
  document.getElementById("navopen").style.display = "block";
}
