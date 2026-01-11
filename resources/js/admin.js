import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function() {
    if (window.sessionSuccess) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: window.sessionSuccess,
            confirmButtonColor: '#dc2626',
            customClass: {
                confirmButton: 'swal2-confirm-wide'
            }
        });
    }

    if (window.sessionError) {
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: window.sessionError,
            confirmButtonColor: '#dc2626',
            customClass: {
                confirmButton: 'swal2-confirm-wide'
            }
        });
    }

    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc2626",
                cancelButtonColor: "#6b7280",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});

export { Swal };