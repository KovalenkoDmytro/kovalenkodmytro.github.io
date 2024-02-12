//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ desktop - PC / all - to invoke on all devices)

const dataWorks = {
    "comel" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/comel/1.webp",
            "alt": "comel",
            "width": "1792",
            "height": "4048"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/comel/2.webp",
            "alt": "comel",
            "width": "1504",
            "height": "5569"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/comel/3.webp",
            "alt": "comel",
            "width": "1492",
            "height": "5192"
        }
    ],
    "eviso" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/eviso/1.webp",
            "alt": "comel",
            "width": "2560",
            "height": "6732"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/eviso/2.webp",
            "alt": "comel",
            "width": "1744",
            "height": "6067"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/eviso/3.webp",
            "alt": "comel",
            "width": "1726",
            "height": "11201"
        }
    ],
    "ezebra" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ezebra/1.webp",
            "alt": "ezebra",
            "width": "2240",
            "height": "6781"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ezebra/2.webp",
            "alt": "ezebra",
            "width": "1824",
            "height": "5934"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ezebra/3.webp",
            "alt": "ezebra",
            "width": "1842",
            "height": "7592"
        }
    ],
    "nextEstate" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nextEstate/1.webp",
            "alt": "gunfire",
            "width": "2537",
            "height": "9401"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nextEstate/2.webp",
            "alt": "gunfire",
            "width": "2183",
            "height": "3311"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nextEstate/3.webp",
            "alt": "gunfire",
            "width": "2560",
            "height": "9079"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nextEstate/4.webp",
            "alt": "gunfire",
            "width": "2560",
            "height": "2482"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nextEstate/4.webp",
            "alt": "gunfire",
            "width": "2560",
            "height": "4543"
        }
    ],
    "gunfire" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/gunfire/1.webp",
            "alt": "gunfire",
            "width": "2560",
            "height": "5620"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/gunfire/2.webp",
            "alt": "gunfire",
            "width": "2584",
            "height": "6375"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/gunfire/3.webp",
            "alt": "gunfire",
            "width": "1360",
            "height": "3824"
        }
    ],
    "nizel" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nizel/1.webp",
            "alt": "nizel",
            "width": "1510",
            "height": "5933"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nizel/2.webp",
            "alt": "nizel",
            "width": "1629",
            "height": "10102"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/nizel/3.webp",
            "alt": "nizel",
            "width": "1545",
            "height": "4408"
        }
    ],
    "pakolorente" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pakolorente/1.webp",
            "alt": "pakolorente",
            "width": "2002",
            "height": "5708"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pakolorente/2.webp",
            "alt": "pakolorente",
            "width": "1896",
            "height": "4712"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pakolorente/3.webp",
            "alt": "pakolorente",
            "width": "1979",
            "height": "8961"
        }
    ],
    "pinali" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pinali/1.webp",
            "alt": "pinali",
            "width": "1920",
            "height": "5520"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pinali/2.webp",
            "alt": "pinali",
            "width": "1273",
            "height": "3922"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/pinali/3.webp",
            "alt": "pinali",
            "width": "1979",
            "height": "8961"
        }
    ],
    "sollux" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/sollux/1.webp",
            "alt": "sollux",
            "width": "1286",
            "height": "9620"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/sollux/2.webp",
            "alt": "sollux",
            "width": "1258",
            "height": "5619"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/sollux/3.webp",
            "alt": "sollux",
            "width": "1342",
            "height": "16383"
        }
    ],
    "telimena" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/telimena/1.webp",
            "alt": "telimena",
            "width": "1849",
            "height": "5257"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/telimena/2.webp",
            "alt": "telimena",
            "width": "1716",
            "height": "4343"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/telimena/3.webp",
            "alt": "telimena",
            "width": "1733",
            "height": "6839"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/telimena/4.webp",
            "alt": "telimena",
            "width": "1713",
            "height": "4601"
        }
    ],
    "ultraupgrate" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ultraupgrate/1.webp",
            "alt": "ultraupgrate",
            "width": "2049",
            "height": "7408"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ultraupgrate/2.webp",
            "alt": "ultraupgrate",
            "width": "1566",
            "height": "7673"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/ultraupgrate/3.webp",
            "alt": "ultraupgrate",
            "width": "1365",
            "height": "6111"
        }
    ],
    "welleundpartner" : [
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/welleundpartner/1.webp",
            "alt": "welleundpartner",
            "width": "2560",
            "height": "5057"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/welleundpartner/2.webp",
            "alt": "welleundpartner",
            "width": "2560",
            "height": "3479"
        },
        {
            "src": "https://dmytrokovalenko.online/assets/img/works/welleundpartner/3.webp",
            "alt": "welleundpartner",
            "width": "2560",
            "height": "4831"
        }
    ]
}


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
    window.addEventListener("DOMContentLoaded", () => {
        new Blazy({
            selector: '.b-lazy'
            ,
        });
    });
}, 'all', 'main')



toInvoke(() => {
    window.addEventListener("DOMContentLoaded", () => {
        particlesJS.load("particles-js", "assets/particles.json");
    });

}, 'all', '#particles-js')

/*Intro animation*/
toInvoke(() => {
    window.addEventListener("DOMContentLoaded", () => {
        const intro = document.querySelector("#intro");
        setTimeout(() => {
            intro.style.top = "-100dvh";

        }, 1500);
    });

}, 'desktop', '#intro')


/*Auto write text*/
toInvoke(() => {

    const app = document.getElementById("autoWrite");
    new Typewriter(app, {
        strings: ["Full-stack developer"],
        loop: true,
        autoStart: true,
    });
}, 'desktop', '#autoWrite')

// to add animation while content appears on the page
toInvoke(() => {
    const sr = ScrollrevealMin({
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

    const showWorkButtons = document.querySelectorAll('#works .work__item .galery .btn')


    showWorkButtons.forEach(function (button) {
        button.addEventListener('click', (event) => {
            const galleryName = event.target.getAttribute('data-gallery')
            const dataSource = dataWorks[`${galleryName}`]
            const options = {
                dataSource : dataSource,
                mouseMovePan: true,
                wheelToZoom: true,
                pswpModule: PhotoSwipe,
            };

            options.index = 0; // defines start slide index
            const pswp = new PhotoSwipe(options);
            pswp.init();

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
























