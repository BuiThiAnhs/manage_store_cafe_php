@extends('admin.index')
@section('main-contents')
<div class="mb-3">
    <label for="types_items" class="form-label">Loại nguyên liệu </label>
    <select id="types_items" class="form-select">
        <option>Cà phê</option>
        <option>Hoa quả</option>
        <option>Vật liệu</option>
    </select>
</div>
<div class="mb-3">
    <label for="name_item" class="form-label">Tên nguyên liệu</label>
    <input type="text" class="form-control" id="name_item">
</div>
<div class="mb-3">
    <label for="count_item" class="form-label">Số lượng</label>
    <input type="number" class="form-control" id="count_item">
</div>

@endsection
