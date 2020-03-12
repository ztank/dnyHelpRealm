<!--
    HelpRealm (dnyHelpRealm) developed by Daniel Brendel

    (C) 2019 - 2020 by Daniel Brendel

    Version: 0.1
    Contact: dbrendel1988<at>gmail<dot>com
    GitHub: https://github.com/danielbrendel/

    Released under the MIT license
-->

@extends('layouts.layout_home')

@section('content')
    <div class="columns is-centered is-vcentered">
        <div class="column is-three-fifths">
            <div class="home-padding">
                <div class="home-headline">
                    <center><h1>{{ __('app.faq') }}</h1></center>
                </div>

                <div data-role="accordion" data-one-frame="true" data-show-active="true">
                    <?php echo file_get_contents(public_path() . '/data/faq.txt'); ?>
                </div>
            </div>
        </div>
    </div>
@endsection