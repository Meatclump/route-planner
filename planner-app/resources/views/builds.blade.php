<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Builds') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl">Elden Ring</h3>
                    <hr class="mt-3 mb-6">

                    <p>
                        There are currently no builds.
                    </p>
                    <p class="pt-6">
                        <a class="bg-gray-100 p-3 inline-block rounded-lg border-b border-gray-200" href="{{ asset('New Build') }}">New Build</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl">Bloodborne</h3>
                    <hr class="mt-3 mb-6">

                    <p>
                        There are currently no builds.
                    </p>
                    <p class="pt-6">
                        <a class="bg-gray-100 p-3 inline-block rounded-lg border-b border-gray-200" href="/new-build?game=bloodborne">New Build</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl">Custom Builds</h3>
                    <hr class="mt-3 mb-6">

                    <p>
                        There are currently no builds.
                    </p>
                    <p class="pt-6">
                        <a class="bg-gray-100 p-3 inline-block rounded-lg border-b border-gray-200" href="/new-build?game=custom">New Build</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
