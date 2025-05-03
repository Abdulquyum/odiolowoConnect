<x-layout>
<div class="row">
        <div class="col-6 card m-3">
            <img class="prog-img img-fluid" src="/image/{{ $programme['image'] }}" alt="picture">
                <h2><b>Programme Title: </b>{{ $programme['title'] }}</h2>
                <b><b>Powered by: </b>{{ $programme['creator'] }}</b>
                <p>
                    {{ $programme['info'] }}
                </p>
                <strong>Duration: {{ $programme['duration']}}</strong>
                <strong>Created at: {{ $programme['created_at'] }}</strong>
        </div>
</div>
<style>
    .prog-img {
        width: 30%;
    }
</style>
</x-layout>