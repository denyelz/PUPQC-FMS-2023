document.getElementById('show-modal').addEventListener('click', function() {       
    Swal.fire({
        title: 'Sure kana?',
        icon: 'info',
        html:
        'Di mo na ako <b>lab</b>?',
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
