@component('mail::message')
# Introduction

Hi {{ $name }},

Thank you for your comment. I will reply you as soon as possible.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
