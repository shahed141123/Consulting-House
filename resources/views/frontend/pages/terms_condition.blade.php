@extends('frontend.master')
@section('content')
<style>
    .nav-tabs .nav-link.active {
        color: white;
        background-color: var(--main-text-color);
        border: 1px solid #eee;
        border-color: none;
        border-radius: 0px;
    }
</style>
    <section class="common_product_header"
        style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8) ),url('https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2020/03/11140107/find-remote-job-1024x512.png'); margin-top: 3rem;padding-top: 3rem;">
        <div class="container">
            <div class="row mb-3">
                <h1 class="text-center text-white">Terms Condition</h1>
                <div class="col-md-4 offset-md-4 mt-5 pt-3">
                    <div class="input-group mb-3" style="display: flex">
                        <input type="text" class="form-control" placeholder="Search ......"
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <a href="" class="input-group-text"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="">
                        <a href="#" class="btn btn-square d-flex" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row p-4">
            <div class="col-lg-2">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed p-1 m-0 privary_tabs" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                aria-controls="collapse3">
                                Run Rate Sales
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body p-0 m-0">
                                <ul class="nav nav-tabs d-flex flex-column ms-4 border-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active p-1 ps-4 " id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link p-1 ps-4" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link p-1 ps-4" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veritatis, debitis harum
                            aliquid cupiditate quo, hic ut accusantium, repudiandae autem laudantium porro? Sed sint ipsam
                            ipsa iusto autem doloremque harum eligendi maiores fugiat exercitationem corporis, neque maxime?
                            Repellendus aliquam, ad qui illo aliquid nesciunt autem expedita nemo impedit esse
                            pariatur.</span>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veritatis, debitis harum
                            aliquid cupiditate quo, hic ut accusantium, repudiandae autem laudantium porro? Sed sint ipsam
                            ipsa iusto autem doloremque harum eligendi maiores fugiat exercitationem corporis, neque maxime?
                            Repellendus aliquam, ad qui illo aliquid nesciunt autem expedita nemo impedit esse
                            pariatur.</span>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veritatis, debitis harum
                            aliquid cupiditate quo, hic ut accusantium, repudiandae autem laudantium porro? Sed sint ipsam
                            ipsa iusto autem doloremque harum eligendi maiores fugiat exercitationem corporis, neque maxime?
                            Repellendus aliquam, ad qui illo aliquid nesciunt autem expedita nemo impedit esse
                            pariatur.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $activeTab = 'home'; // Set the active tab based on your logic
        return view('your.view.name', compact('activeTab'));
    </script>
@endpush
