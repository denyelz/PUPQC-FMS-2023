$(document).ready(function() {
    $('.d1').click(function() {
    var selectedOption = $(this).text();
    $('#selectedOption').val(selectedOption);
    });
});
