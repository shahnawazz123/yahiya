
    $('.dropify').dropify({
        messages: {
            default: $('.dropify').data('default-message'),
            replace: 'Drag and drop a file or click to replace',
            remove: 'Remove',
            error: 'Sorry, the file is too big'
        }
    });

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.custom-dropify-upload').dropify({
        tpl: {
            wrap:            '<div class="dropify-wrapper"></div>',
            loader:          '<div class="dropify-loader"></div>',
            message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ default }}</p></div>',
            preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
            filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
            errorLine:       '<p class="dropify-error">{{ error }}</p>',
            errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
        }
    });
/*
List of attributes for dropify
    data-default-file="url_of_your_file"
    data-height="300"
    data-max-file-size="3M"
    data-min-width="400"
    data-max-width="1000"
    data-min-height="400"
    data-show-remove="false" 
    data-show-loader="false"
*/