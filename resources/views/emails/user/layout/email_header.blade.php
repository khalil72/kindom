<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .text-theme
            {
                color: #525f7f;
            }
            p
            {
                color: #525f7f;
                font-family: Segoe UI, serif;
                font-size: 16px;
                line-height: 24px;
            }
            .text-capitalize
            {
                text-transform: capitalize;
            }
            .text-decoration-none
            {
                text-decoration: none !important;
            }
        </style>
    </head>
    <body
        style="
        /*max-width: 800px;*/
        color: #525f7f;
        font-family: Segoe UI, serif;
        font-size: 16px;
        line-height: 24px;
        /*display: inline-block;*/
        /*width: 700px;*/
        /*height: auto;*/
        padding: 25px 25px;
        border: 1px solid #ddd;
    ">
        <main>
            <a href="https://www.kingdomvalley.com.pk/" target="_blank"><img src="{{ asset('assets/media/logos/kingdom-logo-png.png') }}" width="180px"/></a>
            <p style="margin: 0;">A Royal Lifestyle</p>
            <h2 class="text-theme">{{ $title ?? '' }}</h2>
