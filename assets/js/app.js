var dropdown = document.getElementById("dropdown");
var container = document.getElementById("dropdownContainer");
    
container.addEventListener("mouseenter",()=>{
    dropdown.style.display = "flex";
});
dropdown.addEventListener("mouseleave",()=>{
    dropdown.style.display = "none";
});