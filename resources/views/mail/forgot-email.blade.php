<p>{{__('Confirmación para cambio de contraseña')}}</p>
<br>
<form action="{{ route('password.change') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="{{ $email }}" name="email">
    <input type="hidden" value="{{ $password }}" name="password">
    <button class="px-4 py-1.5 text-white text-sm rounded acercar" style="background-color:#568c2c; color:white; font-weight:bolder; padding:10px;">{{ __('CAMBIAR CONTRASEÑA') }}</button>
</form>
