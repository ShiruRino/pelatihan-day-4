<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>

    <form action="{{route('crud.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Text Field</label>
            <input type="text" name="text_field">
        </div>
        <div>
            <label for="">Radio Field</label>
            <input type="radio" name="radio_field" value="radio 1"> Radio 1
            <input type="radio" name="radio_field" value="radio 2"> Radio 2
        </div>
        <div>
            <label for="">Checkbox Field</label>
            <input type="checkbox" name="checkbox[]" value="checkb_1"> Checkbox 1
            <input type="checkbox" name="checkbox[]" value="checkb_2"> Checkbox 2
        </div>
        <div>
            <label for="">Select Field</label>
            <select name="select_field">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
        </div>
        <div>
            <label for="">Date Field</label>
            <input type="date" name="date_field">
        </div>
        <div>
            <label for="">File Field</label>
            <input type="file" name="file_field">
        </div>
        <div>
            <label for="">Textarea</label>
            <textarea name="textarea" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
