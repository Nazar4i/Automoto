var modal = document.getElementById('modalwindow');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}