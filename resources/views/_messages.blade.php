@if(session('Error'))

<div class="alert alert-danger">
    {{session('Error')}}
</div>

@endif