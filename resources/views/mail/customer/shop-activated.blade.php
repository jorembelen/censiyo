@component('mail::message')
# Congratulations

Your shop is now activated.

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit your site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
