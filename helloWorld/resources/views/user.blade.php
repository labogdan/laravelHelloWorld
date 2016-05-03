
{{-- This is a comment --}}

@extends("layouts.default")

@section("content")

        <div class="container">
            <div class="content">
                This is another view.

                <br /><br />

                And here is the userId: {{{ $userId }}}

                <br /><br />

                <?php
                    if (isset($name)) {
                        echo 'And the name:' . $name;
                    }
                ?>

                @if (isset($name))
                    <br /><br />
                    {{{ $name }}}
                @endif

                <br /><br />

                <?php

                    for ($i = 0; $i < 10; $i ++ ) {
                        echo "The current value is ". $i . "<br />";
                    }

                ?>

                <br />

                @for ($i = 0; $i < 10; $i ++ )
                    The current value is {{{ $i }}} <br />
                @endfor


            </div>
        </div>

@stop


</html>
