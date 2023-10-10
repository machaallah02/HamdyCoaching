<script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/lib/jquery/jquery.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  window.scrollTo({ top: 0, behavior: "smooth" });
});
</script>
