var dropdown = document.getElementById("dropdown");
var dropdown1 = document.getElementById("dropdown1");
var container = document.getElementById("dropdownContainer");
var container1 = document.getElementById("dropdownContainer1");

container.addEventListener("mouseenter",()=>{
    dropdown.style.display = "flex";
});
container1.addEventListener("mouseenter",()=>{
    dropdown1.style.display = "flex";
});
dropdown.addEventListener("mouseleave",()=>{
    dropdown.style.display = "none";
});
dropdown1.addEventListener("mouseleave",()=>{
    dropdown1.style.display = "none";
});