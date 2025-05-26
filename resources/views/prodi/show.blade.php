@extends('layout.main')
@section('title', 'Program Studi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Program Studi</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $prodi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Singkatan</th>
                        <td>{{ $prodi->singkatan }}</td>
                    </tr>
                    <tr>
                        <th>Kaprodi</th>
                        <td>{{ $prodi->kaprodi }}</td>
                    </tr>
                    <tr>
                        <th>Sekretaris</th>
                        <td>{{ $prodi->sekretaris }}</td>
                    </tr>
                    <tr>
                        <th>Fakultas</th>
                        <td>{{ $prodi->fakultas->nama_fakultas }}</td>
                    </tr>
                </table>
            </div>
          </div>
        </div>
    </div>
@endsection
