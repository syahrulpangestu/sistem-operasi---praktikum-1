@extends('admin')
@section('content-admin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link" href="/admin"><i class="bx bx-user me-1"></i> Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"
              ><i class="bx bx-bell me-1"></i> Create</a
            >
          </li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" action="{{ route('create.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
              <div class="row">
                <input class="form-control" type="text" id="firstName" name="user_id" hidden value="2" autofocus />
                <div class="mb-12 col-md-12">
                    <label for="image" class="form-label">Image</label><br>
                    <input
                      type="file"
                      id="upload"
                      name="image"
                      class="account-file-input"
                      accept="image/png, image/jpeg"
                    />
                  </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Judul</label>
                  <input
                    class="form-control"
                    type="text"
                    id="firstName"
                    name="judul"
                    autofocus
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Kategori</label>
                  <select id="language" name="category_id" class="select2 form-select">
                    <option value="">Select Category</option>
                    <option value="2">Breaking News</option>
                    <option value="3">Education</option>
                    <option value="4">Preventing</option>
                    <option value="5">Update Covid</option>
                  </select>
                </div>                
                <div class="mb-12 col-md-12">
                    <label for="lastName" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
                    {{-- <input class="form-control" type="text" name="deskripsi" id="lastName" value="Doe" /> --}}
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
      </div>
    </div>
  </div>
@endsection
