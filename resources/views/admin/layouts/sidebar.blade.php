<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="ph-house"></i>
                <span>{{ __('Home') }}</span>
            </a>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.client_type_category.index', 'admin.profile_type.index', 'admin.client_type.index','admin.entity_type.index','admin.transaction_type.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>{{ __('Types') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.client_type_category.index', 'admin.profile_type.index', 'admin.client_type.index','admin.entity_type.index','admin.transaction_type.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.client_type_category.index') }}"
                        class="nav-link {{ Route::is('admin.client_type_category.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Client Type Category') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.profile_type.index') }}"
                        class="nav-link {{ Route::is('admin.profile_type.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Profile Type') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.client_type.index') }}"
                        class="nav-link {{ Route::is('admin.client_type.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Client Type') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.entity_type.index') }}"
                        class="nav-link {{ Route::is('admin.entity_type.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Legal Entity Types') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.transaction_type.index') }}"
                        class="nav-link {{ Route::is('admin.transaction_type.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Transaction Types') }}
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.industrial-sector.index', 'admin.industry-watch-category.index','admin.industry.index', 'admin.industry-watch.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>{{ __('Industries & Sectors') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.industrial-sector.index', 'admin.industry-watch-category.index','admin.industry.index', 'admin.industry-watch.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.industrial-sector.index') }}"
                        class="nav-link {{ Route::is('admin.industrial-sector.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Industrial Sectors') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry.index') }}"
                        class="nav-link {{ Route::is('admin.industry.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Industries') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry-watch-category.index') }}"
                        class="nav-link {{ Route::is('admin.industry-watch-category.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Industry Watch Category') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry-watch.index') }}"
                        class="nav-link {{ Route::is('admin.industry-watch.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Industry Watch') }}
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.categories.index', 'admin.brand.index', 'admin.product.index', 'admin.coupon.index', 'admin.advertisement.index', 'admin.filtering-item') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>Business Posts</span>
            </a>
            <ul
                class="nav-group-sub collapse
                {{ Route::is('admin.categories.index', 'admin.brand.index', 'admin.product.index', 'admin.coupon.index', 'admin.advertisement.index', 'admin.filtering-item') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-link {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                        <i class="ph-equalizer"></i>
                        <span>{{ __('All Category') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.brand.index') }}"
                        class="nav-link {{ request()->routeIs('admin.brand.index') ? 'active' : '' }}">
                        <i class="ph-circle-wavy"></i>
                        <span>{{ __('Brand') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}"
                        class="nav-link {{ request()->routeIs('admin.product.index') ? 'active' : '' }}">
                        <i class="ph-squares-four"></i>
                        <span>{{ __('Business Posts') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.coupon.index') }}"
                        class="nav-link {{ request()->routeIs('admin.coupon.index') ? 'active' : '' }}">
                        <i class="ph ph-tag"></i>
                        <span>{{ __('Coupon') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.advertisement.index') }}"
                        class="nav-link {{ request()->routeIs('admin.advertisement.index') ? 'active' : '' }}">
                        <i class="ph ph-speaker-high"></i>
                        <span>{{ __('Advertisement') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.filtering-item.index') }}"
                        class="nav-link {{ request()->routeIs('admin.filtering-item.index') ? 'active' : '' }}">
                        <i class="ph ph-funnel"></i>
                        <span>{{ __('Filtering Items') }}</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.subscription-plan.index', 'admin.feedback.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>{{ __('Subscription') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.subscription-plan.index', 'admin.feedback.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.subscription-plan.index') }}"
                        class="nav-link {{ Route::is('admin.subscription-plan.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Subscription Plans') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.feedback.index') }}"
                        class="nav-link {{ Route::is('admin.feedback.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Subscription Users') }}
                    </a>
                </li>


            </ul>
        </li>
                <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.contact.index', 'admin.feedback.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>{{ __('CRM') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.contact.index', 'admin.feedback.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}"
                        class="nav-link {{ Route::is('admin.contact.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Contact Messages') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.feedback.index') }}"
                        class="nav-link {{ Route::is('admin.feedback.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Feedbacks') }}
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.blog-category.index','admin.blog-post.index','admin.faq.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>{{ __('Site Content') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.blog-category.index','admin.blog-post.index','admin.faq.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.blog-category.index') }}"
                        class="nav-link {{ Route::is('admin.blog-category.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Blog Category') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog-post.index') }}"
                        class="nav-link {{ Route::is('admin.blog-post.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Blog Post') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faq.index') }}"
                        class="nav-link {{ Route::is('admin.faq.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('FAQ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.frontend-menu.index') }}"
                        class="nav-link {{ Route::is('admin.frontend-menu.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Frontend Menu') }}
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.faq.index') }}"
                        class="nav-link {{ Route::is('admin.faq.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('FAQ') }}
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.industry-watch.index') }}"
                        class="nav-link {{ Route::is('admin.industry-watch.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Industry Watch') }}
                    </a>
                </li> --}}


            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link {{ Route::is('admin.role.index', 'admin.employee.index', 'admin.permission.index', 'admin.group-permission.index') ? 'active' : '' }}">
                <i class="ph-keyhole"></i>
                <span>Authentication</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.role.index', 'admin.employee.index', 'admin.permission.index', 'admin.group-permission.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.employee.index') }}"
                        class="nav-link {{ Route::is('admin.employee.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Employee') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.group-permission.index') }}"
                        class="nav-link {{ Route::is('admin.group-permission.index') ? 'active' : '' }}">
                        <i class="ph-person"></i>
                        {{ __('Group Permission') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permission.index') }}"
                        class="nav-link {{ Route::is('admin.permission.index') ? 'active' : '' }}">
                        <i class="ph-check-square-offset"></i>
                        {{ __('Permission') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.role.index') }}"
                        class="nav-link {{ Route::is('admin.role.index') ? 'active' : '' }}">
                        <i class="ph-fingerprint-simple"></i>
                        {{ __('Role') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.web.setting.index') }}"
                class="nav-link {{ request()->routeIs('admin.web.setting.index') ? 'active' : '' }}">
                <i class="ph-gear-six"></i>
                <span>{{ __('Setting') }}</span>
            </a>
        </li>

    </ul>
</div>

@push('scripts')
@endpush
