@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" data-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(section('success'))
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" data-label="Close">
                <span aria-hidden="true"></span>
            </button>
            {{session()->get('message')}}
        </div>
    </div>
</div>
@endif
