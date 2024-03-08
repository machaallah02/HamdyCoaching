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
    const slideWidth = slides.children[0].clientWidth; // Largeur de la fenêtre
    const intervalDuration = 3000; // Durée de chaque diapositive en millisecondes
    let currentSlide = 0;

    function nextSlide() {
        currentSlide++;
        if (currentSlide >= slides.children.length) {
            currentSlide = 0;
        }
        updateCarousel();
    }

    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.children.length - 1;
        }
        updateCarousel();
    }

    function updateCarousel() {
        slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    setInterval(nextSlide, intervalDuration); // Change de diapositive toutes les 4 secondes

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
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

