@if($errors->has($fieldTitle))

    <div class="alert alert-danger">
        @foreach($errors->get($fieldTitle) as $error)
            {{ $error }}
        @endforeach
    </div>

@endif