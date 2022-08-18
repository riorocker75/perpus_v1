@extends('layouts.main_app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Buku Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Buku Sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->



    </div>  
    
    <section class="content">
  
      <div class="container-fluid">
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data semua buku sekolah</h3>
                <a href="{{url('/dashboard/buku_sekolah/add')}}" class="btn btn-primary float-right">Tambah data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Jumlah</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; ?>
                      @foreach ($data as $dt)
                      @php

                      @endphp
                           <tr>
                                <td>{{$no++}}</td>
                                <td>{{$dt->judul}}</td>
                                <td>{{$dt->penulis}} </td>
                                <td>{{$dt->penerbit}} </td>
                                <td>{{$dt->jumlah}} </td>

                                <td>
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#bukusekolah-{{$dt->id}}">Detail</a>

                                    <a href="{{url('/dashboard/buku_sekolah/edit/'.$dt->id.'')}}" class="btn btn-warning">Ubah</a>
                                <a href="{{url('/dashboard/buku_sekolah/delete/'.$dt->id.'')}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                            {{-- modal bukusekolah --}}
                            <!-- Modal -->
                            <div class="modal fade" id="bukusekolah-{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail {{$dt->judul}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Judul Buku</label>
                                            <input type="text" class="form-control" name="judul" value="{{$dt->judul}}" disabled>
                                        </div>
            
                                        <div class="form-group">
                                            <label for="">Penulis</label>
                                            <input type="text" class="form-control" name="penulis" value="{{$dt->penulis}}" disabled>
                                        </div>
            
                                        <div class="form-group">
                                            <label for="">Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" value="{{$dt->penerbit}}" disabled>
                                        </div>
            
                                        <div class="form-group">
                                            <label for="">Tahun Terbit</label>
                                            <input type="number" min="1900" max="2099" step="1" class="form-control" value="{{$dt->tahun_terbit}}" name="tahun_terbit" disabled>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="">Jumlah Buku</label>
                                            <input type="text" class="form-control" name="jumlah" value="{{$dt->jumlah}}" disabled>
                                        </div>
            
                                        <div class="form-group">
                                            <label for="">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" value="{{$dt->lokasi}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Tanggal Input</label>
                                            <input type="text" class="form-control" name="" value="{{date('Y-m-d',strtotime($dt->tanggal))}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jam Input</label>
                                            <input type="text" class="form-control" name="" value="{{date('H:i',strtotime($dt->tanggal))}}" disabled>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                      @endforeach
                 
                 
                  </tbody>
              
                </table>
              </div>
              <!-- /.card-body -->
      </section>   

</div>  


@endsection