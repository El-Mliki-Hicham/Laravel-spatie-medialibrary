<a href="{{route('post.create')}} ">create</a><br>
<br>
<table>
    <thead>
      <tr>
        <th colspan="2">name</th>
        <th colspan="2">image</th>
      </tr>
    </thead>
    <tbody>
        @foreach($post as $value )
        <tr>
            <td>{{$value->title}} </td>
            <td>
            <img src="{{$value->getFirstMediaUrl()}}" width="60px" alt="" srcset="">

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
