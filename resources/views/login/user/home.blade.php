@extends('login.layout.dashboard')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome {{auth()->user()->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <h2>Status Berkas Mutasi</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama/NIP ASN</th>
              <th scope="col">Pangkat Terakhir</th>
              <th scope="col">Instansi/Organisasi Asal</th>
              <th scope="col">Instansi/Organisasi Tujuan</th>
              <th scope="col">Data Pendukung</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>Ayam / 1234</td>
              <td>Pejabat IIIs</td>
              <td>Hilir</td>
              <td>Mudik</td>
              <td>"Lihat"</td>
              <td>"ongoing"</td>
            </tr>
          </tbody>
        </table>
      </div>

@endsection