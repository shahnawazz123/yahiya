var notification = {
        successMessage: function (obj) {
            if (typeof obj == 'undefined') {
                obj= {
                    "type" : "info",
                    "position" : "bottom-right",
                    "timeOut" : "false",
                    "closeButton" : true
                };
            }

            if (obj.type == undefined) {
                obj.type = 'info';
            }

            if (obj.position == undefined) {
                obj.position = 'toast-bottom-right';
            } else {
                obj.position = 'toast-' + obj.position;
            }

            if (obj.timeOut == undefined) {
                obj.timeOut = 'false';
            }

            if (obj.closeButton == undefined) {
                obj.closeButton = false;
            }

            if (obj.message == undefined) {
                obj.message = 'Hi there, this is notification demo with HTML support. So, you can add HTML elements like <a href="javascript:void(0);">this link</a>';
            }
            
            toastr.options.timeOut = obj.timeOut;
            toastr.options.closeButton = obj.closeButton;
            toastr.options.positionClass = obj.position;
            toastr[obj.type](obj.message);

        }


        /*$('.btn-toastr').on('click', function() {
            $context = $(this).data('context');
            $message = $(this).data('message');
            $position = $(this).data('position');

            if ($context === '') {
                $context = 'info';
            }

            if ($position === '') {
                $positionClass = 'toast-bottom-right';
            } else {
                $positionClass = 'toast-' + $position;
            }

            toastr.remove();
            toastr[$context]($message, '', {
                positionClass: $positionClass
            });
        });

        $('#toastr-callback1').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "300",
                "onShown": function() {
                    alert('onShown callback');
                },
                "onHidden": function() {
                    alert('onHidden callback');
                }
            };

            toastr['info']($message);
        });

        $('#toastr-callback2').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "onclick": function() {
                    alert('onclick callback');
                },
            };

            toastr['info']($message);

        });

        $('#toastr-callback3').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "closeButton": true,
                "onCloseClick": function() {
                    alert('onCloseClick callback');
                }
            };

            toastr['info']($message);
        });*/
    }