@extends('layouts.main_app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->



    </div>  
     <div style="text-align:center;margin:30px 0">

   
  </div>
    <section class="content">
        @php
            $jlh_buku_sekolah= App\Models\Buku::where('jenis',1)->count(); 
            $jlh_buku_cerita= App\Models\Buku::where('jenis',2)->count();  
            $jlh_anggota= App\Models\Anggota::all()->count(); 
            $jlh_transaski= App\Models\Transaksi::all()->count();   

        @endphp
      <div class="container-fluid">
         <div class="row">
                <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$jlh_buku_sekolah}}</h3>

                            <p>Buku Sekolah</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <a href="{{url('/dashboard/buku_sekolah/data')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                 </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$jlh_buku_cerita}}</h3>

                            <p>Buku Cerita</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <a href="{{url('/dashboard/buku_cerita/data')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{$jlh_anggota}}</h3>

                            <p>Anggota</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <a href="{{url('/dashboard/anggota/data')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$jlh_transaski}}</h3>

                            <p>Transaksi</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <a href="{{url('/dashboard/transaksi/data')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
         </div>



      </div>  
      </section>   

</div>  


@endsection