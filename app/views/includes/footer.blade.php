{{ Form::open(array('url' => 'foo/bar')) }}
{{ Form::label('email', 'Subscribe to our Newsletter!')}}
{{ Form::text('email', 'example@gmail.com') }}
{{ Form::submit('Sign me up!') }}