@extends('admin')
@section('content-admin')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Manage Berita</h4>
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create"
            ><i class="bx bx-bell me-1"></i> Create</a
          >
        </li>
      </ul>
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Hoverable rows</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Author</th>
                        <th>Kategori</th>
                        <th>Dibuat</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($data as $key => $value)
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$value->judul}}</strong></td>
                          <td>{{\Str::limit($value->deskripsi, 50)}}</td>
                          <td>{{$value->nama}}</td>
                          <td><span class="badge bg-label-primary me-1">{{$value->nama_category}}</span></td>
                          <td>{{$value->created_at}}</td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>                          
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}
                </div>
              </div>      
    </div>
  </div>
</div>
@endsection