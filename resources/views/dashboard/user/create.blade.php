@extends('dashboard.layouts.main')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/address" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="address">Name</label>
                            <input type="text" name="address" class="form-control" id="address" required value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                            <label for="city">Username</label>
                            <input type="text" name="city" class="form-control" id="city" required value="{{ old('city') }}">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Password</label>
                            <input type="text" name="postcode" class="form-control" id="postcode" required value="{{ old('postcode') }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/dashboard/address" class="btn btn-danger ml-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
