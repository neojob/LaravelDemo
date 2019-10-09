@component('mail::message')
# Introduction

Please click the following link to reset your password


<a href="{{ route('AdminResetPassword',['email' => $user->email, 'resetCode'=>$code]) }}" >Click here</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
