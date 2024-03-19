window.addEventListener('DOMContentLoaded', ()=> {
    setTimeout(() => {
        if (document.querySelector(".preloader")) {
            document.querySelector(".preloader").classList.add("hidden");
        }
    }, 1000);
})