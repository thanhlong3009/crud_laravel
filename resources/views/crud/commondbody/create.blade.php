@extends('crud.commondheader.header')
@section('content')

    <form action="/create" method="POST">
        @csrf
        Name: <input type="text" name="name">
        Description: <input type="text" name="description" >
{{--        status khi ma tao thi mac dinh la chua lam xong nen k phai nhap k lien quan nguoi dung --}}
        @foreach($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->name}}
        @endforeach
        <button class="btn btn-primary" type="submit">Add Task</button>
    </form>
@endsection

