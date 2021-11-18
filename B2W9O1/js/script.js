var burger = document.getElementById("burger-menu");
var navitems = document.getElementById("navitems");

burger.onclick = function(){
    if(navitems.style.display != "block"){
        navitems.style.display = "block";
    }
    else{
        navitems.style.display = "none";
    }
}