<h3 class = "font-bold text-lg text-center">Your Team</h3>

<ul>
    @foreach($players as $player)
    <li class="my-3 ">
        <img src="{{$player->img}}"  class="img-thumbnail mx-12" style="height: 200px">
        <p class="font-bold  text-center ">{{$player->name}}</p>
        <p class="font-bold  text-center">{{$player->club}}</p>
        <p class="font-bold  text-center">{{$player->role}}</p>
        <hr>
    </li>
    @endforeach
</ul>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Start by entering your team
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                    <div class="modal-body">
                        <form action="/home/insertPlayer" method="POST" autocomplete="off">
                            @csrf
                            <input type="text" name="player_name" id="player_name" class=" uppercasetypeahead form-control" placeholder="Enter player name" />
                            <div class="dropdown" id="playerList"></div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Player</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
      <script type="text/javascript">
            $(document).ready(function(){
                $('#player_name').keyup(function(){ 
                    var query = $(this).val();
                    if(query != ''){
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url:"{{ route('home.fetch') }}",
                            method:"POST",
                            data:{query:query, _token:_token},
                            success:function(data){
                                $('#playerList').fadeIn();  
                                $('#playerList').html(data);
                            }
                        });
                    }
                });
                $(document).on('click', 'li', function(){  
                    $('#player_name').val($(this).text());  
                    $('#playerList').fadeOut();  
                });  
            });
      </script>

