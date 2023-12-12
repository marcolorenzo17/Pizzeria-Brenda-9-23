<div x-data="{
    query: ''
}" style="padding-top:50px; text-align:center;">
    <div style="display:flex; justify-content:center; gap:10px;">
        <input type="text" id="searchbar" name="searchbar" placeholder="{{ __('Buscar plato') }}"
            style="width:80%; border:1px solid gray; border-radius:10px; padding-left:50px; background-image:url('img/lupa.png'); background-repeat:no-repeat; background-position:left center;"
            x-model="query">
        <button type="button" x-on:click="$dispatch('search', {
                search : query
            })"
            style="background-color:black; color:white; padding-left:10px; padding-right:10px; border-radius:10px;"
            id="filtroproducto">{{ __('Buscar') }}</button>
    </div>
</div>
