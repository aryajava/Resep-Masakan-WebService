<h1>Create Resep</h1>

<form action="/recipes" method="post">
    @csrf
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title"><br>
    <label for="image_url">Image Url</label><br>
    <input type="text" name="image_url" id="image_url"><br>
    <label for="ingredients">Bahan-bahan</label><br>
    <textarea name="ingredients" id="ingredients" cols="30" rows="10"></textarea><br>
    <label for="steps">Langkah-langkah</label><br>
    <textarea name="steps" id="steps" cols="30" rows="10"></textarea><br>

    <input type="submit" value="Save">

</form>