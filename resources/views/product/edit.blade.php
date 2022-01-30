@extends('layouts.main_product')
@section('content')
    <div class="container">
        <form action="{{route('product.update',$product)}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="name">Название</label>
              <input type="text" class="form-control" name="name" id="name"  placeholder="Название товара" value="{{$product->name}}">
              
            </div>
            <div class="form-group">
              <label for="description">Описание</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Описание" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price" id="Название" placeholder="Введите цену" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
            </div>
          </form>
    </div>
@endsection
