<style>

    .button {
        border-style: solid;
        border-width : 5px 5px 5px 5px;
        text-decoration : none;
        padding : 5px;
        margin: 130px;
        color: black;
}
    td {
        padding: 8px;
        text-align: left;
        }
</style>

<h1>Members List..</h1>
<table class="list" border=3>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Email</td>
        <td>Operation</td>

    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['address']}}</td>
        <td>{{$member['mail']}}</td>
        <td><a href={{"delete/".$member['id']}} >Delete</a> ||
        <a href={{"edit/".$member['id']}} >Edit</a></td>    
        
    </tr>    
    @endforeach
  
</table>
<br><br>
<div>
   
   <a class="button" href={{"add"}} >Add A New Member</a>
  
</div>