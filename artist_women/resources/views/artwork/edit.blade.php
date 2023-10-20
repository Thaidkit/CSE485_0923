@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Sửa tác giả')

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Sửa tác giả</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.index') }}" class="btn btn-primary float-end">Danh sách tác giả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    {{-- MTL --}}
                    <div class="form-group">
                        <label for="">Mã nghệ sĩ</label>
                        <input type="text" name="id" class="form-control bg-warning" value="{{ $artwork->id }}" readonly>
                    </div>
                    {{-- HoTen --}}
                    <div class="form-group">
                        <label for="">Tên tác giả</label>
                        <input type="text" name="name" class="form-control" value="{{ $artwork->name }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Cập nhật</button>
        </form>
    </div>
</div>
@endsection