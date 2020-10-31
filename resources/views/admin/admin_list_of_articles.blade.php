@extends ('admin');

@section('admin_list_of_articles');
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        position: relative;
        left: 320px;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .button {
        min-width: 30px;
        min-height: 15px;
        border-radius: 2px;
        background: #00b9d8;
        color: white;
        text-decoration: none;
        cursor: pointer;
        margin: 5px;
        padding: 5px;
        transition: 1s;
    }

    .button:hover {
        background: #0056d8;
    }

</style>
<div class="container-flex">
    <table>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach($articles as $article);
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td><a class="button" href="{{ route('admin.edit', $article) }}">edit</a><a href="#" class="button">delete</a></td>
        </tr>
        @endforeach;
    </table>
</div>
@endsection;
