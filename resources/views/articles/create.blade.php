@extends('layout.master')

@section('content')

	<h3 class="pb-4 mb-4 fst-italic border-bottom">
        Страница добавления новой статьи
    </h3>

    @include('layout.errors')

	<form method="post" action="/">

		@csrf

		<div class="mb-3">
			<label for="inputSlug" class="form-label">Символьный код статьи</label>
			<input type="text" class="form-control" id="inputSlug" name="slug">		
		</div>

		<div class="mb-3">
			<label for="inputTitle" class="form-label">Название статьи</label>
			<input type="text" class="form-control" id="inputTitle" name="title">		
		</div>

		<div class="mb-3">
			<label for="inputShort" class="form-label">Краткое описание статьи</label>
			<input type="text" class="form-control" id="inputShort" name="short">	
		</div>

		<div class="mb-3">
			<label for="inputBody" class="form-label">Детальное описание</label>
			<textarea class="form-control" id="inputBody" name="body" style="min-height: 150px;"></textarea>
		</div>

		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" name="published" value="1">
			<label class="form-check-label" for="exampleCheck1">Опубликовано</label>
		</div>

		<button type="submit" class="btn btn-primary mb-2">Добавить статью</button>
	</form>

@endsection