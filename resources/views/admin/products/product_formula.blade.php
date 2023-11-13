@extends('admin.index')
@section('main-contents')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form >
                <h5 class="card-title fw-semibold mb-6 ">Phiếu thành phần-sản phẩm</h5>
                <button class="btn " onclick="add_items()"> </button>
                <div class="mb-3">
                    <label for="name_products" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name_products">
                </div>
                <div class="mb-3">
                    <label for="image_products" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" id="image_products">
                </div>
                <div class="card" id="formItemProducts"> </div>
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

