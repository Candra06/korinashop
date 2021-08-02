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

<form action="/dashboard/testimoni/data" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Post</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                      
                        <div class="col-lg-12 mb-3">
                            <select class="form-control @error('tipe') is-invalid @enderror" name="tipe">
                                <option value="">Select Tipe</option>
                                <option value="foto" {{old('tipe') == 'foto' ? 'selected' : ''}}>foto</option>
                                <option value="video" {{old('tipe') == 'video' ? 'selected' : ''}}>video</option>
                            </select>
                            @error('tipe')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                       
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="">File testimoni</label>
                                <input type="file" id="input-file-now" name="file" class="dropify" />
                                @error('file')
                                    <span class="text-danger mt-2">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-primary" type="submit">Publish</button>
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