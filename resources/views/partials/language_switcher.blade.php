<div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="display:flex; gap:10px;">
    @foreach ($available_locales as $locale_name => $available_locale)
        @if ($available_locale === $current_locale)
            {{--
            <a>
                <span class="ml-2 mr-2 text-gray-700"
                    style="background:black; color:white; padding:10px; border-radius:15px;">{{ $locale_name }}</span>
            </a>
        --}}
            @if ($locale_name == 'Español')
                <a>
                    <img src="{{ asset('img/esp_flag.png') }}" alt="esp" style="width:50px; height:30px; border-radius:5px; border:3px solid #568c2c;">
                </a>
            @else
                <a>
                    <img src="{{ asset('img/eng_flag.png') }}" alt="eng" style="width:50px; height:30px; border-radius:5px; border:3px solid #568c2c;">
                </a>
            @endif
        @else
            {{--
            <a class="ml-2 mr-2" href="language/{{ $available_locale }}">
                <span style="background:white; color:black; padding:10px; border-radius:15px;" onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='white'">{{ $locale_name }}</span>
            </a>
        --}}
            @if ($locale_name == 'Español')
                <a href="language/{{ $available_locale }}">
                    <img src="{{ asset('img/esp_flag.png') }}" alt="esp" style="width:50px; height:30px; border-radius:5px;">
                </a>
            @else
                <a href="language/{{ $available_locale }}">
                    <img src="{{ asset('img/eng_flag.png') }}" alt="eng" style="width:50px; height:30px; border-radius:5px;">
                </a>
            @endif
        @endif
    @endforeach
</div>
