<x-layout>
<div class="row mx-auto m-4 g-3 border border-bottom">
    @foreach ($programmes as $prog)
        <div class="col-9 card m-3">
            <a href="programmes/details/{{$prog['id']}}">
            <img class="prog-img img-fluid pb-2" src="image/{{ $prog['image'] }}" alt="picture">
                <h3 class="text-success">{{ $prog['title'] }}</h3>
                <b><b>Powered by: </b>{{ $prog['creator'] }}</b>
                <p>
                    @php
                        $info = substr($prog->info, 0, 70);
                        echo $info;
                    @endphp
                </p>
                <span class="text-primary">Read More...</span>
                <strong>Duration: {{ $prog['duration']}}</strong>
            </a>
        </div>
    @endforeach
</div>
<style>
    .prog-img {
        width: 40%;
    }
</x-layout>
