@extends('layouts.app')

@section('content')
    <form action="" method="post" class="container">
            {{ csrf_field() }}
            <label for="">Cabeçalho</label>
            <input type="checkbox" />
            <input name="title" id="" class="form-control" type="text" value="">
            <label for="">Cabeçalho</label>
            <textarea class="form-control" name="body" id="" rows="3"></textarea>
            <input name="" id="" class="btn btn-primary" type="submit" value="Salvar">
    </form>
@endsection