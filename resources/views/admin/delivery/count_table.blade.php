@extends('admin.index')
@section('main-contents')
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thống Kê Số Bàn</h5>
                <div class="table-responsive mb-3">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        <tr>
                            <th class="row-cols-3 border-bottom-0 ">
                                <h6 class="fw-semibold mb-0 m-1 p-3">Mã bàn </h6>
                            </th>
                            <th class=" row-cols-3border-bottom-0 m-1 p-3">
                                <h6 class="fw-semibold mb-0">Trạng thái</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Cập nhật</h6>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                <span class="fw-normal">Web Designer</span>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
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
@endsection
