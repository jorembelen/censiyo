@component('mail::message')
# Shop Activation Request

Please activate shop. Here are some details.

Shop Name: {{$shop->name}}<br>
Shop Owner: {{$shop->owner->name}}

@component('mail::button', ['url' => env('APP_URL').'/admin/shops'])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
