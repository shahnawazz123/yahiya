$(function() {
    
        setTimeout(function () {$('.alert').fadeOut('fast');}, 5000);
        
        // Handle the click event of the button
        $(document).on('click', '.showModalButton', function(event) {
            const button = $(this); // Button that triggered the modal
            const url    = button.attr('value'); // Extract value from button attribute
            const title  = button.data('title'); // Extract title from data-title attribute
            const modal  = $('#modal');
            modal.find('.modal-title').text(title);
            modal.modal('show')
                 .find('#modelBootsrap4Content')
                 .load(url);
        });
});