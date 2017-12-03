<ul class="sidebar-nav nav flex-column">
	<li class="sidebar-nav__item sidebar-nav__item--heading">
		Account
	</li>
	<li class="sidebar-nav__item">
		<a class="sidebar-nav__link" href="{{ route('dashboard') }}">
			<img class="sidebar-nav__img" src="{{ asset('images/create-project.png') }}" alt="Dashboard">
			<span>Dashboard</span>
		</a>
	</li>
	@if (in_array('customer', $roles))
		<li class="sidebar-nav__item">
			<a class="sidebar-nav__link" href="{{ route('bid-list') }}">
				<img class="sidebar-nav__img" src="{{ asset('images/create-project.png') }}" alt="Create Project">
				<span>Create Project</span>
			</a>
		</li>
	@endif
	<li class="sidebar-nav__item">
		<a class="sidebar-nav__link" href="{{ route('bid-list') }}">
			<img class="sidebar-nav__img" src="{{ asset('images/bid-status.png') }}" alt="Bid Status">
			<span>Bid Status</span>
		</a>
	</li>
	<li class="sidebar-nav__item">
		<a class="sidebar-nav__link" href="{{ route('transaction-history') }}">
			<img class="sidebar-nav__img" src="{{ asset('images/transaction-history.png') }}" alt="Transaction History">
			<span>Transaction History</span>
		</a>
	</li>
</ul>
