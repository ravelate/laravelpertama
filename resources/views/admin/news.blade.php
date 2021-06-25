@extends('layout/layoutadmin')
@section('content')
<?php 
$thisPage = "news";
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
              <h4><i class="fa fa-angle-right"></i>News Table</h4>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah">Tambah Data</button>

      <div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Berita</h4>
            </div>
            <form action="" method="post" enctype="multipart/from-data">
              @csrf
                <div class="modal-body">
                    <div class="from-group">
                      <label class="control-label" for="hrg_brg"> Nama Author</label>
                       <select class="from-control" name="author_id">
                        @foreach ($data_author as $id => $name)
                          <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                       </select>
                    </div>
                    <input type="hidden" name="is_published" value="0">
                    <div class="from-group">
                        <label class="control-label" for="hrg_brg"> Title</label>
                        <input type="text" name="title" class="from-control" id="hrg_brg" required>
                </div>
                <div class="from-group">
                        <label class="control-label" for="stok_brg"> Content</label>
                        <input type="text" name="content" class="from-control" id="stok_brg" required>
                </div>
                <div class="from-group">
                        <label class="control-label" for="gbr_brg"> Picture</label>
                        <input type="text" name="picture" class="from-control" id="gbr_brg" required>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                </div>
                </div>
            </form>
          </div>
        </div>
      
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> gambar</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Judul</th>
                    <th><i class="fa fa-bookmark"></i> konten</th>
                    <th><i class=" fa fa-edit"></i> published</th>
                    <th><i class=" fa fa-edit"></i> author</th>
                    <th><i class=" fa fa-edit"></i> dibuat pada</th>
                    <th><i class=" fa fa-edit"></i> action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data_news as $news)
                  <tr>
                    <td>
                      <a href="{{$news->picture}}">lihat gambar</a>
                    </td>
                    <td class="hidden-phone">{{$news->title}}</td>
                    <td>{{$news->content}}</td>
                    @if ($news->is_published == 1)
                    <td><span class="label label-info label-mini">published</span></td>
                    @else
                    <td><span class="label label-info label-mini">unpublish</span></td>
                    @endif
                    @foreach ($news->author as $author)
                        <td>{{$author->name}}</td>
                    @endforeach
                    
                    <td>{{$news->updated_at}}</td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      {{-- Tombol edit --}}
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$news->id}}" data-formid="{{$news->id}}">Edit</button>
                    <div id="edit{{$news->id}}" class="modal fade" role="dialog" id="{{$news->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Berita</h4>
                                </div>
                                <form action="" method="POST" enctype="multipart/from-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id" value="{{$news->id}}">
                                    <div class="modal-body">
                                      
                                      <div class="from-group">
                                        <label class="control-label" for="author_id"> Nama Author</label>
                                         <select class="from-control" name="author_id">
                                          @foreach ($data_author as $id => $name)
                                            <option value="{{$id}}">{{$name}}</option>
                                          @endforeach
                                         </select>
                                      </div>
                                      
                                        <div class="from-group">
                                            <label class="control-label" for="hrg_brg"> Judul</label>
                                            <input type="text" name="title" class="from-control" id="hrg_brg" value="{{$news->title}}"required>
                                    </div>
                                    <div class="from-group">
                                            <label class="control-label" for="stok_brg"> Link Gambar</label>
                                            <input type="text" name="picture" class="from-control" id="stok_brg" value="{{$news->picture}}" required>
                                    </div>
                                    <div class="from-group">
                                            <label class="control-label" for="stok_brg"> publish</label>
                                            <select class="from-control" name="is_published">
                                                <option value="1">Published</option>
                                                <option value="0">unpublish</option>
                                             </select>
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
                                    {{-- End edit --}}
                                    {{-- Tombol Delete --}}
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$news->id}}" data-formid="{{$news->id}}">Hapus</button>
                    <div id="hapus{{$news->id}}" class="modal fade" role="dialog" id="{{$news->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <form action="" method="POST" enctype="multipart/from-data">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{$news->id}}">
                                <h4 class="modal-title">yakin Hapus?</h4>
                                        <input type="submit" class="btn btn-success pull-right" value="Hapus">
      
                                    </form>
                                </div>
                                    </div>
                                    </div>
                                    </div>
                                    {{-- End Delete --}}
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