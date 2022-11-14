const toggleBtn = document.querySelector(".navbar_toggleBtn");
const menu = document.querySelector(".navbar_menu");

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
});


const introText = document.querySelectorAll("p");
window.onload = () =>{
    let timer = 100;
    introText.forEach((item) => {
        item.getElementsByClassName.animation = `fade 500ms ${(timer += 50)}ms fowards`;
    });
};