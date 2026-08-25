$(function() {

    // Generic AJAX Form Handler for all forms (#contact-form, #career-form, #demo-form, #consultation-form, form[action*="process-"])
    $(document).on('submit', '#contact-form, #career-form, #demo-form, #consultation-form, form[action*="process-"]', function(e) {
        e.preventDefault();
        e.stopPropagation();

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

        function reloadCaptchaContainer(container) {
            if (!container || !container.length) return;
            var btn = container.find('.refresh-captcha-btn');
            var icon = btn.find('i');
            icon.addClass('fa-spin');

            // Resolve endpoint relative to current location or targetUrl
            var endpoint = 'process-captcha';

            $.ajax({
                type: 'GET',
                url: endpoint,
                dataType: 'json'
            }).done(function(res) {
                icon.removeClass('fa-spin');
                if (res && res.success) {
                    container.find('.captcha-question-text').html('<i class="fa-solid fa-shield-cat me-1 text-danger"></i> Verification: ' + res.question);
                    container.find('.captcha-token-input').val(res.token);
                    container.find('.captcha-answer-input').val('');
                }
            }).fail(function() {
                icon.removeClass('fa-spin');
            });
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
                if ($.fn && $.fn.niceSelect) {
                    $(form).find('select').niceSelect('update');
                }
            } else {
                var msg = (response && response.message) ? response.message : 'Oops! An error occurred. Please try again.';
                $(formMessages)
                    .addClass('alert alert-danger error')
                    .text(msg);
            }
            // Always refresh captcha after submission attempt
            reloadCaptchaContainer($(form).find('.captcha-container'));
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

            // Always refresh captcha after submission attempt
            reloadCaptchaContainer($(form).find('.captcha-container'));
        });

        return false;
    });

    // Manual Refresh CAPTCHA Button Listener
    $(document).on('click', '.refresh-captcha-btn', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var container = $(this).closest('.captcha-container');
        var btn = $(this);
        var icon = btn.find('i');
        icon.addClass('fa-spin');

        $.ajax({
            type: 'GET',
            url: 'process-captcha',
            dataType: 'json'
        }).done(function(res) {
            icon.removeClass('fa-spin');
            if (res && res.success) {
                container.find('.captcha-question-text').html('<i class="fa-solid fa-shield-cat me-1 text-danger"></i> Verification: ' + res.question);
                container.find('.captcha-token-input').val(res.token);
                container.find('.captcha-answer-input').val('');
            }
        }).fail(function() {
            icon.removeClass('fa-spin');
        });
    });
    // Dynamic Product / Service Name Capture for Offcanvas Consultation & Demo forms
    $(document).on('show.bs.offcanvas', '.offcanvas', function(e) {
        var offcanvas = $(this);
        var triggerBtn = $(e.relatedTarget);
        var productName = '';

        if (triggerBtn && triggerBtn.length) {
            productName = triggerBtn.attr('data-product') || triggerBtn.data('product');

            // 1. Check if trigger button is in a pricing card
            if (!productName) {
                var pricingCard = triggerBtn.closest('.pricing-card');
                if (pricingCard.length && pricingCard.find('.plan-title').length) {
                    productName = 'Pricing: ' + pricingCard.find('.plan-title').text().trim();
                }
            }

            // 2. Check trigger button text if specific
            if (!productName) {
                var btnText = triggerBtn.text().trim();
                var genericTexts = ['get started', 'book my session', 'submit', 'discuss your project', 'book a free consultation', 'schedule consultation', 'contact us'];
                if (btnText && genericTexts.indexOf(btnText.toLowerCase()) === -1) {
                    productName = btnText;
                }
            }
        }

        // 3. Fallback to Page Title or Page Header
        if (!productName) {
            var pageHeading = $('h1, h2, .section-title h2').first().text().trim();
            if (pageHeading) {
                productName = pageHeading;
            } else {
                productName = document.title.replace(/- WebWiders/i, '').replace(/WebWiders/i, '').trim();
            }
        }

        if (productName) {
            // Set hidden product_name input inside offcanvas form
            var form = offcanvas.find('form');
            if (form.length) {
                var hiddenInput = form.find('input[name="product_name"]');
                if (hiddenInput.length === 0) {
                    form.prepend('<input type="hidden" name="product_name" value="">');
                    hiddenInput = form.find('input[name="product_name"]');
                }
                hiddenInput.val(productName);
            }

            // Update visible badge/label inside offcanvas if element exists or create container
            var badgeContainer = offcanvas.find('.selected-product-box');
            if (badgeContainer.length === 0) {
                var headerOrBody = offcanvas.find('.offcanvas-body');
                if (headerOrBody.length) {
                    headerOrBody.prepend('<div class="selected-product-box text-center mb-3" style="display:none;"><span class="badge bg-light text-danger border border-danger px-3 py-2 fw-semibold fs-6"><i class="fa-solid fa-cube me-1"></i> <span class="selected-product-name"></span></span></div>');
                    badgeContainer = offcanvas.find('.selected-product-box');
                }
            }
            if (badgeContainer.length) {
                badgeContainer.find('.selected-product-name').text(productName);
                badgeContainer.show();
            }
        }
    });

});