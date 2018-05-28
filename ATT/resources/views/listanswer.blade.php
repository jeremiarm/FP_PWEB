<table>
    <thead>
        <tr>
            <th> Choice 1</th>
            <th> Choice 2</th>
            <th> Choice 3</th>
            <th> Choice 4</th>
            <th> Answer</th>
        </tr>
    </thead>
    <tbody>
          <tr>
              <td> {{$questions->choice_1}} </td>
              <td> {{$questions->choice_2}} </td>
              <td> {{$questions->choice_3}} </td>
              <td> {{$questions->choice_4}} </td>
              <td>
                  <form action="{{ route('answer', $questions->id) }}" method="POST" >
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <input type="number" min="1" max="4" class="form-control" name="correct_answer" />
                    <button type="submit" class="btn btn-primary">ANSWER!!</button>
                  </form> 
              </td>
          </tr>
   </tbody>
</table>