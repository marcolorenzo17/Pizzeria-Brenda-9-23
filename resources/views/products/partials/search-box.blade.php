<div x-data="{
    query : ''
}" style="padding-top:50px; text-align:center;">
    <div>
        <input type="text" id="searchbar" name="searchbar" placeholder="{{ __('Buscar plato') }}"
            style="width:80%; border:1px solid gray; border-radius:20px;" x-model="query">
    </div>
    <button type="button" x-on:click="$dispatch('search', {
        search : query
    })">Buscar</button>
</div>
