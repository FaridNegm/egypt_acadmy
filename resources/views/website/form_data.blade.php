@component('mail::message')
# Introduction

The body of your message.
@component('mail::button', ['url' => ''])
    click
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
