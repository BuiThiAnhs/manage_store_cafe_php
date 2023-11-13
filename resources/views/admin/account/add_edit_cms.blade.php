@extends('admin.index')
@section('main-contents')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form name="cmsForm" id="cmsForm" @if(empty($cmsPage['id'])) action="{{url('/admin/add_edit_cms')}}" @else action="{{url('/admin/add_edit_cms/'.$cmsPage['id'])}}" @endif method="post">@csrf
                    <h5 class="card-title fw-semibold mb-6 ">{{$title}}</h5>
                    <button class="btn " > </button>
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title" @if($cmsPage['title']) value="{{$cmsPage['title']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Đường dẫn</label>
                        <input type="text" class="form-control" id="url" name="url" @if($cmsPage['url']) value="{{$cmsPage['url']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea type="text" rows="3" class="form-control" id="description" name="description" >@if($cmsPage['description']) {{$cmsPage['description']}} @endif </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Tiêu đề meta</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title"  @if($cmsPage['meta_title']) value="{{$cmsPage['meta_title']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="meta_desc" class="form-label">Mô tả meta</label>
                        <input type="text" class="form-control" id="meta_desc" name="meta_desc"  @if($cmsPage['meta_description']) value="{{$cmsPage['meta_description']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="meta_key" class="form-label"> Từ khóa meta</label>
                        <input type="text" class="form-control" id="meta_key" name="meta_key"  @if($cmsPage['meta_keywords']) value="{{$cmsPage['meta_keywords']}}" @endif>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Xác nhận </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection
