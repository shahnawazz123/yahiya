$(function() {
    
        setTimeout(function () {$('.alert').fadeOut('fast');}, 5000);
        // 1.showModalButton,2.modalContent
        $(document).on('click', '.showModalButton', function() {
            if ($('#modal').hasClass('show')) {
                $('#modal').find('#modelBootsrap4Content')
                     .load($(this).attr('value'));alert(baseUrl);
                    $('.modal-header > #modal-label').val($(this).attr('title'));
            } else {
                $('#modal').modal('show')
                    .find('#modelBootsrap4Content')
                    .load($(this).attr('value'));
                    $('.modal-header > #modal-label').val($(this).attr('title'));
            }
        });

        $('#my-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var title = button.data('title'); // Extract title from data-title attribute

            // Update the modal title
            $('.modal-title').html(title);
        });


        // Handle the click event of the button
        $('#modalButton').click(function(){
            var modal = $('#modal');
            var title = 'Dynamic Modal Title'; // Set your desired dynamic title here
            modal.find('.modal-title').text(title); // Set the text of the modal title

            // Open the modal
            modal.modal('show');
        });
});