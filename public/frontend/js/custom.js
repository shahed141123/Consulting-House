
$(document).ready(function () {
    $('.select2-image').select2({
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
    $(document).ready(function() {
        $('.select2-search-box').select2({
            width: 'resolve',
            theme: "classic"
        });
        // $('.select2').select2();
    });
// Script
    document.addEventListener("DOMContentLoaded", function() {
        var accordionButtons = document.querySelectorAll(".accordion-button");

        accordionButtons.forEach(function(accordionButton) {
            var minusIcon = accordionButton.querySelector(".fa-minus");
            var plusIcon = accordionButton.querySelector(".fa-plus");

            accordionButton.addEventListener("click", function() {
                var accordionItem = this.closest(".accordion-item");
                var collapseTarget = this.getAttribute("data-bs-target");

                // Close all other open accordion items
                accordionButtons.forEach(function(otherAccordionButton) {
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
    $(function() {

        $('[data-toggle="tooltip"]').tooltip();
    })
// Script

//MultiImage Preview Code
$(document).ready(function() {
    $('#multiImg').on('change', function() { //on file input change
        if (window.File && window.FileReader && window.FileList && window
            .Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file) { //loop though each file
                if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                        .type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file) { //trigger function on successful read
                        return function(e) {
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



