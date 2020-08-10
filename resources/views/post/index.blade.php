@extends('adminlte.master')
@section('content')
 <div class="mt-3 ml-3">
   <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Pertanyaan</h3>
                 <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                  {{session('success')}}
                </div>
                @endif
                <a href="/post/create" class="btn btn-primary mb-2">Create New Post</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th> No.</th>
                      <th>nama</th>
                      <th>Deskripsi</th>
                      <th>tanggal_mulai</th>
                      <th>tanggal_deadline</th>
                      <th>status</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($post as $key =>$data) 
                     <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->nama_proyek}}</td>
                      <td>{{$data->deskripsi}}</td>
                      <td>{{$data->tanggal_mulai}}</td>
                      <td>{{$data->tanggal_deadline}}</td>
                      <td>{{$data->status}}</td>
                      <td style="display: flex;ssss">
                        <a href="/pertanyaan/{{$data->id_proyek}}" class="btn btn-info btn-sm mb-2">Show</a>
                        <a href="/pertanyaan/{{$data->id_proyek}}/edit" class="btn btn-success btn-sm mb-2">Update</a>

                      <form action="/pertanyaan/{{$data->id_proyek}}" method="post">
                        @csrf
                        @method('Delete')
                        <input type="submit"value="delete" class="btn btn-danger btn-sm" >
                      </form></td>
                    </tr>
                    @endforeach
                   
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
       
        
      </div>
 </div>
@endsection

