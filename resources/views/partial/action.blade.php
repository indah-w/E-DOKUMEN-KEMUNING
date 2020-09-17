<form method="POST" action="{{ route($route.'.destroy', $data->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    @if($route == 'dokumen')
    <a class="btn btn-xs btn-primary" href="{{ route('dokumen.download', $data->id) }}">Download</a>
    @endif
    <a href="{{ route($route.'.edit', $data->id) }}" class="btn btn-xs btn-primary">Edit</a>
    <button class="btn btn-xs btn-danger">Hapus</button>
</form>