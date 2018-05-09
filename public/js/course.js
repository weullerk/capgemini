$(document).ready(function() {
    $('body').on('submit', 'form[name="search-form"]', function(e) {
        e.preventDefault();
        var form = $(this);
        var action = form.attr('action');
        var search = form.find('input[name="search"]').val();

        if (search !== '') {
            window.location.href = action + encodeURIComponent(search);
        }
    });
});