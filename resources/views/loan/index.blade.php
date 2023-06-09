@extends('_layouts.app')

@section('title', 'Data Peminjaman')

@section('content')
	
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
		  <span>{{ session('success' )}}</span>
		  <button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

	<div id="alert"></div>

	<div class="card shadow">
		<div class="card-header py-2">
			<h2 class="h6 m-0 font-weight-bold text-primary">Data Peminjaman</h2><br>
			<a href="{{ route('loan.create') }}" class="btn btn-sm btn-primary shadow">Peminjaman Baru</a>
			<a href="{{ route('loan.extend') }}" class="btn btn-sm btn-primary shadow">Perpanjangan</a>
			<a href="{{ route('loan.return') }}" class="btn btn-sm btn-primary shadow">Perpanjangan</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Buku</th>
							<th>Peminjam</th>
							<th>Tanggal Pinjam</th>
							<th>Tanggal Kembali</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

@endsection

@push('css')
	<link rel="stylesheet" href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@push('js')
	<script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

	<script>
		const ajaxUrl = '{{ route('loan.datatables') }}'
		const deleteUrl = '{{ route('loan.destroy', ':id') }}'
		const csrf = '{{ csrf_token() }}'
	</script>

	<script src="{{ asset('js/loan.js') }}"></script>
@endpush