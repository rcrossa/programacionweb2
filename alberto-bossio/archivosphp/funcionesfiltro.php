<!--
<!DOCTYPE html>
<html>

<script>

<<<<<<< HEAD
filterSelection("Todo")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "Todo") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
=======
filterSelection('Todo')
function filterSelection($productos) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if ($productos == 'Todo') $productos = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf($productos) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
>>>>>>> Rodri-toyama
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

<<<<<<< HEAD
function w3RemoveClass(element, name) {
=======
function RemoveClass(element, name) {
>>>>>>> Rodri-toyama
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

<<<<<<< HEAD
// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


</script>

</html>
=======
</script>

</html>

<script>
document.getElementById("click").onclick = function(){
  filter_list()
}
</script>
>>>>>>> Rodri-toyama
-->