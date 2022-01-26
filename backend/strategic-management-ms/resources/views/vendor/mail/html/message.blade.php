@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="http://localhost:3000/delivery.png" class="logo" alt="Laravel Logo">
<br>
Boa Entrega
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} Boa Entrega. TCC PUC Minas, Danilo Pinotti e Janio B. Costa.
@endcomponent
@endslot
@endcomponent
