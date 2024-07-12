document.addEventListener("DOMContentLoaded", function() {
    const questions = document.querySelectorAll(".question");

    questions.forEach(function(question) {
        question.addEventListener("click", function() {
            const answer = this.nextElementSibling;
            answer.classList.toggle("show");
            const sign = this.querySelector(".toggle-sign");
            sign.textContent = sign.textContent === "+" ? "-" : "+";
        });
    });
});
document.getElementById("sendRequest").addEventListener("click", function() {
    alert("Request has been submitted. You will get a response shortly.");
});

