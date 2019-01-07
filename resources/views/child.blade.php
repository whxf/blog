@extends('layouts.app')

@section('page head')
    <div class="splash">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-light">Witness my progress.</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <p>这里是主体内容，完善中...</p>
    {{--<form method="post" action="/foo">--}}
    {{--@csrf--}}
    {{--<input type="text" name="usr" value="100">--}}
    {{--<input type="password" name="pwd" value="55">--}}
    {{--<input type="submit" value="btn">--}}
    {{--</form>--}}


    <input type="number" name="a" value="100">
    <input type="number" name="b" value="123">
    <button id="calc">Button</button>
    <p id="sum"></p>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#calc").click(function () {
                var a = $("input[name='a']").val();
                var b = $("input[name='b']").val();

                // $.ajax({
                //     method: "POST",
                //     url: "/foo",
                //     data: {a: a, b: b},
                //     success: function (json) {
                //         $("#sum").text(json.sum);
                //     }
                // });

                $.post("/foo",{a:a,b:b},function (json) {
                    $("#sum").text(json.sum);
                });
            });
        });
    </script>
@endsection