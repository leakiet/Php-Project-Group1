
function myFunction() {
    var x = document.getElementById("drop-down-logout");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
    // document.addEventListener('click', function (event) {
    //     var dropdown = document.getElementById('drop-down-logout');
    //     if (!dropdown.contains(event.target)) {
    //         dropdown.classList.remove('w3-show');
    //     }
    // });
}
