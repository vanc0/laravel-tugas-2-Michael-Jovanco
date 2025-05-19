@extends('layout.main')
@section('title', 'Program Studi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Tambah Program Studi</div></div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
              <!--begin::Body-->
              <div class="card-body">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Program Studi</label>
                  <input type="text" class="form-control" name="nama" value="{{old ('nama')}}">
                  @error('nama')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                <div class="mb-3">
                  <label for="singkatan" class="form-label">Singkatan</label>
                  <input type="text" class="form-control" name="singkatan" value="{{old ('singkatan')}}">
                  @error('singkatan')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                  <input type="text" class="form-control" name="kaprodi" value="{{old ('kaprodi')}}">
                  @error('kaprodi')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                <div class="mb-3">
                    <label for="sekretaris" class="form-label">Nama Sekretaris</label>
                    <input type="text" class="form-control" name="sekretaris" value="{{old ('sekretaris')}}">
                    @error('sekretaris')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="fakultas_id" class="form-label">Fakultas</label>
                    <select class="form-control" name="fakultas_id">
                        @foreach($fakultas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_fakultas }}</option>
                        @endforeach
                    </select>
                    @error('fakultas_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
              </div>
              <!--end::Body-->
              <!--begin::Footer-->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!--end::Footer-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
      <!--end::Row-->
      @endsection
