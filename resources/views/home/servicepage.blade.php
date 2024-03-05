@extends('layouts.master')

@section('content')
    <section id="service1" class="bg-white">
        <div
            class="container flex flex-col-reverse md:flex-row justify-center items-center px-7 mx-auto min-h-[650px] w-full space-y-0 md:space-y-0">
            <!--Left item--->
            @foreach ($data['services'] as $ddata)
                <div class="flex flex-col md:w-3/5 gap-6">
                    <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left text-brightRed">
                        {{ $ddata->serviceName }}
                    </h1>
                    <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                        {{ $ddata->content }}
                    </p>
                </div>
            @endforeach
            <div class="md:w-2/5">
                <img src="services/advice.jpg" class=" w-full h-full " />
            </div>

        </div>
    </section>
@endsection
