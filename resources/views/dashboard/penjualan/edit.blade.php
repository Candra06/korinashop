@extends('dashboard.templates.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
    <style>
        .mce-notification.mce-in {
            display: none !important;
        }
        .dropify-wrapper .dropify-message p {
            font-size: 14px !important;
        }
    </style>
@endpush
@section('content')

<form action="/dashboard/produk/index/{{$data->id}}" enctype="multipart/form-data" method="POST">
    @method('put')
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Pembelian Produk</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nama Pembeli</label>
                            <h3>{{$data->nama_pembeli}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Produk</label>
                            <h3>{{$data->nama}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Jumlah Pembelian</label>
                            <h3>{{$data->jumlah}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Telepon Pembeli</label>
                            <h3>{{$data->telepon_pembeli}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Email Pembeli</label>
                            <h3>{{$data->email_pembeli}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat Pembeli</label>
                            <h3>{{$data->alamat_pembeli}}</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">Catatan</label>
                            <h3>{{$data->catatan}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</form>

@endsection

@push('scripts')
  <script src="{{asset('assets/js/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/js/tinymce.js')}}"></script>
  <script src="{{ asset('assets/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
@endpush