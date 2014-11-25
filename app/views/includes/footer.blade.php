{{ Form::open(array('url' => '/')) }}
{{ Form::label('email', 'Subscribe to our Newsletter!')}}
{{ Form::text('email', 'example@gmail.com') }}
{{ Form::submit('Sign me up!') }}

 <div class="container col-sm-4 col-sm-offset-4">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
    </div>