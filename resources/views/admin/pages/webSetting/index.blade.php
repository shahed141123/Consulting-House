@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#site" class="nav-link active" data-bs-toggle="tab">
                            Site
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#smtp" class="nav-link " data-bs-toggle="tab">
                            Smtp
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#seo" class="nav-link" data-bs-toggle="tab">
                            Seo
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="site">
                        @include('admin.pages.webSetting.partials.site')
                    </div>
                    <div class="tab-pane fade" id="seo">
                        @include('admin.pages.webSetting.partials.seo')
                    </div>
                    <div class="tab-pane fade" id="smtp">
                        @include('admin.pages.webSetting.partials.smtp')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->
@endsection
