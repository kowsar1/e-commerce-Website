@extends('backend.master')


@section('content')

<h1> Create a new user here</h1>
<form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id=""></textarea>
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</form>
@endsection