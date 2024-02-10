//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ desktop - PC / all - to invoke on all devices)
const toInvoke = function (callback, view = 'all', selector) {
    if (document.querySelector(selector) !== null || document.querySelector(selector) !== undefined) {
        if (view === 'mobile' && window.innerWidth <= 979) {
            return callback()
        }
        if (view === 'desktop' && (window.innerWidth > 979)) {
            return callback()
        }
        if (view === 'all') {
            return callback()
        }
    }
}

toInvoke(() => {
    particlesJS.load("particles-js", "assets/particles.json");
}, 'all', '#particles-js')

/*Intro animation*/
toInvoke(() => {
    window.addEventListener("DOMContentLoaded", () => {
        const intro = document.querySelector("#intro");
        setTimeout(() => {
            intro.style.top = "-100vh";
        }, 1500);
    });

}, 'all', '#intro')


/*Auto write text*/
toInvoke(() => {

    const app = document.getElementById("autoWrite");

    new Typewriter(app, {
        strings: ["Full-stack developer"],
        loop: true,
        autoStart: true,
    });
}, 'all', '#autoWrite')

// to add animation while content appears on the page
toInvoke(() => {
    const sr = ScrollReveal({
        origin: "top",
        distance: "40px",
        duration: 2000,
        reset: true,
    });

    sr.reveal(".home__content", {delay: 200});
    sr.reveal(".home__img", {delay: 200});
    sr.reveal(".home__social", {delay: 200});

    sr.reveal(".about__img", {});
    sr.reveal(".about__content", {delay: 400});
    sr.reveal(".skills__wrapper", {delay: 400});
    sr.reveal(".work__items .work__item", {interval: 200});

}, 'desktop', 'main')

// to show galery when click on work thile 
toInvoke(() => {

    const showWorkButtons = document.querySelectorAll('#works .work__item .detailButton')

    showWorkButtons.forEach(function (button) {
        button.addEventListener('click', (event) => {
            event = event || window.event
            const target = event.target || event.srcElement
            const link = target.src ? target.parentNode : target
            const options = {index: link, event: event}
            let links = button.closest('.work__item')
            links = links.querySelectorAll('.images .image')

            blueimp.Gallery(links, options)
        })
    })
}, 'all', '#works')


// set active for navigation link
toInvoke(() => {

    const navListItems = document.querySelectorAll('#navlist .nav_link')

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const intersecting = entry.isIntersecting
            const id = entry.target.getAttribute('id')

            let activeTab = Array.from(navListItems).filter(item => {
                const href = item.getAttribute('data-href')
                if (href === `#${id}`) {
                    return item
                }
            })

            if (intersecting) {
                activeTab[0].classList.add('active')
            } else {
                activeTab[0].classList.remove('active')
            }

        })
    }, {
        rootMargin: "40px",
        threshold: 0.25,
    })

    const sections = document.querySelectorAll('section')
    sections.forEach(section => {
        observer.observe(section)
    })
}, 'desktop', 'main')

//smoothscroll to element
toInvoke(() => {
    const navListItems = document.querySelectorAll('#navlist .nav_link')
    let scrollOption = {duration: 700, block: '50%'}
    const scroller = new smoothScroll(scrollOption);

    navListItems.forEach(link => {
        link.addEventListener('click', function () {
            const sectionId = this.getAttribute('data-href').replace('#', '').trim();

            if (sectionId === 'works') {
                smoothScroll({yPos: document.querySelector('#works').offsetTop - 80});

            } else {
                scroller.smoothScroll({
                    toElement: document.querySelector(`section[id=${sectionId}]`)
                });
            }
        })
    })
}, 'all', 'main')

//to show mobileMenu
toInvoke(() => {
    const menuBtnOpen = document.querySelector('#navToggle')
    const menuBtnClose = document.querySelector('#closeNavMenu')
    const html = document.querySelector('html')
    const navigationLinks = document.querySelectorAll('#navlist .nav_link')

    menuBtnOpen.addEventListener('click', () => {
        html.classList.add('_showMobileNav')
    })
    menuBtnClose.addEventListener('click', () => {
        html.classList.remove('_showMobileNav')
    })

    navigationLinks.forEach(link => {
        link.addEventListener('click', () => {
            html.classList.remove('_showMobileNav')
        })
    })

}, 'mobile', '#navToggle')
























