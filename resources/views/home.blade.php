<x-layout :title="$title">

    <!-- Your content -->
    <p>Welcome To My Homepage</p>
    <div class="flex mt-3">
        @for ($i = 1; $i <= 10; $i++)
            @if ($i % 2 === 0)
                <div class="w-8 h-8 bg-teal-500 text-white p-0 me-1.5 text-xs grid place-items-center">
                    {{ $i }}
                </div>
            @endif
        @endfor
    </div>

</x-layout>
