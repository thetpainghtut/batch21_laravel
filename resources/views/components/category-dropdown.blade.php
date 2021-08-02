{{-- <div>
    Very little is needed to make a happy life. - Marcus Antoninus
</div> --}}
<select>
    <option selected="selected" value="0">All Category</option>
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>