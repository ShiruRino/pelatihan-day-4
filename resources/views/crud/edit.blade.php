<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{ route('crud.update', $crud->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>

        <label for="">Text Field</label>
        <input type="text" name="text_field" value="{{ $crud->text_field }}">
    </div>
    <div>
        <label for="">Radio Field</label>
        <input type="radio" name="radio_field" value="radio 1"{{ $crud->radio_field == 'radio 1' ? 'checked' : '' }}>Radio 1
        <input type="radio" name="radio_field" value="radio 2"{{ $crud->radio_field == 'radio 2' ? 'checked' : '' }}>Radio 2
    </div>
    <div>
        <label for="">Checkbox Field</label>
        @if ($crud->checkbox)
        <input type="checkbox" name="checkbox[]" value="checkb_1" {{in_array('checkb_1',$crud->checkbox) ? 'checked' : ''}}> checkbox 1
        <input type="checkbox" name="checkbox[]" value="checkb_2" {{in_array('checkb_2',$crud->checkbox) ? 'checked' : ''}}> checkbox 2
        @else
        <input type="checkbox" name="checkbox[]" value="checkb_1"> checkbox 1
        <input type="checkbox" name="checkbox[]" value="checkb_2"> checkbox 2
        @endif
    </div>
    <div>
        <label for="">Select Field</label>
        <select name="select_field" >
            <option value="1" {{$crud->select_field == '1' ? 'selected' : ''}}>Option 1</option>
            <option value="2" {{$crud->select_field == '2' ? 'selected' : ''}}>Option 2</option>
        </select>
    </div>
    <div>
        <label for="">Date Field</label>
        <input type="date" value="{{$crud->date_field}}" name="date_field">
    </div>
    <div>
        <div>
            <img src="{{asset('storage/'.$crud->file_field)}}" alt="file" width="171px" height="auto">
        </div>
        <label for="">File Field</label>
        <input type="file" name="file_field">
    </div>
    <div>
        <label for="">Textarea</label>
        <textarea name="textarea" cols="30" rows="6">{{$crud->textarea}}</textarea>
    </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
