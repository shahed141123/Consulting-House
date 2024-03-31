{{-- add Policy Modal Content --}}
<div id="policyAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-white">Add Terms & Policy
                </h6>
                <a type="button" data-bs-dismiss="modal">
                    <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                </a>
            </div>
            <div class="modal-body p-1">
                <div class="container ps-0 pe-0">
                    <form method="post" action="{{ route('admin.privacy-terms.store') }}">
                        @csrf
                        <div class="px-1 py-2 m-2 bg-light rounded">
                            <div class="row mb-1">
                                <div class="col-lg-5">
                                    <div class="row mb-1">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Title</span>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" name="name"
                                                class="form-control form-control-sm maxlength" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row mb-1">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Condition</span>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group text-secondary">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="condition" value="terms" id="terms" checked>
                                                            <label class="form-check-label" for="terms">
                                                                Terms
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="condition" value="policy" id="policy">
                                                            <label class="form-check-label" for="policy">
                                                                Policy
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="condition" value="sale_terms" id="saleTerms">
                                                            <label class="form-check-label" for="saleTerms">
                                                                Terms of Sale
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="condition" value="service_terms"
                                                                id="serviceTerms">
                                                            <label class="form-check-label" for="serviceTerms">
                                                                Terms of Service
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col-lg-12 col-sm-12">
                                    <span>Description</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="form-control" name="description" id="long_desc" style=" font-size: 12px; font-weight: 500;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 text-secondary d-flex justify-content-end">
                                <button type="submit" class="text-white btn btn-sm"
                                    style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Add Policy Modal End --}}
{{-- Edit Policy Modal Content --}}
@foreach ($policys as $key => $policy)
    <div id="policyEdit{{ $policy->id }}" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-white">Edit Terms & Policy
                    </h6>
                    <a type="button" data-bs-dismiss="modal">
                        <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                    </a>
                </div>
                <div class="modal-body p-1">
                    <div class="container ps-0 pe-0">
                        <form method="post" action="{{ route('admin.privacy-terms.update', $policy->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="px-2 py-2 m-2 bg-light rounded">
                                <div class="row mb-1">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row mb-1">
                                            <div class="col-lg-12 col-sm-12 d-flex align-items-center">
                                                <span>Name</span>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <input type="text" name="name" value="{{ $policy->name }}"
                                                    class="form-control form-control-sm maxlength" maxlength="100"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="col-lg-12 col-sm-12 text-start">
                                            <span>Condition</span>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-check text-start">
                                                    <input {{ $policy->condition == 'terms' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="condition"
                                                        value="terms" id="terms">
                                                    <label class="form-check-label" for="terms">
                                                        Terms
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-check text-start">
                                                    <input {{ $policy->condition == 'policy' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="condition"
                                                        value="policy" id="policy">
                                                    <label class="form-check-label" for="policy">
                                                        Policy
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-check text-start">
                                                    <input {{ $policy->condition == 'sale_terms' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="condition"
                                                        value="sale_terms" id="saleTerms">
                                                    <label class="form-check-label" for="saleTerms">
                                                        Terms of Sale
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-check text-start">
                                                    <input {{ $policy->condition == 'service_terms' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="condition"
                                                        value="service_terms" id="serviceTerms">
                                                    <label class="form-check-label" for="serviceTerms">
                                                        Terms of Service
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row mb-1">
                                <div class="col-lg-12 col-sm-12">
                                    <span>Description</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="form-control" name="description" id="common" style=" font-size: 12px; font-weight: 500;">{{ $policy->description }}</textarea>
                                </div>
                            </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12 text-secondary d-flex justify-content-end">
                            <button type="submit" class="text-white btn btn-sm"
                                style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Edit Policy Modal End --}}
