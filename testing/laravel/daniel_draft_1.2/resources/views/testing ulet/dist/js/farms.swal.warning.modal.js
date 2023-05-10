document.getElementById('show-modal-logout').addEventListener('click', function() {       
    Swal.fire({
        title: 'Are you sure?',
        icon: 'info',
        html:
        'Do you want to <b>Log Out</b>?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Yes',
        confirmButtonColor: '#3085d6',
        confirmButtonAriaLabel: '...',
        cancelButtonColor: '#d33',
        cancelButtonAriaLabel: '...'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("#");
    }})
});  


// Function for system roles modal
function globalWarning() {
    Swal.fire({
        title: "Are you sure?",
        icon: "info",
        html: "Do you want to <b>delete</b> this?",
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: "Yes",
        confirmButtonColor: "#3085d6",
        confirmButtonAriaLabel: "...",
        cancelButtonColor: "#d33",
        cancelButtonAriaLabel: "...",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("#");
        }
    });
}

window.document
    .getElementById("button1")
    .addEventListener("click", globalWarning);
window.document
    .getElementById("button2")
    .addEventListener("click", globalWarning);
window.document
    .getElementById("button3")
    .addEventListener("click", globalWarning);
window.document
    .getElementById("button4")
    .addEventListener("click", globalWarning);


