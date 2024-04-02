
$(document).ready(function () {
    $('.select2-image').select2({
        placeholder: 'Select a Country',
        templateResult: formatState, // Custom function to format the dropdown options
        escapeMarkup: function (markup) {
            return markup;
        },
    });
});

// Custom function to format the dropdown options with images
function formatState(state) {
    if (!state.id) {
        return state.text;
    }
    console.log(state.element.dataset);
    var $state = $(
        '<span><img src="' + state.element.dataset.img + '" class="img-flag" />' + state.text + '</span>'
    );
    return $state;
}


// $(document).ready(function () {
//     $('.select2').select2({
//         // templateResult: formatState, // Custom function to format the dropdown options
//         // escapeMarkup: function (markup) {
//         //     return markup;
//         // },
//     });
// });
// Script
$(document).ready(function () {
    $('.select2-search-box').select2({
        width: 'resolve',
        theme: "classic"
    });
    // $('.select2').select2();
});
// Script
document.addEventListener("DOMContentLoaded", function () {
    var accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach(function (accordionButton) {
        var minusIcon = accordionButton.querySelector(".fa-minus");
        var plusIcon = accordionButton.querySelector(".fa-plus");

        accordionButton.addEventListener("click", function () {
            var accordionItem = this.closest(".accordion-item");
            var collapseTarget = this.getAttribute("data-bs-target");

            // Close all other open accordion items
            accordionButtons.forEach(function (otherAccordionButton) {
                var otherAccordionItem = otherAccordionButton.closest(
                    ".accordion-item");
                var otherCollapseTarget = otherAccordionButton.getAttribute(
                    "data-bs-target");

                if (otherCollapseTarget !== collapseTarget && otherAccordionItem !==
                    accordionItem) {
                    otherAccordionButton.querySelector(".fa-minus").style.display =
                        "none";
                    otherAccordionButton.querySelector(".fa-plus").style.display =
                        "inline";
                }
            });

            // Toggle the icon of the clicked accordion item
            if (minusIcon.style.display === "inline") {
                minusIcon.style.display = "none";
                plusIcon.style.display = "inline";
            } else {
                minusIcon.style.display = "inline";
                plusIcon.style.display = "none";
            }
        });
    });
});
// Script
$(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        dots: true, // This enables the dots navigation
        nav: true,
        items: 1
    });

    var owl = $(".owl-carousel");
    owl.owlCarousel();

    $(".next-btn").click(function () {
        owl.trigger("next.owl.carousel");
    });

    $(".prev-btn").click(function () {
        owl.trigger("prev.owl.carousel");
    });

    $(".prev-btn").addClass("disabled");

    $(owl).on("translated.owl.carousel", function (event) {
        if ($(".owl-prev").hasClass("disabled")) {
            $(".prev-btn").addClass("disabled");
        } else {
            $(".prev-btn").removeClass("disabled");
        }

        if ($(".owl-next").hasClass("disabled")) {
            $(".next-btn").addClass("disabled");
        } else {
            $(".next-btn").removeClass("disabled");
        }
    });
});

// Script
$(function () {

    $('[data-toggle="tooltip"]').tooltip();
})
// Script

//MultiImage Preview Code
$(document).ready(function () {
    $('#multiImg').on('change', function () { //on file input change
        if (window.File && window.FileReader && window.FileList && window
            .Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function (index, file) { //loop though each file
                if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                    .type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function (file) { //trigger function on successful read
                        return function (e) {
                            var img = $('<img/>').addClass('thumb').attr('src',
                                e.target.result).width(70)
                                .height(50); //create image element
                            $('#preview_img').append(
                                img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});

// Script
$(function () {

    $('[data-toggle="tooltip"]').tooltip();
})
// Script



var popup = document.getElementById("myPopup"); // Define popup outside the function
function myFunction() {
    popup.classList.toggle("show");
    setTimeout(function () {
        popup.classList.remove("show");
    }, 6000); // 6000 milliseconds = 6 seconds
}

// phoneRegex = /^[0-9+()]*$/;
// document.addEventListener("DOMContentLoaded", function () {
//     const phoneNumbers = document.querySelectorAll(".phone_number");

//     phoneNumbers.forEach(phoneNumber => {
//         phoneNumber.addEventListener("input", function (evt) {
//             const self = evt.target;
//             self.value = self.value.replace(/[^0-9+()]/g, '');
//         });

//         // phoneNumber.addEventListener("keydown", function (evt) {
//             if ((evt.which != 46 || self.value.indexOf('.') != -1) && (evt.which < 48 || evt.which >
//                 57)) {
//                 evt.preventDefault();
//             }
//         // });
//     });
// });

$(document).ready(function () {
    $(".phone_number").on("input", function (evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9+()]/g, ''));

        if ((evt.which !== 46 || self.val().indexOf('.') !== -1) && (evt.which < 48 || evt.which > 57)) {
            evt.preventDefault();
        }
    });
    $(".price").on("input", function (evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9\.]/g, ''));
        if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which >
            57)) {
            evt.preventDefault();
        }
    });

    // $(".email-validate").on("input", function() {
    //     const emailInput = $(this);
    //     const emailValidationMessage = emailInput.next('.validation-message');

    //     const email = emailInput.val().trim();
    //     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    //     if (email === '') {
    //         emailValidationMessage.text('Email is required.');
    //         emailInput.addClass('input-error');
    //     } else if (!emailRegex.test(email)) {
    //         emailValidationMessage.text('Invalid email format.(Example : ');
    //         emailInput.addClass('input-error');
    //     } else {
    //         emailValidationMessage.text('');
    //         emailInput.removeClass('input-error');
    //     }
    // });
    $(".email-validate").on("input", function () {
        const emailInput = $(this);
        const emailValidationMessage = emailInput.next('.validation-message');
        const email = emailInput.val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === '') {
            emailValidationMessage.text('Email is required.');
            emailInput.addClass('input-error');
        } else if (!emailRegex.test(email)) {
            const missingParts = [];

            if (!email.includes('@')) {
                missingParts.push('@');
            }
            if (!email.includes('com')) {
                missingParts.push('com');
            }
            if (!email.includes('.')) {
                missingParts.push('.');
            }
            if (!email.includes('@') || !email.includes('.') || !email.includes('com')) {
                emailValidationMessage.text('Email must contain: ' + missingParts.join(', '));
            } else {
                emailValidationMessage.text('Invalid email format.');
            }

            emailInput.addClass('input-error');
        } else {
            emailValidationMessage.text('');
            emailInput.removeClass('input-error');
        }
    });

    $('.view-password').on('click', function () {
        let input = $(this).prev("input[name='password']");
        let icon = $(this).toggleClass('fa-eye fa-eye-slash');

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
        } else {
            input.attr('type', 'password');
        }
    });

    $('#confirm_password').on('keyup', function() {

        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Passwords match').css('color', 'green');
            $('#confirm_password').toggleClass('fa-lock fa-check-circle').css('color', 'green');
        } else {
            $('#message').html('Passwords do not match').css('color', 'red');
        }
    });
});


