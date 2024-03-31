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
            <a href="#"
                class="nav-link {{ Route::is('admin.client_type_category.index', 'admin.profile_type.index', 'admin.client_type.index', 'admin.entity_type.index', 'admin.transaction_type.index') ? 'active' : '' }}">
                <i class="ph ph-chalkboard-teacher"></i>
                <span>{{ __('Types') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.client_type_category.index', 'admin.profile_type.index', 'admin.client_type.index', 'admin.entity_type.index', 'admin.transaction_type.index') ? 'show' : '' }}">
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
                        <i class="ph ph-identification-badge"></i>
                        {{ __('Profile Type') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.client_type.index') }}"
                        class="nav-link {{ Route::is('admin.client_type.index') ? 'active' : '' }}">
                        <i class="ph ph-user-circle"></i>
                        {{ __('Client Type') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.entity_type.index') }}"
                        class="nav-link {{ Route::is('admin.entity_type.index') ? 'active' : '' }}">
                        <i class="ph ph-flag-banner"></i>
                        {{ __('Legal Entity Types') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.transaction_type.index') }}"
                        class="nav-link {{ Route::is('admin.transaction_type.index') ? 'active' : '' }}">
                        <i class="ph ph-arrows-down-up"></i>
                        {{ __('Transaction Types') }}
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ Route::is('admin.industrial-sector.index', 'admin.industry-watch-category.index', 'admin.industry.index', 'admin.industry-watch.index') ? 'active' : '' }}">
                <i class="ph ph-factory"></i>
                <span>{{ __('Industries & Sectors') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.industrial-sector.index', 'admin.industry-watch-category.index', 'admin.industry.index', 'admin.industry-watch.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.industrial-sector.index') }}"
                        class="nav-link {{ Route::is('admin.industrial-sector.index') ? 'active' : '' }}">
                        <i class="ph ph-package"></i>
                        {{ __('Industrial Sectors') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry.index') }}"
                        class="nav-link {{ Route::is('admin.industry.index') ? 'active' : '' }}">
                        <i class="ph ph-buildings"></i>
                        {{ __('Industries') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry-watch-category.index') }}"
                        class="nav-link {{ Route::is('admin.industry-watch-category.index') ? 'active' : '' }}">
                        <i class="ph ph-align-left"></i>
                        {{ __('Industry Watch Category') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.industry-watch.index') }}"
                        class="nav-link {{ Route::is('admin.industry-watch.index') ? 'active' : '' }}">
                        <i class="ph ph-timer"></i>
                        {{ __('Industry Watch') }}
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ Route::is('admin.categories.index', 'admin.brand.index', 'admin.product.index', 'admin.coupon.index', 'admin.advertisement.index', 'admin.filtering-item') ? 'active' : '' }}">
                <i class="ph ph-buildings"></i>
                <span>Business Posts</span>
            </a>
            <ul
                class="nav-group-sub collapse
                {{ Route::is('admin.categories.index', 'admin.brand.index', 'admin.product.index', 'admin.coupon.index', 'admin.advertisement.index', 'admin.filtering-item') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-link {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                        <i class="ph ph-user-list"></i>
                        <span>{{ __('All Category') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.brand.index') }}"
                        class="nav-link {{ request()->routeIs('admin.brand.index') ? 'active' : '' }}">
                        <i class="ph ph-bandaids"></i>
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
                        <i class="ph ph-puzzle-piece"></i>
                        <span>{{ __('Coupon') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.advertisement.index') }}"
                        class="nav-link {{ request()->routeIs('admin.advertisement.index') ? 'active' : '' }}">
                        <i class="ph ph-microphone-stage"></i>
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
            <a href="#"
                class="nav-link {{ Route::is('admin.subscription-plan.index', 'admin.feedback.index') ? 'active' : '' }}">
                <i class="ph ph-target"></i>
                <span>{{ __('Subscription') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.subscription-plan.index', 'admin.feedback.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.subscription-plan.index') }}"
                        class="nav-link {{ Route::is('admin.subscription-plan.index') ? 'active' : '' }}">
                        <i class="ph ph-flower"></i>
                        {{ __('Subscription Plans') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.feedback.index') }}"
                        class="nav-link {{ Route::is('admin.feedback.index') ? 'active' : '' }}">
                        <i class="ph ph-user-gear"></i>
                        {{ __('Subscription Users') }}
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ Route::is('admin.contact.index', 'admin.feedback.index', 'admin.chat-messages.index') ? 'active' : '' }}">
                <i class="ph ph-user-circle-gear"></i>
                <span>{{ __('CRM') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.contact.index', 'admin.feedback.index', 'admin.chat-messages.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}"
                        class="nav-link {{ Route::is('admin.contact.index') ? 'active' : '' }}">
                        <i class="ph ph-paper-plane-tilt"></i>
                        {{ __('Contact Messages') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.feedback.index') }}"
                        class="nav-link {{ Route::is('admin.feedback.index') ? 'active' : '' }}">
                        <i class="ph ph-sparkle"></i>
                        {{ __('Feedbacks') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.chat-messages.index') }}"
                        class="nav-link {{ Route::is('admin.chat-messages.index') ? 'active' : '' }}">
                        <i class="ph ph-messenger-logo"></i>
                        {{ __('One to One Message') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ Route::is('admin.blog-category.index', 'admin.blog-post.index', 'admin.faq.index') ? 'active' : '' }}">
                <i class="ph ph-browsers"></i>
                <span>{{ __('Site Content') }}</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.blog-category.index', 'admin.blog-post.index', 'admin.faq.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.blog-category.index') }}"
                        class="nav-link {{ Route::is('admin.blog-category.index') ? 'active' : '' }}">
                        <i class="ph ph-newspaper-clipping"></i>
                        {{ __('Blog Category') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog-post.index') }}"
                        class="nav-link {{ Route::is('admin.blog-post.index') ? 'active' : '' }}">
                        <i class="ph ph-signpost"></i>
                        {{ __('Blog Post') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faq.index') }}"
                        class="nav-link {{ Route::is('admin.faq.index') ? 'active' : '' }}">
                        <i class="ph ph-question"></i>
                        {{ __('FAQ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.frontend-menu.index') }}"
                        class="nav-link {{ Route::is('admin.frontend-menu.index') ? 'active' : '' }}">
                        <i class="ph ph-list"></i>
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
            <a href="#"
                class="nav-link {{ Route::is('admin.role.index', 'admin.employee.index', 'admin.permission.index', 'admin.group-permission.index') ? 'active' : '' }}">
                <i class="ph ph-shield-check"></i>
                <span>Authentication</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.role.index', 'admin.employee.index', 'admin.permission.index', 'admin.group-permission.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.employee.index') }}"
                        class="nav-link {{ Route::is('admin.employee.index') ? 'active' : '' }}">
                        <i class="ph ph-user-list"></i>
                        {{ __('Employee') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.group-permission.index') }}"
                        class="nav-link {{ Route::is('admin.group-permission.index') ? 'active' : '' }}">
                        <i class="ph ph-checks"></i>
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
                        <i class="ph ph-user-switch"></i>
                        {{ __('Role') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ Route::is('admin.newsletter.index', 'admin.bulk-email.index') ? 'active' : '' }}">
                <i class="ph ph-handshake"></i>
                <span>Marketing</span>
            </a>
            <ul
                class="nav-group-sub collapse {{ Route::is('admin.newsletter.index', 'admin.bulk-email.index') ? 'show' : '' }}">
                <li class="nav-item">
                    <a href="{{ route('admin.newsletter.index') }}"
                        class="nav-link {{ Route::is('admin.newsletter.index') ? 'active' : '' }}">
                        <i class="ph ph-article"></i>
                        {{ __('Newsletter') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.bulk-email.index') }}"
                        class="nav-link {{ Route::is('admin.bulk-email.index') ? 'active' : '' }}">
                        <i class="ph ph-tray"></i>
                        {{ __('Bulk Email') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.web.setting.index') }}"
                class="nav-link {{ request()->routeIs('admin.web.setting.index') ? 'active' : '' }}">
                <i class="ph ph-wrench"></i>
                <span>{{ __('Setting') }}</span>
            </a>
        </li>

    </ul>
</div>


