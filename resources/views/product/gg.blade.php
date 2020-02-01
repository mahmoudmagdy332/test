<table>
<tr>
    <td>
      name
    </td>
    <td>
     price
    </td>
    <td>
     edit
    </td>
    <td>
      delete
    </td>
</tr>
@foreach ($pr as $my)
<tr>
<td>
   {{$my->name}}
</td>
 <td>
   {{$my->price}}
 </td>
 <td>
     <a href="edit/{{$my->id}}">edit</a> 
 </td>
 <td>
     <a href="ad/{{$my->id}}">delete</a> 
 </td>
 </tr>
@endforeach

</table>