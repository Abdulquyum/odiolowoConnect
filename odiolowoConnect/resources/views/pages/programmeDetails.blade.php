<x-layout>
<div class="row">
        <div class="col-6 card m-3">
            <img class="prog-img img-fluid pb-3" src="/image/{{ $programme['image'] }}" alt="picture">
                <h2 class="text-success">{{ $programme['title'] }}</h2>
                <b><b>Powered by: </b>{{ $programme['creator'] }}</b>
                <p>
                    {{ $programme['info'] }}
                </p>
                <strong>Duration: {{ $programme['duration']}}</strong>
                <strong>Created at: {{ $programme['created_at'] }}</strong>
                <a class="btn btn-primary m-3" href="{{ route('apply', $programme->id)}}">Apply</a>
        </div>
</div>
<style>
    .prog-img {
        width: 30%;
    }
</style>
</x-layout>