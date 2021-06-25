@extends('layout/layoutadmin')
@section('content')
<?php 
$thisPage = "author";
?>
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Author Table</h4>
                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah">Tambah Data</button>

<div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Author</h4>
            </div>
            <form action="" method="POST" enctype="multipart/from-data">
              @csrf
                <div class="modal-body">
                    <div class="from-group">
                        <label class="control-label" for="nm_brg"> Nama Author</label>
                        <input type="text" name="name" class="from-control" id="nm_brg" required>
                    </div>
                    <div class="from-group">
                        <label class="control-label" for="hrg_brg"> Alamat</label>
                        <input type="text" name="address" class="from-control" id="hrg_brg" required>
                </div>
                 <div class="from-group">
                        <label class="control-label" for="stok_brg"> Link Gambar</label>
                        <input type="text" name="picture" class="from-control" id="stok_brg" required>
                </div>
                <div class="from-group">
                        <label class="control-label" for="stok_brg"> publish</label>
                        <input type="number" name="publis" class="from-control" id="stok_brg" required>
                </div>
                
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                             
            </form>
                <hr>
                <thead>
                  <tr>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Gambar</th>
                    <th><i class="fa fa-bullhorn"></i> Nama Author</th>
                    <th><i class="fa fa-bookmark"></i> alamat</th>
                    <th><i class=" fa fa-edit"></i> total publish</th>
                    <th><i class=" fa fa-edit"></i> terakhir diubah</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($Authors as $Author)
                  <tr>
                    <td>
                      <a href="{{$Author->picture}}">lihat gambar</a>
                    </td>
                    <td class="hidden-phone">{{$Author->name}}</td>
                    <td>{{$Author->address}}</td>
                    <td><span class="label label-info label-mini">{{$Author->publis}} News</span></td>
                    <td>{{$Author->updated_at}} </td>
                    <td>
                      <!-- ini tombol edit -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$Author->id}}" data-formid="{{$Author->id}}">Edit</button>
                    <div id="edit{{$Author->id}}" class="modal fade" role="dialog" id="{{$Author->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Berita</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/from-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id" value="{{$Author->id}}">
                                    <div class="modal-body">
                                        <div class="from-group">
                                            <label class="control-label" for="nm_brg"> Nama Author</label>
                                            <input type="text" name="name" class="from-control" id="nm_brg" value="{{$Author->name}}" required>
                                        </div>
                                        <div class="from-group">
                                            <label class="control-label" for="hrg_brg"> Alamat</label>
                                            <input type="text" name="address" class="from-control" id="hrg_brg" value="{{$Author->address}}"required>
                                    </div>
                                    <div class="from-group">
                                            <label class="control-label" for="stok_brg"> Link Gambar</label>
                                            <input type="text" name="picture" class="from-control" id="stok_brg" value="{{$Author->picture}}" required>
                                    </div>
                                    <div class="from-group">
                                            <label class="control-label" for="stok_brg"> publish</label>
                                            <input type="text" name="publis" class="from-control" id="stok_brg" value="{{$Author->publis}}" required>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <input type="submit" class="btn btn-success" value="Save">
                                    </div>
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                                    </div>
              
                      <!-- ini tombol hapus -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$Author->id}}" data-formid="{{$Author->id}}">Hapus</button>
                    <div id="hapus{{$Author->id}}" class="modal fade" role="dialog" id="{{$Author->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <form action="" method="POST" enctype="multipart/from-data">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{$Author->id}}">
                                <h4 class="modal-title">yakin Hapus?</h4>
                                        <input type="submit" class="btn btn-success pull-right" value="Hapus">
      
                                    </form>
                                </div>
                                    </div>
                                    </div>
                                    </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    @endsection