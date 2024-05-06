    const options = {
        threshold: 0.2,
    };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animation");
            } else {
                entry.target.classList.remove("animation");
            }
        });
    }, options);

    const allElements = document.querySelectorAll(".element-animation");
    allElements.forEach((element) => {
        observer.observe(element);
    })

    const nav = document.querySelector("nav");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 0) {
            nav.classList.add("scroll");
        } else {
            nav.classList.remove("scroll");
        }
    })

    // const btn = document.querySelector(".btn");
    // btn.classList.remove("element-animation");


    const burger = document.querySelector(".fa-bars");
    const cross = document.querySelector(".fa-xmark");
    const links = document.querySelectorAll("nav ul li");
//     const linkRow = document.querySelectorAll("nav ul li");

    function toggleAction () {
        nav.classList.toggle("active"); 
        links.forEach((link) => {
            link.classList.toggle("animation");
        })
    }

    burger.addEventListener("click", function() {
        toggleAction();
    })
    cross.addEventListener("click", function() {
        toggleAction();
    })

   links.forEach((link) => {
        link.addEventListener("click", function() {
            toggleAction();
        })
    })




   