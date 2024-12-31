@if ($errors->any())
    <ul style="background-color: while;" class="alert-danger">
        @foreach ($errors->all() as $errors)
            <li>{{$errors}}</li>
        @endforeach
    </ul>
@endif