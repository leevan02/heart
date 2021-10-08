@component('mail::message')
# Hi thanks for applying


Thanks for applying for our course we will let you know when your approve for the course,to see and edit pending courses you can check online

@component('mail::button', ['url' => 'http://heartonline.herokuapp.com/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
