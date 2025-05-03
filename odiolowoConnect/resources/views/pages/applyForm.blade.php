<x-layout>
    <div class="form bg-warning my-3 p-3 shadow-lg">
        <h3 class="text-center p-3">Apply for {{$programme['title']}}</h3>
        <form action="{{ route('programme.register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$programme['title']}}" required>
        <br><br>
            <label for="fullname">Fullname</label>
            <input type="text" name="fullname" id="fullname" required>
        <br><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        <br><br>
            <label for="address">Home Address</label>
            <input type="text" name="address" id="address" required>
        <br><br>
            <label for="number">number</label>
            <input type="text" name="number" id="number" required>
        <br><br>
            <label for="gender">gender</label>
            <input type="radio" name="gender" id="male" value="male">male
            <input type="radio" name="gender" id="female" value="female">female
        <br><br>
            <button type="submit">Apply</button>
        </form>
    </div>

<style>
    .form {
        width: 40%;
        margin: auto;
        min-height: 70%;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.4);
    }
</style>

    <script>
        if (success) {
            alert("You have Successfully Applied");
        }
    </script>
</x-layout>