var eduEdit = document.getElementById("eduEdit");
var topicEdit = document.getElementById("topicEdit");
var counslorEdit = document.getElementById("counslorEdit");
var educationBtn = document.getElementById("educationBtn");
var topicBtn = document.getElementById("topicBtn");
var counslorBtn = document.getElementById("counslorBtn");

educationBtn.addEventListener("click", function(){
    eduEdit.style.display="block";
    topicEdit.style.display="none";
    counslorEdit.style.display="none";
});

topicBtn.addEventListener("click", function(){
    eduEdit.style.display="none";
    topicEdit.style.display="block";
    counslorEdit.style.display="none";
});

counslorBtn.addEventListener("click", function(){
    eduEdit.style.display="none";
    topicEdit.style.display="none";
    counslorEdit.style.display="block";
});
