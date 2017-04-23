@extends('layouts.app')

@section('content')





  @if(session('message'))
        <div class="alert alert-success ">
          {{session('message')}}
        </div>

  @endif

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laisser un comentaire</div>

                <div class="container-fluid">
                <div class="form-group">
                  <form class="form-horizontal" role="form"  action="{{ url('/comment') }}" method="POST">

                  <div class="ratebox" data-id="1" data-rating="2.2"></div>

                </br><label for="exampleTextarea">Votre avis compte pour nous</label>

                        {{ csrf_field() }}

                    @if ($errors->has('comment'))
                    <textarea class="form-control no-border-radius" rows="5" name="comment" id="comment"  placeholder="Message"  autofocus></textarea>
                        <span class="help-block">
                            <strong>{{ $errors->first('comment') }}</strong>
                        </span>

                      @else
                      <textarea class="form-control no-border-radius" rows="5" name="comment" id="comment"  placeholder="Message" ></textarea>
                    @endif


                  <div class="clearfix">&nbsp;</div>

                  <div class="pull-right">
                  <input class="btn btn-sm" type="reset" value="Reset">
                  <input class="btn btn-sm btn-primary" type="submit" value="Send">

                  <div class="clearfix">&nbsp;</div>



                </div>
                </form>
                </div>
              </div>





            </div>
        </div>
    </div>






@endsection
