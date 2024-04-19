@extends('dashboard.kerangka')
@section('tittle','HIMTI-UMT | Dashboard | Angkatan')
@section('angkatan','active')
@section('content')
@include('sweetalert::alert')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Angkatan</h2>
                    <hr>
                    <a href="{{ route('angkatan.create')}}" class="btn btn-primary">Create Angkatan</a>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered table-sm text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($tambahAngkatan as $key => $angkatanTambah)
                            <tr>
                                <td>{{ $tambahAngkatan->firstItem() + $key}}</td>
                                <td>
                                    <a class="btn" href="{{ route('angkatan.show', $angkatanTambah->id)}}">{{ $angkatanTambah->angkatan }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('angkatan.edit', $angkatanTambah->id)}}" class="btn btn-success btn-sm">
                                        <i class='fas fa-edit'></i></a>
                                    <form action="{{ route('angkatan.destroy', $angkatanTambah->id)}}" method="POST" class="pt-1">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete_confirm">
                                        <i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                    @empty
                            <tr>
                                    <td colspan="7" class="text-center" >Data Kosong</td>
                            </tr>
                    @endforelse
                    </tbody>
                </table>
                <div>
                        showing
                        {{$tambahAngkatan->firstItem()}}
                        of
                        {{$tambahAngkatan->lastItem()}}
                        </div>
                <div class="py-4">
                    {{ $tambahAngkatan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
