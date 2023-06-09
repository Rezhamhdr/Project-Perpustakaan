@extends('_layouts.app')

@section('title', 'Dashboard')

@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
	  		<span>{{ session('success' )}}</span>
	  		<button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Buku</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBook }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Anggota</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalMember }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Peminjaman</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalLoan }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-file fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Peminjaman Aktif</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $activeLoan }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </div>

@endsection

@push('js')
	<script>
		const loanPerMonth = @json($loanPerMonth);
		const topBook = @json($topBook)
	</script>
	<script src="{{ asset('sbadmin/vendor/chart.js/Chart.min.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush