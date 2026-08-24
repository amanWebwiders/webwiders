$(function() {

    // Generic AJAX Form Handler for all forms (#contact-form, #career-form, #demo-form, #consultation-form)
    $(document).on('submit', '#contact-form, #career-form, #demo-form, #consultation-form', function(e) {
        e.preventDefault();

        var form = $(this);
        var formMessages = $(form).find('.form-message');
        
        // If form-message doesn't exist inside the form, look in parent container or create one
        if ($(formMessages).length === 0) {
            $(form).append('<div class="form-message mt-3"></div>');
            formMessages = $(form).find('.form-message');
        }

        var submitBtn = $(form).find('button[type="submit"]');
        var originalBtnHtml = $(submitBtn).html();

        // Show loading state
        $(submitBtn).prop('disabled', true).html('Submitting... <i class="fa-solid fa-spinner fa-spin ms-1"></i>');
        $(formMessages).removeClass('alert alert-danger alert-success error success').empty();

        var targetUrl = $(form).attr('action') || 'process-contact.php';
        
        // Handle file uploads (FormData) if enctype is multipart/form-data
        var isMultipart = ($(form).attr('enctype') === 'multipart/form-data');
        var ajaxData, processDataVal, contentTypeVal;

        if (isMultipart) {
            ajaxData = new FormData(this);
            processDataVal = false;
            contentTypeVal = false;
        } else {
            ajaxData = $(form).serialize();
            processDataVal = true;
            contentTypeVal = 'application/x-www-form-urlencoded; charset=UTF-8';
        }

        $.ajax({
            type: 'POST',
            url: targetUrl,
            data: ajaxData,
            dataType: 'json',
            processData: processDataVal,
            contentType: contentTypeVal
        })
        .done(function(response) {
            $(submitBtn).prop('disabled', false).html(originalBtnHtml);

            if (response && response.success) {
                $(formMessages)
                    .addClass('alert alert-success success')
                    .text(response.message || 'Thank you! Your submission has been received successfully.');

                // Reset form fields on success
                $(form).find('input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="date"], input[type="file"], textarea').val('');
                $(form).find('select').prop('selectedIndex', 0);
            } else {
                var msg = (response && response.message) ? response.message : 'Oops! An error occurred. Please try again.';
                $(formMessages)
                    .addClass('alert alert-danger error')
                    .text(msg);
            }
        })
        .fail(function(jqXHR) {
            $(submitBtn).prop('disabled', false).html(originalBtnHtml);

            var errorMsg = 'Oops! An error occurred and your form could not be submitted.';
            if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                errorMsg = jqXHR.responseJSON.message;
            } else if (jqXHR.responseText) {
                try {
                    var parsed = JSON.parse(jqXHR.responseText);
                    if (parsed.message) {
                        errorMsg = parsed.message;
                    }
                } catch(e) {
                    errorMsg = 'An unexpected server error occurred. Please try again.';
                }
            }

            $(formMessages)
                .addClass('alert alert-danger error')
                .text(errorMsg);
        });
    });

});