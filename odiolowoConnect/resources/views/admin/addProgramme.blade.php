<x-layout>
    <div class="form my-3 p-4 pt-2 bg-warning">
    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    <br><br>
        <label for="info">Programme Detail</label>
        <textarea name="info" id="info" required>About Programme</textarea>
    <br><br>
        <label for="duration">Duration</label>
        <input type="text" name="duration" id="duration" required>
    <br><br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" required>
    <br><br>
        <label for="creator">Creator</label>
        <input type="text" name="creator" id="creator" required>
    <br><br>
        <button type="submit" class="mb-3">Post</button>
    </form>
</div>

<style>
    .form {
        /* background: #FFA07A; */
        margin-top: 50px;
        width: 40%;
        border: 1px solid grey;
        margin: auto;
        min-height: 70%;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    label {
        margin-top: 20px;
    }
</style>
</x-layout>