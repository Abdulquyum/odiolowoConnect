<x-layout>
<div class="row">
    @foreach ($programmes as $prog)
        <div class="col-6 card m-3">
            <a href="{{ route('admin.details', $prog->id)}}">
            <img class="prog-img img-fluid" src="/image/{{ $prog['image'] }}" alt="picture">
                <h2 class="text-success">{{ $prog['title'] }}</h2>
                <b><b>Powered by: </b>{{ $prog['creator'] }}</b>
                <p>
                    @php
                        $info = substr($prog->info, 0, 60);
                        echo $info;
                    @endphp
                </p>
            </a>
            
            <form action="{{ route('admin.delete', $prog->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="deleteProgram($prog['id'])">
                {{ __('Delete') }}
                </button>
            </form>
        </div>
    @endforeach
</div>
<style>
    .prog-img {
        width: 30%;
    }
    </style>
    <script>
        function deleteProgram($id) {
        if (confirm('Are you sure?')) {
            fetch('{{ route("admin.delete", $prog['id']) }}', {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                }
            })
            .then(response => {
                if (response.ok) {
                    window.location.reload();
                }
            });
        }
    }
    </script>
</x-layout>