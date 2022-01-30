@extends('layouts.main_product')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <form action="{{route('product.delete',$item)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="DEL"></input>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('product.edit',$item)}}" method="get">
                                @csrf
                                @method('get')
                                <input type="submit" value="EDIT"></input>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
