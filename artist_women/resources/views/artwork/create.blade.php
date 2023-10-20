@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Thêm nghệ sĩ')

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thêm mới nghệ sĩ</h3>       
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.index') }}" class="btn btn-primary float-end">Danh sách tác giả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    {{-- HoTen --}}
                    <div class="form-group">
                        <label for="">Tên nghệ sĩ</label>
                        <input type="text" name="nameAuthor" class="form-control" placeholder="Nhập tên tác giả">
                    </div>
                    <!-- {{-- img --}}
                    <div class="form-group mt-4">
                        <label for="">Hình ảnh tác giả</label>
                        <input type="file" name="img" class="form-control-file" >
                    </div> -->
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Lưu</button>
        </form>
    </div>
</div>
@endsection