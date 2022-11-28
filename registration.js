var registry1 = document.getElementById("registry1");
var registry2 = document.getElementById("registry2");
var next = document.getElementById("next_button");
var back = document.getElementById("back_button");

next.addEventListener("click", function(){
    if(registry1.style.display==="none"){
        registry2.style.display="block";
    }else{
        registry1.style.display="none";
        registry2.style.display="block";
    }
});

back.addEventListener("click", function(){
    if(registry1.style.display==="block"){
        registry2.style.display="none";
    }else{
        registry1.style.display="block";
        registry2.style.display="none";
    }
})