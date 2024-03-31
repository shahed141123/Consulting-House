<script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Include jQuery Validation plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
{{-- <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script> --}}
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/js/lightslider.min.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('frontend/js/toastr.js') }}"></script>
<!--shahed -->
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>


{{-- New Script 17-07-23 Saju --}}
<script src="{{ asset('frontend/js/font-awesome-6.js') }}" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
{{-- New Script 17-07-23 Saju --}}
<!--shahed -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>

{{-- Custom Script Start --}}
@stack('scripts')
<script>
    $(document).ready(function() {
        $('#select-state').select2();
    });
</script>

<script>
    $(document).ready(function() {
        // Static parent element to delegate the change event
        $(document).on('change', '#upload-multi-img', function() {
            const formData = new FormData();
            formData.append('image', this.files[0]);

            const imagePreview = $(this).closest('.user-image');
            const headerRoundImage = $('#header-round-image');
            const headerDropdownImage = $('#header-dropdown-image');

            $.ajax({
                url: "{{ route('client-image.store') }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: formData,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function(result) {

                    const productImage = result.image;
                    const html = `<div class="user-image" style="background-image:url(${productImage})" profile-picture-container>
                                <input id="upload-multi-img" type="file" class="file-input" name="profile_picture" accept="image/*" profile-picture-upload>
                                <span class="edit-picture bg-white"><i class="fas fa-pencil-alt"></i></span>
                            </div>`;
                    const roundhtml = `<div class="profile-image" id="header-round-image"
                                    style="background-image:url(${productImage})"
                                    profile-picture-container="">
                                </div>`;
                    const dropdownhtml = `<div class="profile-photo" id="header-dropdown-image">
                                        <img src="${productImage}"
                                            alt="">
                                    </div>`;

                    toastr.success('Image uploaded successfully');
                    imagePreview.replaceWith(html);
                    headerRoundImage.replaceWith(roundhtml);
                    headerDropdownImage.replaceWith(dropdownhtml);
                },
                error: function(xhr, status, error) {
                    console.log(error); // For Debugging
                }
            });
        });
    });
</script>



