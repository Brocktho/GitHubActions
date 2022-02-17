@extends('main')
@section('styles')

@stop

@section('content')
<div class="parent min-w-screen min-h-screen">
    <section id="landing" class="overflow-hidden">
        <div class="-m-2 flex flex-col min-w-screen min-h-screen background-hero">
        </div>
    </section>
    <section id="Gallery" class="flex flex-col min-w-screen min-h-screen bg-yellow-300">
    </section>
    <section id="Contact" class="flex flex-col min-w-screen min-h-screen bg-red-400">

    </section>
    <x-footer/>
</div>
@stop

@section('js')
<script type="text/javascript">
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e){
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@stop