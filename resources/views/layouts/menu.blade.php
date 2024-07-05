<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-red"></i>
        <p>Home</p>
    </a>
</li>

@if(Auth::user()->can('annual-demand-list') ||
Auth::user()->can('annual-demand-location-wise') ||
Auth::user()->can('annual-demand-import'))
    <li class="nav-item {{ request()->routeIs('annual_demands*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-paper-plane"></i>
            <p>Awarding<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">

            @if(Auth::user()->can('annual-demand-list') ||
                Auth::user()->can('annual-demand-location-wise'))
                <li class="nav-item">
                    <a href="{{route('annual_demands.index')}}" class="nav-link
                    {{ request()->routeIs('annual_demands.index', 'annual_demands.create') ? 'active' : '' }}
                    ">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>Detail</p>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('annual-demand-import') )
                <li class="nav-item">
                    <a href="{{route('annual_demands.import')}}" class="nav-link
                            {{ request()->routeIs('annual_demands.import')?'active':'' }}">
                        <i class="nav-icon fas fa-file-import"></i>
                        <p>Import</p>
                    </a>
                </li>
            @endif
        </ul>
    </li>
@endif

@if(Auth::user()->can('demand-from-location-oc-pending') ||
Auth::user()->can('demand-from-location-oc-completed') ||
Auth::user()->can('demand-from-location-oc-rejected') ||
Auth::user()->can('demand-from-location-op-pending') ||
Auth::user()->can('demand-from-location-op-completed') ||
Auth::user()->can('demand-from-location-op-rejected') ||
Auth::user()->can('demand-from-location-co-pending') ||
Auth::user()->can('demand-from-location-co-completed') ||
Auth::user()->can('demand-from-location-co-rejected') ||
Auth::user()->can('demand-from-location-create'))
    <li class="nav-item {{ request()->routeIs('demand_from_locations*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shipping-fast text-olive"></i>
            <p>AFF 1<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">

            @if(Auth::user()->can('demand-from-location-list') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.index')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Demand All</p>
                    </a>
                </li>
            @endif

            {{-- Data Operator Process --}}
            @if(Auth::user()->can('demand-from-location-create') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.create')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.create')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-primary"></i>
                        <p>New</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-op-pending') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.pendingtoop')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.pendingtoop')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Pending</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-op-completed') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.completedop')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.completedop')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Completed</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-op-rejected') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.rejectedop')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.rejectedop*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-danger"></i>
                        <p>Rejected</p>
                    </a>
                </li>
            @endif

{{-- Officer Commanding Process --}}
            @if(Auth::user()->can('demand-from-location-oc-pending') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.pendingtooc')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.pendingtooc')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Pending</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-oc-completed') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.completedbyoc')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.completedbyoc')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Completed</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-oc-rejected') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.rejectedbyoc')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.rejectedbyoc*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-danger"></i>
                        <p>Rejected</p>
                    </a>
                </li>
            @endif
{{-- Commanding Officer Process --}}
            @if(Auth::user()->can('demand-from-location-co-pending') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.pendingtoco')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.pendingtoco')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Pending</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-co-completed') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.completedbyco')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.completedbyco')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Completed</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('demand-from-location-co-rejected') )
                <li class="nav-item">
                    <a href="{{route('demand_from_locations.rejectedbyco')}}" class="nav-link
                        {{ request()->routeIs('demand_from_locations.rejectedbyco*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-danger"></i>
                        <p>Rejected</p>
                    </a>
                </li>
            @endif

        </ul>

    </li>
@endif

{{-- @if(Auth::user()->can('demand-from-location-list') )
    <li class="nav-item">
        <a href="{{route('demand_from_locations.index')}}" class="nav-link
                    {{ request()->routeIs('demand_from_locations*')?'active':'' }}">
            <i class="nav-icon fas fa-shipping-fast text-olive"></i>
            <p>Demand from Loc</p>
        </a>
    </li>
@endif --}}

@if(Auth::user()->can('receipt-from-location-list') ||
Auth::user()->can('receipt-from-location-op-pending') ||
Auth::user()->can('receipt-from-location-oc-pending') ||
Auth::user()->can('receipt-from-location-op-completed') ||
Auth::user()->can('receipt-from-location-op-rejected') ||
Auth::user()->can('receipt-from-location-oc-completed') ||
Auth::user()->can('receipt-from-location-oc-rejected'))
    <li class="nav-item {{ request()->routeIs('receipt_from_locations*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-truck-loading text-warning"></i>
            <p>AFF 2<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">

            {{-- @if(Auth::user()->can('receipt-from-location-list') )
                <li class="nav-item">
                    <a href="{{route('receipt_from_locations.index')}}" class="nav-link
                        {{ request()->routeIs('receipt_from_locations.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Receipt All</p>
                    </a>
                </li>
            @endif  --}}
            {{-- OPerator Process --}}
            @if(Auth::user()->can('receipt-from-location-op-pending') )
                <li class="nav-item">
                    <a href="{{route('receipt_from_locations.pendingop')}}" class="nav-link
                        {{ request()->routeIs('receipt_from_locations.pendingop')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Pending</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('receipt-from-location-oc-pending') )
                <li class="nav-item">
                    <a href="{{route('receipt_from_locations.pendingoc')}}" class="nav-link
                        {{ request()->routeIs('receipt_from_locations.pendingoc')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Pending</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('receipt-from-location-op-completed') || Auth::user()->can('receipt-from-location-oc-completed') )
                <li class="nav-item">
                    <a href="{{route('receipt_from_locations.completed')}}" class="nav-link
                        {{ request()->routeIs('receipt_from_locations.completed')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Completed</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('receipt-from-location-op-rejected') || Auth::user()->can('receipt-from-location-oc-rejected') )
                <li class="nav-item">
                    <a href="{{route('receipt_from_locations.rejected')}}" class="nav-link
                        {{ request()->routeIs('receipt_from_locations.rejected*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-danger"></i>
                        <p>Rejected</p>
                    </a>
                </li>
            @endif
        </ul>

    </li>
@endif

@if(Auth::user()->can('requisition-books-list') ||
Auth::user()->can('requisition-books-from-location-list'))
    <li class="nav-item {{ request()->routeIs('requisition_books*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-registered text-primary"></i>
            <p>AFI 3<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">

            @if(Auth::user()->can('requisition-books-snt-list') )
                <li class="nav-item">
                    <a href="{{route('requisition_books.view_requisitions')}}" class="nav-link
                            {{ request()->routeIs('requisition_books.view_requisitions')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>SNT List</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('requisition-books-under-cmd-list') )
                <li class="nav-item">
                    <a href="{{route('requisition_books.view_under_cmd_requisitions')}}" class="nav-link
                            {{ request()->routeIs('requisition_books.view_under_cmd_requisitions')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Under Cmd List</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('requisition-books-list') )
                <li class="nav-item">
                    <a href="{{route('requisition_books.index')}}" class="nav-link
                            {{ request()->routeIs('requisition_books.index')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Send</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('requisition-books-from-location-list') )
                <li class="nav-item">
                    <a href="{{route('requisition_books.from_location')}}" class="nav-link
                            {{ request()->routeIs('requisition_books.from_location')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Receive</p>
                    </a>
                </li>
            @endif
        </ul>

    </li>
@endif

@if(Auth::user()->can('issue-vouchers-from-location-list') ||
Auth::user()->can('issue-vouchers-author-location-list'))
    <li class="nav-item {{ request()->routeIs('issue_vouchers*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-registered text-danger"></i>
            <p>AFG 2<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">

            @if(Auth::user()->can('issue-vouchers-from-location-list') )
                <li class="nav-item">
                    <a href="{{route('issue_vouchers.from_location')}}" class="nav-link
                            {{ request()->routeIs('issue_vouchers.from_location')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Send</p>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('issue-vouchers-author-location-list') )
                <li class="nav-item">
                    <a href="{{route('issue_vouchers.author_location')}}" class="nav-link
                            {{ request()->routeIs('issue_vouchers.author_location')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Receive</p>
                    </a>
                </li>
            @endif
        </ul>

    </li>
@endif

@if(Auth::user()->can('condemn-certs-list') ||
    Auth::user()->can('condemn-certs-oc-list')||
    Auth::user()->can('condemn-certs-co-list')||
    Auth::user()->can('condemn-certs-mo-list')||
    Auth::user()->can('condemn-certs-supply-op-list')||
    Auth::user()->can('condemn-certs-supply-oc-list')||
    Auth::user()->can('condemn-certs-snt-op-list')||
    Auth::user()->can('condemn-certs-snt-so-list'))
    <li class="nav-item">
        <a href="{{route('condemn_certs.index')}}" class="nav-link
                {{ request()->routeIs('condemn_certs*')?'active':'' }}">
            <i class="nav-icon fas fa-vote-yea"></i>
            <p>AFF 22</p>
        </a>
    </li>
@endif

@if(Auth::user()->can('demand-from-customers-list')||
Auth::user()->can('demand-from-customers-co-list')||
Auth::user()->can('demand-from-customers-supply-oc-list')||
Auth::user()->can('demand-from-customers-supply-op-list'))
    <li class="nav-item">
        <a href="{{route('demand_from_customers.index')}}" class="nav-link
                {{ request()->routeIs('demand_from_customers*')?'active':'' }}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>AFT 30</p>
        </a>
    </li>
@endif

@if(Auth::user()->can('customer-issuances-list')||
Auth::user()->can('customer-issuances-oc-list'))    
    <li class="nav-item">
        <a href="{{route('customer_issuances.index')}}" class="nav-link
                {{ request()->routeIs('customer_issuances.index')?'active':'' }}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>Issuances</p>
        </a>
    </li>
@endif

@if(Auth::user()->can('customer-issuances-aff8-list'))  
<li class="nav-item">
    <a href="{{route('customer_issuances.aff8')}}" class="nav-link
            {{ request()->routeIs('customer_issuances.aff8')?'active':'' }}">
        <i class="nav-icon fas fa-cubes"></i>
        <p>AFF 8</p>
    </a>
</li>
@endif

@if(Auth::user()->can('customer-received-list'))
    <li class="nav-item">
        <a href="{{route('customer_received.index')}}" class="nav-link
                {{ request()->routeIs('customer_received*')?'active':'' }}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>AFG 2</p>
        </a>
    </li>
@endif

@if(Auth::user()->can('export-items-list')||
Auth::user()->can('export-brands-list')||
Auth::user()->can('export-suppliers-list'))
    <li class="nav-item {{ request()->routeIs('exports*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-export text-danger"></i>
            <p>Export<i class="right fas fa-angle-left text-warini"></i></p>
        </a>

        <ul class="nav nav-treeview">
            
            @if(Auth::user()->can('export-items-list') )
                <li class="nav-item">
                    <a href="{{route('exports.items')}}" class="nav-link
                            {{ request()->routeIs('exports.items')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Items</p>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('export-brands-list') )
                <li class="nav-item">
                    <a href="{{route('exports.brands')}}" class="nav-link
                            {{ request()->routeIs('exports.brands')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Brands</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('export-suppliers-list') )
                <li class="nav-item">
                    <a href="{{route('exports.suppliers')}}" class="nav-link
                            {{ request()->routeIs('exports.suppliers')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('export-locations-list') )
                <li class="nav-item">
                    <a href="{{route('exports.locations')}}" class="nav-link
                            {{ request()->routeIs('exports.locations')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Locations</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('export-ration-year-list') )
                <li class="nav-item">
                    <a href="{{route('exports.ration_year')}}" class="nav-link
                            {{ request()->routeIs('exports.ration_year')?'active':'' }}">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Ration Year</p>
                    </a>
                </li>
            @endif
        </ul>

    </li>
@endif

@if(Auth::user()->can('master-supplier-list') ||
Auth::user()->can('master-location-types-list') ||
Auth::user()->can('master-location-list') ||
Auth::user()->can('master-ration-categories-list') ||
Auth::user()->can('master-ration-sub-categories-list') ||
Auth::user()->can('master-item-categories-list') ||
Auth::user()->can('master-item-list') ||
Auth::user()->can('master-brand-list') ||
Auth::user()->can('master-quarter-list') ||
Auth::user()->can('master-quarter-item-price-list') ||
Auth::user()->can('master-approved-unit-price-list') ||
Auth::user()->can('master-measurement-list') ||
Auth::user()->can('master-receipt-type-list') ||
Auth::user()->can('master-ration-date-list') ||
Auth::user()->can('master-ration-type-list') ||
Auth::user()->can('master-ration-type-list') ||
Auth::user()->can('master-ration-time-list') ||
Auth::user()->can('master-menu-list') ||
Auth::user()->can('master-supplier-list'))
    <li class="nav-item {{ request()->routeIs('menus*') || request()->routeIs('ration_times*') || request()->routeIs('ration_types*') || request()->routeIs('ration_dates*') || request()->routeIs('items*') ||
                        request()->routeIs('location_types*') || request()->routeIs('locations*') || request()->routeIs('item_categories*') || request()->routeIs('ration_categories*') || request()->routeIs('brands*') ||
                        request()->routeIs('quarters*') || request()->routeIs('quarter_item_prices*') || request()->routeIs('measurements*') || request()->routeIs('receipt_types*') || request()->routeIs('suppliers*')||
                        request()->routeIs('ration_sub_categories*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs text-blue"></i>
            <p>Master Data<i class="right fas fa-angle-left text-blue"></i></p>
        </a>

        <ul class="nav nav-treeview">

            @if(Auth::user()->can('master-location-types-list') )
                <li class="nav-item">
                    <a href="{{route('location_types.index')}}" class="nav-link
                        {{ request()->routeIs('location_types*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Location Type</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-location-list') )
                <li class="nav-item">
                    <a href="{{route('locations.index')}}" class="nav-link
                        {{ request()->routeIs('locations*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Location</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-ration-categories-list') )
                <li class="nav-item">
                    <a href="{{route('ration_categories.index')}}" class="nav-link
                        {{ request()->routeIs('ration_categories*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Category</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-ration-sub-categories-list') )
                <li class="nav-item">
                    <a href="{{route('ration_sub_categories.index')}}" class="nav-link
                        {{ request()->routeIs('ration_sub_categories*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Sub Category</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-item-categories-list') )
                <li class="nav-item">
                    <a href="{{route('item_categories.index')}}" class="nav-link
                        {{ request()->routeIs('item_categories*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Item Category</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-item-list') )
                <li class="nav-item">
                    <a href="{{route('items.index')}}" class="nav-link
                        {{ request()->routeIs('items*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Item</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-brand-list') )
                <li class="nav-item">
                    <a href="{{route('brands.index')}}" class="nav-link
                        {{ request()->routeIs('brands*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Brand</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-quarter-list') )
                <li class="nav-item">
                    <a href="{{route('quarters.index')}}" class="nav-link
                        {{ request()->routeIs('quarters*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Quarter</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-quarter-item-price-list') )
                <li class="nav-item">
                    <a href="{{route('quarter_item_prices.index')}}" class="nav-link
                        {{ request()->routeIs('quarter_item_prices*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Quarter Item Price</p>
                    </a>
                </li>
            @endif

            @if (Auth::user()->can('master-approved-unit-price-list'))
                <li class="nav-item">
                    <a href="{{route('approved_unit_price.index')}}" class="nav-link
                        {{ request()->routeIs('approved_unit_price*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Approved Price</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-measurement-list') )
                <li class="nav-item">
                    <a href="{{route('measurements.index')}}" class="nav-link
                        {{ request()->routeIs('measurements*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Denomination</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-receipt-type-list') )
                <li class="nav-item">
                    <a href="{{route('receipt_types.index')}}" class="nav-link
                        {{ request()->routeIs('receipt_types*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Receipt Type</p>
                    </a>
                </li>
            @endif

            @if(Auth::user()->can('master-ration-date-list') )
                    <li class="nav-item">
                        <a href="{{route('ration_dates.index')}}" class="nav-link
                            {{ request()->routeIs('ration_dates*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Ration Dates</p>
                        </a>
                    </li>
            @endif

            <!-- @if(Auth::user()->can('master-ration-date-list') ) -->
                    <li class="nav-item">
                        <a href="{{route('ration_years.index')}}" class="nav-link
                            {{ request()->routeIs('ration_years*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Ration Years</p>
                        </a>
                    </li>
            <!-- @endif -->

            @if(Auth::user()->can('master-ration-type-list') )
                    <li class="nav-item">
                        <a href="{{route('ration_types.index')}}" class="nav-link
                            {{ request()->routeIs('ration_types*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Ration Types</p>
                        </a>
                    </li>
            @endif

            @if(Auth::user()->can('master-ration-time-list') )
                    <li class="nav-item">
                        <a href="{{route('ration_times.index')}}" class="nav-link
                            {{ request()->routeIs('ration_times*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Meal Type</p>
                        </a>
                    </li>
            @endif

            @if(Auth::user()->can('master-menu-list') )
                    <li class="nav-item">
                        <a href="{{route('menus.index')}}" class="nav-link
                            {{ request()->routeIs('menus*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Menu</p>
                        </a>
                    </li>
            @endif

            @if(Auth::user()->can('master-supplier-list') )
                    <li class="nav-item">
                        <a href="{{route('suppliers.index')}}" class="nav-link
                            {{ request()->routeIs('suppliers*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Suppliers</p>
                        </a>
                    </li>
            @endif

            @if(Auth::user()->can('master-panelty-rule-list') )
                    <li class="nav-item">
                        <a href="{{route('panelty_rules.index')}}" class="nav-link
                            {{ request()->routeIs('panelty_rules*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Panelty Rules</p>
                        </a>
                    </li>
            @endif

            @if(Auth::user()->can('master-panelty-list') )
                    <li class="nav-item">
                        <a href="{{route('panelties.index')}}" class="nav-link
                            {{ request()->routeIs('panelties*')?'active':'' }}">
                            <i class="far fa-circle nav-icon text-blue"></i>
                            <p>Panelty</p>
                        </a>
                    </li>
            @endif
    </ul>

    </li>
@endif





<li class="nav-item {{ request()->routeIs('annual_demand') || request()->routeIs('demand') || request()->routeIs('ration_item_receipt') || request()->routeIs('supplier_history') || request()->routeIs('reports.stock')?'menu-open':'' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-file-alt text-red"></i>
        <p>Reports<i class="right fas fa-angle-left text-red"></i></p>
    </a>

    @can('annual-demand-report')
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('annual_demand')}}" class="nav-link
            {{ request()->routeIs('annual_demand')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Annual Demand Report</p>
            </a>
        </li>
    </ul>
    @endcan

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('demand')}}" class="nav-link {{ request()->routeIs('demand')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Demand Report</p>
            </a>
        </li>
    </ul>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('ration_item_receipt')}}" class="nav-link {{ request()->routeIs('ration_item_receipt')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Ration Items Receipt</p>
            </a>
        </li>
    </ul>

    {{-- <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Delayed Ration Items</p>
            </a>
        </li>
    </ul> --}}


    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('supplier_history')}}" class="nav-link {{ request()->routeIs('supplier_history')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Supplier History</p>
            </a>
        </li>
    </ul>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('report.supplier_penalty')}}" class="nav-link {{ request()->routeIs('report.supplier_penalty')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Penalty (Supplier wise)</p>
            </a>
        </li>
    </ul>

    {{-- <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Penalty (Item wise)</p>
            </a>
        </li>
    </ul> --}}

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('reports.stock') }}" class="nav-link {{ request()->routeIs('reports.stock')?'active':'' }}">
                <i class="far fa-circle nav-icon text-red"></i>
                <p>Stock Report</p>
            </a>
        </li>
    </ul>

</li>








@can('role-list','user-list','logindetail-list','searchdetail-list')
    <li class="nav-item {{ request()->routeIs('users*', 'roles*','logindetails.index','searchdetails.index')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-purple"></i>
            <p>
                System Management
                <i class="right fas fa-angle-left text-purple"></i>
            </p>
        </a>

        @can('role-list')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link
                    {{ request()->routeIs('roles.edit','roles.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>User Roles</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('user-list')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link
                    {{ request()->routeIs('users.index','users.edit')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>All Users</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('logindetail-list')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('logindetails.index')}}" class="nav-link
                    {{ request()->routeIs('logindetails.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>Login Detail</p>
                    </a>
                </li>
            </ul>
        @endcan


    </li>
@endcan

<li class="nav-item">
    <a href="{{ route('change.index') }}" class="nav-link {{ Request::is('change.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-key text-orange"></i>
        <p>Change Password</p>
    </a>
</li>
