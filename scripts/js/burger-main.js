const menuBtn = document.querySelector('.burger'); 
const menuSidebar = document.querySelector('.menu'); 

//menuBtn.addEventListener("touchstart", function() {	
    //menuBtn.classList.toggle('active'); 	
    //menuSidebar.classList.toggle('active');})

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger").addEventListener("click", function() {
        document.querySelector("header").classList.toggle("open")
    })
})
