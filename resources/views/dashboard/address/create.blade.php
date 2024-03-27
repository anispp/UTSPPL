@extends('dashboard.layouts.main')

@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="h3">Tambah Data Address</h1>
                </div>
                <div class="card-body">
                    <form action="/dashboard/address" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" name="street" class="form-control" id="street" aria-describedby="streetHelp" required value="{{ old('street') }}">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="city" aria-describedby="cityHelp" required value="{{ old('city') }}">
                        </div>
                        <div class="mb-3">
                            <label for="province" class="form-label">Province</label>
                            <input type="text" name="province" class="form-control" id="province" required value="{{ old('province') }}">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" class="form-control" id="country" required value="{{ old('country') }}">
                        </div>
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Postal Code</label>
                            <input type="text" name="postal_code" class="form-control" id="postal_code" required value="{{ old('postal_code') }}">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary me-md-2">Save</button>
                            <a href="/dashboard/address" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
