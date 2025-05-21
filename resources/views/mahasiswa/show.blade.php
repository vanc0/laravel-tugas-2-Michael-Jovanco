@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Mahasiswa</h3>
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
                        <tr>
                            <td colspan="2">
                                <img src="{{ asset('images/' . $mahasiswa->foto) }}" class="img-fluid" style="max-width: 50px; height: auto;" >
                            </td>
                        </tr>
                        <th>Nama</th>
                        <td>{{ $mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>NPM</th>
                        <td>{{ $mahasiswa->npm }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $mahasiswa->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>{{ $mahasiswa->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Asal SMA</th>
                        <td>{{ $mahasiswa->asal_sma }}</td>
                    </tr>
                    <tr>
                        <th>Prodi</th>
                        <td>{{ $mahasiswa->prodi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Fakultas</th>
                        <td>{{ $mahasiswa->prodi->fakultas->nama_fakultas }}</td>
                    </tr>
                </table>
            </div>
          </div>
        </div>
    </div>
@endsection
