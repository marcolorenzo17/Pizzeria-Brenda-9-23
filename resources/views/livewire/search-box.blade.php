<div style="padding-top:50px; text-align:center;">
    <div>
        <input type="text" id="searchbar" name="searchbar" placeholder="{{ __('Buscar plato') }}"
            style="width:80%; border:1px solid gray; border-radius:20px;" wire:model="search">
    </div>
    <button type="button" wire:click="update">Buscar</button>
</div>
