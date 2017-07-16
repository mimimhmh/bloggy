@extends ('layouts.full-master')

@section ('content')
<div class="container" style="margin-bottom: 180px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="{{ $user->avatar }}" class="user-avatar">
            <h2> {{ $user->name }}' Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="post">
                {{ csrf_field() }}
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <button type="submit" class="pull-right btn btn-sm btn-primary">
                    Upload
                </button>
            </form>
        </div>

    </div>

</div>
@endsection