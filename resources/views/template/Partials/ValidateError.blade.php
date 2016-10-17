@if(count($errors) > 0)
    <div role="alert" class="alert alert-danger alert-dismissible fade in">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>¡ERROR!</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif