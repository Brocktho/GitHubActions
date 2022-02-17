@extends('main')

@section('styles')

@stop

@section('content')
<div class="flex flex-col w-screen h-screen">
    <div>
        <h1>
            Let me help you remember your events forever!
        </h1>
    </div>
    <div class="flex flex-row justify-around bg-red-400">
        <form>
            <ul>
                <li>
                    <label for="name">
                        Full Name:
                    </label>
                </li>
                <li>
                    <label class="text-md "for="email">
                        Email Address:
                    </label>
                </li>
                <li>
                    <label for="phone">
                        Phone Number:
                    </label>
                </li>
            </ul>
        </form>
    </div>
</div>
@stop

@section('js')

@stop