@if(Session::has('message'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"  class="close">x</button>
        {{ Session::get('message')}}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
        {{ Session::get('danger') }}
    </div>
@endif