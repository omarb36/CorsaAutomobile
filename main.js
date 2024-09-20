
// BOUTON DECOUVRIRE NAVBAR
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("button-decouvrir").addEventListener("click", function() {
        document.getElementById("section-cartes").scrollIntoView({
            behavior: "smooth"
        });
    });
});
