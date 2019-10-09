@extends('layouts.back')
@section('content')

    <div id="admin-content">
        <div class="container">
            <h2 id="admin-content-title">Edit Short text</h2>
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Danger! </strong>{{ $error }}
                    </div>
                @endforeach
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            <div class="jumbotron col-sm-12">
                <form role='form' method="post" enctype="multipart/form-data" class="col-sm-12" action="{{ route('postAdminEntitiesEdit',['id'=>$data['id']]) }}">
                    {{ csrf_field() }}
                    <div class="form-group col-sm-8">
                        <label for="alias">Word:</label>
                        <input type="text" class="form-control" id="word"  value="{{ $data['word'] }}" placeholder="Enter word" name="word">
                    </div>
                    <div class="form-group col-sm-12">
                        <ul class="nav nav-tabs">
                            @foreach($all_langs as $lang)
                                @if($lang->primary == 1)
                                    <li class="active"><a data-toggle="tab" href="#lang_{{ $lang->iso }}">{{ $lang->name }}</a></li>
                                @else
                                    <li><a data-toggle="tab" href="#lang_{{ $lang->iso }}">{{ $lang->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($all_langs as $lang)
                                @if($lang->primary == 1)
                                    <div id="lang_{{ $lang->iso }}" class="tab-pane fade in active">
                                        @else
                                            <div id="lang_{{ $lang->iso }}" class="tab-pane fade">
                                                @endif
                                                <div class="form-group col-sm-8">
                                                    <label for="translation">Text:</label>
                                                    <input type="text" class="form-control" id="translation" placeholder="Enter translation" value="{{  $translate::text($data['translation'],$lang->iso) }}" name="{{ $translate::translatable_key('translation',$lang->iso) }}">
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="form-group col-sm-10">
                                                <input type="submit" id='send' class="btn btn-primary" name="send" value="Edit">
                                            </div>
                                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection