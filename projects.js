document.addEventListener('DOMContentLoaded', function () {
let c = document.getElementById("changesnotes");


let d = document.getElementById("close").addEventListener("click", function(){
    c.style.display = "none";
    });
  
  let e = document.getElementById("link2").addEventListener("click", function(){
  c.style.display = "block";
  });
});