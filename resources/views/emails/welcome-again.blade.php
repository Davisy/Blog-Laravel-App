@component('mail::message')
# Registration Successfully!

hello {{ $user->name }}!  welcome to my Blog


@component('mail::button', ['url' => 'http://localhost:8000/'])
view  my Blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
