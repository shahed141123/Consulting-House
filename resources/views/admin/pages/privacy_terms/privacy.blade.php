<div class="d-flex align-items-center py-2">
    <div class="text-success nav-link cat-tab3" style="position: relative; z-index: 999; margin-bottom: -40px;">
        <a href="" data-bs-toggle="modal" data-bs-target="#policyAdd">
            <div class="d-flex align-items-center">
                <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Add Terms & Policy">
                    <i class="ph-plus icons_design"></i> </span>
                <span class="ms-1" style="color: #247297;">Add</span>
            </div>
        </a>
        <div class="text-center" style="margin-left: 300px">
            <h5 class="ms-1 mb-0 mt-1 text-black">Terms & Policy</h5>
        </div>
    </div>

</div>
<div>
    <table class="table portfolioDetailDT table-bordered table-hover text-center">
        <thead>
            <tr>
                <th width="5">Sl No:</th>
                <th width="65">Name</th>
                <th width="20">Condition</th>
                <th width="10" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($policys)
                @foreach ($policys as $key => $policy)
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td>{{ $policy->name }}</td>
                        <td>{{ $policy->condition }}</td>
                        <td>
                            <a href="" class="text-primary" data-bs-toggle="modal"
                                data-bs-target="#policyEdit{{ $policy->id }}">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('admin.privacy-terms.destroy', [$policy->id]) }}"
                                class="text-danger delete">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
