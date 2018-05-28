<table>
    <thead>
        <tr>
            <th> id</th>
            <th> soal</th>
            <th> Creator  </th>
            <th> Pick </th>
        </tr>
    </thead>
    <tbody>
         @foreach($questions as $question)
          <tr>
              <td> {{$question->id}} </td>
              <td> {{$question->soal}} </td>
              <td> {{$question->creator_username}} </td>
              <td>
                  <form action="{{ route('choice', $question->id) }}" method="GET" >
                      <button type="submit" class="btn btn-primary">Pick</button>
                  </form> 
              </td>
          </tr>
         @endforeach
   </tbody>
</table>