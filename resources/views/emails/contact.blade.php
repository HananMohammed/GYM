<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    .tabel td, .tabel th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .tabel th{
        background-color: grey;
        color: white;
    }
    .tabel tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@component('mail::message')
# GYM Fit Contact Center
<table class="tabel">
    <thead>
    <th>name</th>
    <th>message</th>
    </thead>
    <tbody>
    <tr>
        <td>name</td>
        <td>{{$data["name"]}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$data["email"]}}</td>
    </tr>
    <tr>
        <td>message</td>
        <td>{{$data["message"]}}</td>
    </tr>
    </tbody>
</table>


@component('mail::button', ['url' => ''])
    GYM Fit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
