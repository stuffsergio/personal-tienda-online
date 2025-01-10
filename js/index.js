function showMyMenu() {
    const sidebar = document.querySelector('.menu-desplegable')
    sidebar.style.display = 'flex'
}
function hideMyMenu() {
    const sidebar = document.querySelector('.menu-desplegable')
    sidebar.style.display = 'none'
}
document.getElementById("boton-enviar").addEventListener("click", function() {
    window.location.href = "pages/newsletter.html";
});
