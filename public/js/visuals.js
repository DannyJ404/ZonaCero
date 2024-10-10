// Cuando el documento esté listo
document.addEventListener('DOMContentLoaded', function() {
    var scrollToTopBtn = document.getElementById("btn-scroll-top");
    var rootElement = document.documentElement;

    function handleScroll() {
        // Mostrar el botón cuando el usuario haya desplazado 100px
        var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
        if ((rootElement.scrollTop / scrollTotal) > 0.20) {
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    }

    function scrollToTop() {
        // Desplazar al inicio de la página
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    scrollToTopBtn.addEventListener("click", scrollToTop);
    document.addEventListener("scroll", handleScroll);
});
// Desplazamiento suave entre sectores
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetID = this.getAttribute('href');
        const targetElement = document.querySelector(targetID);

        // Ajustar desplazamiento suave
        window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth',
        });
    });
});




