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
                <form name="ingredientForm" id="ingredientForm" @if(empty($ingredient['id'])) action="{{url('/admin/storage/add_edit_ingredient')}}" @else action="{{url('/admin/storage/add_edit_ingredient/'.$ingredient['id'])}}" @endif method="post">@csrf
                    <h5 class="card-title fw-semibold mb-6 ">{{$title}}</h5>
                    <div class="mb-3">
                        <label for="name_ingredient" class="form-label"> Tên nguyên liệu</label>
                        <input type="text" class="form-control" id="name_ingredient" name="name_ingredient" @if($ingredient['name_ingredient']) value="{{$ingredient['name_ingredient']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="price_ingredient" class="form-label">Giá mua</label>
                        <input type="text" class="form-control" id="price_ingredient" name="price_ingredient" @if($ingredient['price_ingredient']) value="{{$ingredient['price_ingredient']}}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Số lượng</label>
                        <input type="number" class="form-control" id="amount" name="amount"  @if($ingredient['amount']) value="{{$ingredient['amount']}}" @endif>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Loại nguyên liệu</label>
                        <select id="type" class="form-select" name="type" >
                            @foreach($ingredient_types as $ingredient_type_id => $ingredient_type_name)
                                    <option >{{ $ingredient_type_name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Đơn vị đo</label>
                        <select id="unit" class="form-select" name="unit" >
                            @foreach($units as $unit_id => $unit_name)
                                    <option>{{  $unit_name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Xác nhận lại nội dung </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu </button>
                </form>
            </div>
        </div>
    </div>
@endsection

