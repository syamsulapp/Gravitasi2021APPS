const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        icon: 'success',
        title: flashData,
        text: 'Sukses Data!',
    })
}
