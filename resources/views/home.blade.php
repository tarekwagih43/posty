@extends('layouts.app')

@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
		<div class="max-w-7xl mx-auto">
			<div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
				<svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
					<polygon points="50,0 100,0 50,100 0,100" />
				</svg>

				<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
					<div class="sm:text-center lg:text-left">
						<h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
							<span class="block xl:inline">Data to enrich your</span>
							<span class="block text-indigo-600 xl:inline">online business</span>
						</h1>
						<p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
							Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
						</p>
						<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
							<div class="rounded-md shadow">
								<a href="{{ route('contact') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
									Contact Us
								</a>
							</div>
							<div class="mt-3 sm:mt-0 sm:ml-3">
								<a href="{{ route('services') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
									Our Services
								</a>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>
		<div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
			<img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/88.jpg') }}" alt="">
		</div>
	</div>


<!-- Features Area -->
<div class="py-12 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="lg:text-center">
				<h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Oure Services</h2>
				<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
					A better way to enjoy you trip
				</p>
				<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
						With us, you have the opportunity to enjoy and visited many places around Egypt.
				</p>
			</div>

			<div class="mt-10">
				<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

						@foreach($services as $service)

						<div class="flex">
								<div class="flex-shrink-0">
										<div class="flex items-center justify-center rounded-md text-white w-40">
												<img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="object-fill h-40 w-full">
										</div>
								</div>
								<div class="ml-4">
										<dt class="text-lg leading-6 font-medium text-gray-900">
												{{ $service->title }}
										</dt>
										<dd class="mt-2 text-base text-gray-500">
										{{ $service->description }}
										</dd>
								</div>
						</div>
						@endforeach

				</dl>
			</div>
		</div>
	</div>


<!-- Contact Link Area -->
<div class="bg-gray-100">
		<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
			<h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
				<span class="block">Ready to dive in?</span>
				<span class="block text-indigo-600">Contact us now.</span>
			</h2>
			<div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
				<div class="inline-flex rounded-md shadow">
					<a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
						Contact Us
					</a>
				</div>
			</div>
		</div>
	</div>

@endsection
