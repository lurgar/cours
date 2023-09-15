//La const qui récupére la class .hamburger
const toggler = document.querySelector(".hamburger");

const toggleButton = e => {
//Animation du boutton
    toggler.classList.toggle("open");
};

//Au click lance la cont toggleButton
toggler.addEventListener("click", toggleButton);




