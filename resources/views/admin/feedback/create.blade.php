@extends('layout.master')

@section('content')

	<h3 class="pb-4 mb-4 fst-italic border-bottom">
        Форма обратной связи
    </h3>

    @include('layout.errors')

	<form method="post" action="/admin/feedback">

		@csrf

		<div class="mb-3">
			<label for="inputEmail" class="form-label">E-mail</label>
			<input type="email" class="form-control" id="inputEmail" name="email">		
		</div>

		<div class="mb-3">
			<label for="inputMsg" class="form-label">Сообщение</label>
			<textarea class="form-control" id="inputMsg" name="body" style="min-height: 150px;"></textarea>
		</div>		

		<button type="submit" class="btn btn-primary mb-2">Добавить сообщение</button>
	</form>

@endsection