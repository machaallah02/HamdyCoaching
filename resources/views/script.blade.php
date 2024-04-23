<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/lib/jquery/jquery.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>
<script>
    function showDropdownMenu() {
        document.getElementById('coachingDropdown').classList.add('show');
    }
</script>
<script>
    function hideDropdownMenu() {
        document.getElementById('coachingDropdown').classList.remove('show');
    }
    window.addEventListener("scroll", function() {
        const scrollToTopButton = document.querySelector(".scroll-to-top .btn");
        if (window.scrollY > 300) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });

    // Fait remonter en haut de la page lorsque la flèche est cliquée
    document.querySelector(".scroll-to-top .btn").addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });



    document.getElementById('rhButton').addEventListener('click', function() {
        var rhContent = document.getElementById('rhContent');
        rhContent.classList.toggle('hidden');
        this.innerHTML = rhContent.classList.contains('hidden') ? '&#43;' : '&#8722;';
    });

    document.getElementById('collaborateursButton').addEventListener('click', function() {
        var collaborateursContent = document.getElementById('collaborateursContent');
        collaborateursContent.classList.toggle('hidden');
        this.innerHTML = collaborateursContent.classList.contains('hidden') ? '&#43;' : '&#8722;';
    });

    document.getElementById('utilisateursButton').addEventListener('click', function() {
        var utilisateursContent = document.getElementById('utilisateursContent');
        utilisateursContent.classList.toggle('hidden');
        this.innerHTML = utilisateursContent.classList.contains('hidden') ? '&#43;' : '&#8722;';
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.getElementById('slides');
        const slideWidth = window.innerWidth; // Largeur de chaque slide
        let currentSlide = 0;
        let slideInterval;


        // Intervalle de changement de diapositive en millisecondes (par exemple, 3000 pour 3 secondes)
        const intervalDuration = 5000; // Changer cette valeur selon vos besoins

        function startSlideInterval() {
            slideInterval = setInterval(nextSlide, intervalDuration);
        }

        function stopSlideInterval() {
            clearInterval(slideInterval);
        }

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= slides.children.length) {
                currentSlide = 0;
            }
            updateCarousel();
        }

        function prevSlide() {
            currentSlide--;
            if (currentSlide === -1) {
                currentSlide = slides.children.length - 1;
            }
            updateCarousel();
        }

        function updateCarousel() {
            // Empêcher le débordement horizontal
            document.body.style.overflowX = 'hidden';

            // Déplacer le conteneur des diapositives pour afficher la diapositive actuelle avec une transition
            slides.style.transition = 'transform 1s ease-in-out';
            slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
        }

        // Ajuster la largeur du conteneur de slides en fonction du nombre total de slides
        slides.style.width = `${slideWidth * slides.children.length}px`;

        startSlideInterval();

        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        prevBtn.addEventListener('click', function() {
            stopSlideInterval();
            prevSlide();
            startSlideInterval();
        });

        nextBtn.addEventListener('click', function() {
            stopSlideInterval();
            nextSlide();
            startSlideInterval();
        });
    });
</script>







<script>
    function toggleDescription() {
        var description = document.querySelector('.article-description');
        var fullDescription = document.querySelector('.article-full-description');
        var buttonText = document.querySelector('button');

        if (description.classList.contains('truncate')) {
            description.classList.remove('truncate');
            buttonText.textContent = "Lire moins";
        } else {
            description.classList.add('truncate');
            buttonText.textContent = "Lire plus";
        }

        fullDescription.classList.toggle('hidden');
    }
</script>

<script>
    const ratio = .1
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: ratio
    };
    const handleIntersect = function(entries, observer) {
        // entries.forEach((entry)=>{
        //     console.log(entry.intersectionRatio)
        // })
        entries.forEach(function(entry) {
            if (entry.intersectionRatio > ratio) {
                entry.target.classList.add('reveal-visible')
                observer.unobserve(entry.target)
            }
        });
    }
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('[class*="reveal-"]').forEach(function(r) {
        observer.observe(r)
    })
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Sélectionner les éléments des flèches
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');

        // Sélectionner les images à afficher et masquer
        const leftImage = document.getElementById('leftArrow');
        const rightImage = document.getElementById('rightArrow');

        // Cacher l'image de droite au démarrage
        rightImage.style.display = 'none';

        const cols = document.querySelectorAll('.col');
        cols.forEach(function(col) {
            col.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const targetDiv = document.getElementById(targetId);
                const allDivs = document.querySelectorAll('[id^="div"]');
                allDivs.forEach(function(div) {
                    div.classList.add('hidden');
                });
                targetDiv.classList.remove('hidden');

                // Changer la visibilité des flèches en fonction de la div affichée
                switch (targetId) {
                    case 'div1':
                        leftArrow.style.display = 'block';
                        rightArrow.style.display = 'none';
                        break;
                    case 'div2':
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                    case 'div3':
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                    case 'div4':
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                    case 'div5':
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                    case 'div6':
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                    default:
                        leftArrow.style.display = 'none';
                        rightArrow.style.display = 'block';
                        break;
                }

            });
        });
    });


</script>

<script>document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.testimonial');
    let currentTestimonialIndex = 0;

    function showNextTestimonial() {
        testimonials[currentTestimonialIndex].classList.add('hidden');
        currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
        testimonials[currentTestimonialIndex].classList.remove('hidden');
    }

    setInterval(showNextTestimonial, 4000); // Change de témoignage toutes les 4 secondes
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var dropdownId = toggle.getAttribute('href').substring(1);
                var dropdownMenu = document.getElementById(dropdownId);

                if (dropdownMenu.classList.contains('hidden')) {
                    dropdownMenu.classList.remove('hidden');
                } else {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    });
</script>




