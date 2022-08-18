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
                <h3 class="card-title">Tambah Data Buku Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @foreach ($data as $dt)
                    
                <form action="{{ url('/dashboard/buku_sekolah/update') }}" method="post">
                       @csrf  
                       @method('POST')
                <div class="row">
                 <div class="col-md-6">
                         

                             <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" class="form-control" name="judul" value="{{$dt->judul}}" required>
                                <input type="hidden" class="form-control" name="id" value="{{$dt->id}}" required>

                            </div>

                            <div class="form-group">
                                <label for="">Penulis</label>
                                <input type="text" class="form-control" name="penulis"  value="{{$dt->penulis}}" required>
                            </div>

                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" value="{{$dt->penerbit}}" required>
                            </div>

                            <div class="form-group">
                                <label for="">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" class="form-control" value="{{$dt->tahun_terbit}}" name="tahun_terbit" required>
                            </div>
                          
                            <div class="form-group">
                                <label for="">Jumlah Buku</label>
                                <input type="text" class="form-control" name="jumlah" value="{{$dt->jumlah}}" required>
                            </div>

                            <div class="form-group">
                                <label for="">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" value="{{$dt->lokasi}}" required>
                            </div>

                        
                 </div>

                 
                 
                </div>
                <button type="submit" class="btn btn-primary btn-lg float-right">Ubah</button>
                 
                 </form>
                 @endforeach

              </div>
              <!-- /.card-body -->
      </section>   

</div>  


@endsection