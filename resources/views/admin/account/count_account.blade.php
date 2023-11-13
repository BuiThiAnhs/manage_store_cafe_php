@extends('admin.index')
@section('main-contents')
    <div class="body-wrapper ">
        <div class="container-fluid">
            <div class="container-fluid d-flex ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Người Dùng</h5>
                        <div class="table-responsive mb-3">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                <tr>
                                    <th class="row-cols-3 border-bottom-0 ">
                                        <h6 class="fw-semibold mb-0 m-1 ">Mã  </h6>
                                    </th>
                                    <th class=" row-cols-3border-bottom-0 m-1 p-3">
                                        <h6 class="fw-semibold mb-0">Tên người dùng</h6>
                                    </th>
                                    <th class=" row-cols-3 border-bottom-0 m-1">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                    <th class="row-cols-3 border-bottom-0 m-1">
                                        <h6 class="fw-semibold mb-0">Loại tài khoản</h6>
                                    </th>
                                    <th class="row-cols-3 border-bottom-0 m-1">
                                        <h6 class="fw-semibold mb-0">Hành động</h6>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($taikhoans as $taikhoan)

                                @endforeach
                                <tr>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$taikhoan->id}}</h6></td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{$taikhoan->hoten}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{$taikhoan->tentaikhoan}}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">{{}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">{{}}</h6>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
