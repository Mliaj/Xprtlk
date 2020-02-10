// Custom fading time in alert class
$(() => {
    $('.alert').delay(5000).slideUp(500, () => {
        $('.alert').on('close');
    });
});