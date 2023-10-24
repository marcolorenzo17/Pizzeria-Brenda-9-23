<div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="display:flex; gap:0px;">
    @foreach ($available_locales as $locale_name => $available_locale)
        @if ($available_locale === $current_locale)
            <a>
                <span class="ml-2 mr-2 text-gray-700"
                    style="background:black; color:white; padding:10px; border-radius:15px;">{{ $locale_name }}</span>
            </a>
        @else
            <a class="ml-1 ml-2 mr-2" href="language/{{ $available_locale }}">
                <span style="background:white; color:black; padding:10px; border-radius:15px;" onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='white'">{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>
