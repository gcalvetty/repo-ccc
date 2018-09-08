@if(!$errors ->isEmpty())
<div class="alert alert-danger">
    <p><strong>Lo Siento !!!</strong> hay varios campos que necesitan ser corrregidos;</p>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>
    {{ session('status') }}
</div>
@endif
