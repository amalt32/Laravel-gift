<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
</head>
<body>
    <div class="container">
        <h1>Add Category</h1>
        <form action="{{url('add_Category')}}" method = post  class="form-inline">
         @csrf
        <div class="form-group mb-2">
            <label for="category">Add Category</label>
            <input type="text" id="category" name="category" placeholder="Enter category name">
        </div>
        <button type="button"  class="form-group mb-2">Add</button>
        </form>
        <table>
            <tr>
                <th>Category_name</th>

            </tr>


    </div>

   
</body>
</html>