<form action="{{route('post.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="text" name="title">
    <input type="file" name="image">
    <button>save</button>
</form>
