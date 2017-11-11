var currentBox = 1;

function rotateBox(direction){

  if(direction == "Next"){
    var current = document.getElementById(String(currentBox));
    var next = document.getElementById(String(currentBox+1));
    if(next != null){
      console.log("there is no next card");
      current.className = "left-side";
      next.className = "front-side";
      currentBox++;
    }

  }else if(direction == "Back"){
    var current = document.getElementById(String(currentBox-1));
    var next = document.getElementById(String(currentBox));
    if(current != null){
      current.className = "front-side";
      next.className = "right-side";
      currentBox--;
    }
  }
}
