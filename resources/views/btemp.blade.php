<div    >
    <h1>B_TEMPLATE</h1>
<h2>Hello  </h2>

{{-- Conditions --}}
{{-- @if ($btemp=="hassan")
    <h3>Welcome {{$btemp}} </h3>
@else
    <h3>Welcome Unknown</h3>
@endif --}}

{{-- @include("welcome") for including other viwes --}}


{{-- Loops --}}
{{-- @for ($i = 0; $i < 11; $i++)
<h4>{{$i}}</h4>
@endfor --}}

</div>

<div>
    <h1>Login form</h1>
    <form action="btemp" method="POST" >
    @csrf
    <input type="text" name="bname" placeholder="Enter your name" > <br>
    <input type="password" name="password" placeholder="Enter pass" ><br>
    <button type="submit" >login</button>
</form>
</div>
