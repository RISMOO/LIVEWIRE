@extends('layouts.app')
@section('content')
<div class="container py-3">
<div class="col-md-6">

    <h1 class="">créer un article </h1>
    <form action="{{route('posts.store')}}"method="POST">
@csrf
@livewire('multiple-fields')
<div class="form-group">
 <label for="title">Titre de l'article</label>
 <input type="text" class="form-control" name="title" id="title">

</div>
<button type="submit" class="btn btn-success">Créer l'article</button>
    </form>
</div>
</div>
@endsection
