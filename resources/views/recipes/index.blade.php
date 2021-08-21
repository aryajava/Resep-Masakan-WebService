<h1>List Resep</h1>
<a href="/recipes/create">Create</a>
<table border="1">
    <thead>
        <tr>
            <th>title</th>
            <th>image_url</th>
            <th>ingredients</th>
            <th>steps</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td>{{$recipe->title}}</td>
            <td>{{$recipe->image_url}}</td>
            <td>{{$recipe->ingredients}}</td>
            <td>{{$recipe->steps}}</td>
            <td>
                <a href="/recipes/{{$recipe->id}}/edit">Edit</a>
                <form action="/recipes/{{$recipe->id}}" method="post">
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>