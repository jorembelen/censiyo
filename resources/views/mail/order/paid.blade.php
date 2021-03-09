@component('mail::message')
# Invoice Paid

Thanks for the purchase.

Here is your receipt.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
