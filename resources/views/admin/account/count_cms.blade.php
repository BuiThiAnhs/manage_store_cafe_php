@extends('admin.index')
@section('main-contents')
<div class="body-wrapper " style=" margin-left: auto">
    <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-body p-4">
                        <p class="card-title  " id="cms_page"> Quyền</p>
                        <a type="button" class="btn btn-light" style="float: right; display: inline-block" href="{{url('admin/add_edit_cms')}}">Thêm</a>
                    </div>
                    @if(\Illuminate\Support\Facades\Session::has('success_message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Thông báo:</strong>{{\Illuminate\Support\Facades\Session::get('success_message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <span aria-hidden="true">&times;</span>
                        </div>
                    @endif
                    <div class="table-responsive mb-3">
                        <table class="table text-nowrap mb-0 align-middle" id="cms_table">
                            <thead class="text-dark fs-4">
                            <tr>
                                <th class="row-cols-3 border-bottom-0 ">
                                    <h6 class="fw-semibold mb-0 m-1 "> Mã </h6>
                                </th>
                                <th class=" row-cols-3border-bottom-0 m-1 p-3">
                                    <h6 class="fw-semibold mb-0">Tiêu đề</h6>
                                </th>
                                <th class=" row-cols-3 border-bottom-0 m-1">
                                    <h6 class="fw-semibold mb-0">Đường dẫn</h6>
                                </th>
                                <th class="row-cols-3 border-bottom-0 m-1">
                                    <h6 class="fw-semibold mb-0">Ngày tạo</h6>
                                </th>
                                <th class="row-cols-3 border-bottom-0 m-1">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($CmsPages as $page)
                                    <tr>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$page['id']}}</h6></td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{$page['title']}}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0 fs-4">{{$page['url']}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0 fs-4">{{date("d-m-Y"), strtotime($page['created_at'])}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        @if($page['status'] == 1)
                                            <a class="updateCmsPageStatus " id="page= {{$page['id']}}" page_id ="{{$page['id']}}" href="javascript:void(0)" status ="Active"  style="color: #0b5ed7"><i class="ti ti-toggle-right" ></i></a>
                                        @elseif($page['status']== 0)
                                            <a class="updateCmsPageStatus " id="page= {{$page['id']}}" page_id ="{{$page['id']}}" href="javascript:void(0)" status="Inactive"style="color: gray"  ><i class="ti ti-toggle-left" ></i></a>
                                        @endif
                                        &nbsp; &nbsp;
                                        <a href="{{url('admin/add_edit_cms/'.$page['id'])}}"><i class="ti ti-edit"></i></a>
                                            &nbsp; &nbsp;
                                        <a <?php /* href="{{url('admin/delete_cms/'.$page['id'])}}"*/ ?> href="javacript:void(0)" record="cms" recordid="{{$page['id']}}" class="confirmDeletes" title="Xóa CMS" name="quyền này"><i class="ti ti-backspace"></i></a>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
