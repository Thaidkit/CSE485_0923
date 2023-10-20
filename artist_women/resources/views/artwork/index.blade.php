@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Nghệ Sĩ Phụ Nữ')

@section('main')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> Danh sách nghệ sĩ phụ nữ</h4>
            </div>
            <div class="col-md-6">
                <a href="{{ route('artworks.create') }}" class="btn btn-success float-end">Thêm mới nghệ sĩ</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã nghệ sĩ</th>
                    <th>Tên nghệ sĩ</th>
                    <th>Mô tả</th>
                    <th>Loại hình nghệ thuật</th>
                    <th>Kênh truyền thông</th>
                    <th>Ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->id }}</td>
                        <td>{{ $artwork->artist_name }}</td>
                        <td>{{ $artwork->description }}</td>
                        <td>{{ $artwork->art_type }}</td>
                        <td>{{ $artwork->media_link }}</td>
                        <td>{{ $artwork->cover_image }}</td>
                        <td>
                            <a href="/artworks/{{ $artwork->id }}/edit" class="btn btn-info">Sửa</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modal{{ $artwork->id }}">
                                Xóa
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $artwork->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE THIS ARTIST</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa nghệ sĩ này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/artworks/{{ $artwork->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
           {{ $artworks->links() }}

        </div>
    </div>
</div>

@endsection