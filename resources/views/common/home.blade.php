@extends('simple-layout')

@section('body')
{{--
    <div class="container px-xl py-s">
        <div class="grid half">
            <div>
                <div class="icon-list inline block">
                    @include('components.expand-toggle', ['target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
                </div>
            </div>
            <div class="text-m-right">
                <div class="icon-list inline block">
                    @include('partials.dark-mode-toggle', ['classes' => 'text-muted icon-list-item text-primary'])
                </div>
            </div>
        </div>
    </div>--}}

 {{--   <div class="container" id="home-default">
--}}
    <h1 style="text-align: center">Menu</h1>
    <div class="grid-container3">
        <div class="grid-item pointer2" onclick="location.href='/shelves/office';"><img class="menu_img" src="/office%20logo.png"><p>Office</p></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
    </div>
  {{--  </div>--}}
@stop
