@component('mail::message')
<u>
    <h2 style="color: black; margin-left: 30%">drobalhealth.com.bd</h2>
</u>
<p style="font-weight: bold; color:black">{{ $item }}</p>

@component('mail::button', ['url' => 'http://drobalhealth.com.bd/'])
Visit Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
