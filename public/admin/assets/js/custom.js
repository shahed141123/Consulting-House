/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */



/*

*/


//Preloader
$(window).on("load", function() {
    // Remove preloader once the page and its resources have finished loading
    $("#preloader").fadeOut("slow");
  });
//Preloader

//Image Show
$(document).ready(function () {
  $('#image').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#showImage').attr('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  });
});
$(document).ready(function () {
  $('#image1').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#showImage1').attr('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  });
});
$(document).ready(function () {
  $('#image2').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#showImage2').attr('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  });
});


// Defaults sweet alert js
var swalInit = swal.mixin({
  buttonsStyling: false,
  customClass: {
    confirmButton: "btn btn-primary",
    cancelButton: "btn btn-light",
    denyButton: "btn btn-light",
    input: "form-control",
  },
});
// --------------------------------

// Delete action with reload page
$(document).on('click', '.delete', function (e) {
  e.preventDefault();

  var deleteUrl = $(this).attr('href');

  swalInit.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    buttonsStyling: false,
    customClass: {
      confirmButton: 'btn btn-danger',
      cancelButton: 'btn btn-success'
    }
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        url: deleteUrl,
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (data) {
          swalInit.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          ).then(function () {
            location.reload();
          });
        },
        error: function (xhr, status, error) {
          swalInit.fire(
            'Error Occurred!',
            error,
            'error'
          );
        }
      });
    }
    else if (result.dismiss === swal.DismissReason.cancel) {
      swalInit.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      );
    }
  });
});
// --------------------------------

function initializeEditor(id) {
  ClassicEditor.create(document.querySelector(`#${id}`), {
    heading: {
      options: [
        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
      ]
    }
  }).catch(error => {
    console.error(error);
  });
}

initializeEditor('ckeditor_classic_empty_1');
initializeEditor('ckeditor_classic_empty_2');
initializeEditor('ckeditor_classic_empty_3');




/// without reload single row delete

$(document).on('click', '.with-reload-deleteDT', function (e) {
  e.preventDefault();

  var row = $(this).closest('tr');
  var deleteUrl = $(this).attr('href');

  swalInit.fire({
    title: 'Are you sure?',
    text: 'You will not be able to recover this data!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: deleteUrl,
        type: 'DELETE',
        data: {
          _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
          var table = $('#dataTable').DataTable();

          swalInit.fire({
            title: 'Success!',
            text: data.success,
            icon: 'success'
          });

          table.row(row).remove().draw(false);
        }
      });
    }
  });
});


/**
 * The `daynamic form validation` function is not defined in the provided code.
 * It is possible that it is a custom function created by the developer to perform dynamic form
 * @param className - The parameter `className` is a string that represents the class name of the input
 * element(s) that the function will be applied to.
 */

function numberValidation(className) {
  $(document).on('input', className, function (e) {
    e.preventDefault();
    this.value = this.value.replace(/[^\d.-]/g, '');
  });
}




















