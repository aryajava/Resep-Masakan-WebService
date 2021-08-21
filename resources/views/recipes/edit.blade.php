<h1>Edit Resep</h1>

<form action="/recipes/{{$recipe->id}}" method="post">
    @method('put')
    @csrf
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title" value="{{$recipe->title}}"><br>
    <label for="image_url">Image Url</label><br>
    <input type="text" name="image_url" id="image_url" value="{{$recipe->image_url}}"><br>
    <label for="ingredients">Bahan-bahan</label><br>
    <textarea name="ingredients" id="ingredients" cols="30" rows="10">{{$recipe->ingredients}}</textarea><br>
    <label for="steps">Langkah-langkah</label><br>
    <textarea name="steps" id="steps" cols="30" rows="10">{{$recipe->steps}}</textarea><br>

    <input type="submit" value="Save">

</form>