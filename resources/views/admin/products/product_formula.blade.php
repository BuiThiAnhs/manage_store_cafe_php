@extends('admin.index')
@section('main-contents')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form >
                <h5 class="card-title fw-semibold mb-6 ">Phiếu thành phần-sản phẩm</h5>
                <button class="btn " onclick=""> </button>
                <div class="mb-3">
                    <label for="name_products" class="form-label">Tên sản phẩm</label>
                    <div style="height: 40px;">
                        <select id="product_select" class="form-select" name="type" style="height: 100%;">
                            @foreach($product as $product_id => $product_name)
                                <option value="{{ $product_id }}">{{ $product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image_products" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" id="image_products">
                </div>
                <div class="card" id="formItemProducts"> </div>

                <table id="tableData"  class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th class="row-cols-3 border-bottom-0 ">
                            <h6 class="fw-semibold mb-0">ID Thành Phần</h6>
                        </th>
                        <th class="row-cols-3 border-bottom-0 ">
                            <h6 class="fw-semibold mb-0">Số lượng</h6>
                        </th>
                    </tr>
                    </thead>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" style="float: right; display: inline-block; margin-bottom: 10px" data-bs-target="#ingredientModal">
                        Chọn Nguyên Liệu
                    </button>
                    <tbody>
                    @if(isset($components) && count($components) > 0)
                    @foreach($components as $component)
                        <tr>
                            <th class="row-cols-3 border-bottom-0 ">
                                <h6 class="fw-semibold mb-0">{{ $component->ingredient_id }}</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 ">
                                <h6 class="fw-semibold mb-0">{{ $component->amount }}</h6>
                            </th>
                        </tr>
                    @endforeach
                    @endif
                </table>

                <!-- Modal -->
                <div class="modal fade" id="ingredientModal" tabindex="-1" aria-labelledby="ingredientModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ingredientModalLabel">Chọn Nguyên Liệu và Số Lượng</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <table id="tableData"  class="table text-nowrap mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="row-cols-3 border-bottom-0 ">
                                                <h6 class="fw-semibold mb-0">Thành Phần</h6>
                                            </th>
                                            <th class="row-cols-3 border-bottom-0 ">
                                                <h6 class="fw-semibold mb-0">Số lượng</h6>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ingredients as $ingredientId => $ingredientName)
                                                <tr>
                                                    <th class="row-cols-3 border-bottom-0" data-ingredient-id="{{ $ingredientId }}">
                                                        <h6 class="fw-semibold mb-0">{{ $ingredientName }}</h6>
                                                    </th>
                                                    <td>
                                                        <input type="number" class="form-control" name="quantity[{{ $ingredientId }}]" value="0">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary" onclick="confirmSelection()">Xác Nhận</button>
                            </div>
                        </div>
                    </div>
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
<script>
    function add_items() {
        var form_add = document.getElementById("formItemProducts");
        var _add = document.createElement('form');
        _add.innerHTML = '<div class="mb-3">\n' +
            '    <label for="types_items" class="form-label">Loại nguyên liệu </label>\n' +
            '    <select id="types_items" class="form-select">\n' +
            '        <option>Cà phê</option>\n' +
            '        <option>Hoa quả</option>\n' +
            '        <option>Vật liệu</option>\n' +
            '    </select>\n' +
            '</div>\n' +
            '<div class="mb-3">\n' +
            '    <label for="name_item" class="form-label">Tên nguyên liệu</label>\n' +
            '    <input type="text" class="form-control" id="name_item">\n' +
            '</div>\n' +
            '<div class="mb-3">\n' +
            '    <label for="count_item" class="form-label">Số lượng</label>\n' +
            '    <input type="number" class="form-control" id="count_item">\n' +
            '</div>';

        form_add.appendChild(_add);
    }
</script>
@endsection

