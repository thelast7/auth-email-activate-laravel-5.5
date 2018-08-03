@component('mail::message')
# Selamat

Terima Kasih, Anda telah bergabung di Sembapur, silahkan aktivasi akun anda.

@component('mail::button',
    ['url' => route('auth.activate', [
        'token' => $user->activation_token,
        'email' => $user->email
         ])
         ])
Aktivasi
@endcomponent

Selamat<br>
{{ config('app.name') }}
@endcomponent
