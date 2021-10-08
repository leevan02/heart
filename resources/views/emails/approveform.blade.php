@component('mail::message')
# Acceptance/Approved

Dear Applicant,
Congratulations! It is with immense pleasure that I inform you of your acceptance to enrol in our online course here at Heart Online.<br> 
This opportunity comes in recognition of your academic and personal achievements, and I am positive that you would be a valued member of our university.<br>
On behalf of the faculty and staff of Louisiana State University, we wish you a successful and enjoyable future..

@component('mail::button', ['url' => 'http://heartonline.herokuapp.com/'])
click here
@endcomponent

Sincerely,<br>
{{ config('app.name') }}
@endcomponent
