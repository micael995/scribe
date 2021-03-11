# Authenticating requests

@if(!$isAuthed)
Essa API não é autenticada.
@else
{!! $authDescription !!}

{!! $extraAuthInfo !!}
@endif
