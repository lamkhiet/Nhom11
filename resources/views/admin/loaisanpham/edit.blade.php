@extends('admin.loaisanpham.sidebar')
@section('content')
    <div class="card-body">
        <form method="post" action="{{route("loaisanpham.update", $loaisanpham->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Tên Loại</label>
                        <input type="text" class="form-control" value="{{$loaisanpham->tenloai}}" name="tenloai" placeholder="Company" >
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Trạng Thái</label>
                        <input type="text" name="trangthai" value="{{$loaisanpham->trangthai}}" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
    <div class="clearfix"></div>
    </form>
    </div>
@stop
