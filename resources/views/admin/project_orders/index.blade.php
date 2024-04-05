<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col">

                <div class="w-fit py-4 px-10 text-white bg-indigo-950 rounded-full font-bold">
                    Information Orders
                </div>

                <hr class="my-10">
                <div class="flex flex-col gap-y-5">

                    @forelse($orders as $order)

                    {{-- Melakukan Foreach Data Dari Table Projects --}}
                    <div class="item-project flex flex-row items-center justify-between">

                        <div class="flex flex-row items-center gap-x-5">
                            <div class="flex flex-col gap-y-1">
                                <h3 class="font-bold text-xl">
                                    {{ $order->name }}
                                </h3>
                                <p class="text-sm text-slate-400">
                                    {{ $order->category }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-row items-center gap-x-2">
                            <a href="{{ route('admin.project_orders.show', $order) }}" class="py-3 px-5 rounded-full bg-indigo-500 text-white">
                                View Details
                            </a>
                        </div>

                    </div>

                    @empty
                    <p>
                        Belum ada Order Tersedia.
                    </p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>