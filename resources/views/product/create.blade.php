@extends('layouts.main_product')
@section('content')
    <div class="container">
        <form action="{{route('product.add_db')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Название</label>
              <input type="text" class="form-control" name="name" id="name"  placeholder="Название товара">
              
            </div>
            <div class="form-group">
              <label for="description">Описание</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Описание">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price" id="Название" placeholder="Введите цену">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
    </div>
@endsection
