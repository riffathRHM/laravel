<div class = "row">
    <div cloass = "col-sm-8 offset-sm-2">
    <h3>Your are successfully login to the systm</h3>
    @if(isset(Auth::user()-> email))
    <div class = "alert alert-danger">
        <strong>Welcome {{Auth::user()-> email}}</strong></br>
        <a href = "{{url('/logout') }}">Logout</a>
</div>
@else
<script>window.location = "/";</script>
@endif

</div>
</div>