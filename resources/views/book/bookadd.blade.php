@extends('layouts.app')

@section('content')
    <body class="p-3 mb-2 bg-info text-dark" style="background: #fff399">
    <div class="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">ชื่อเรื่อง</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"  autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                            <label for="author" class="col-md-4 control-label">ผู้แต่ง</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}"  autofocus>

                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('heading ') ? ' has-error' : '' }}">
                            <label for="heading " class="col-md-4 control-label">หัวเรื่อง</label>

                            <div class="col-md-6">
                                <input id="heading " type="text" class="form-control" name="heading " value="{{ old('heading ') }}"  autofocus>

                                @if ($errors->has('heading '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('heading ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('publisher') ? ' has-error' : '' }}">
                            <label for="publisher" class="col-md-4 control-label">สำนักพิมพ์</label>
                            <div class="col-md-6">
                                <input id="publisher" type="text" class="form-control" name="publisher" value="{{ old('publisher') }}"  autofocus>

                                @if ($errors->has('publisher'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('publisher') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Book number') ? ' has-error' : '' }}">
                            <label for="Book number" class="col-md-4 control-label">เลขเรียกหนังสือ</label>

                            <div class="col-md-6">
                                <input id="Book number" type="text" class="form-control" name="Book number" value="{{ old('Book number') }}"  autofocus>

                                @if ($errors->has('Book number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Book number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('keyword ') ? ' has-error' : '' }}">
                            <label for="keyword " class="col-md-4 control-label">คำสำคัญ</label>

                            <div class="col-md-6">
                                <input id="keyword " type="text" class="form-control" name="keyword " value="{{ old('keyword ') }}"  autofocus>

                                @if ($errors->has('keyword '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keyword ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Bib ID ') ? ' has-error' : '' }}">
                            <label for="Bib ID " class="col-md-4 control-label">Bib ID </label>

                            <div class="col-md-6">
                                <input id="Bib ID " type="text" class="form-control" name="Bib ID " value="{{ old('Bib ID ') }}"  autofocus>

                                @if ($errors->has('Bib ID '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Bib ID ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ISBN number ') ? ' has-error' : '' }}">
                            <label for="ISBN number " class="col-md-4 control-label">เลข ISBN</label>

                            <div class="col-md-6">
                                <input id="ISBN number " type="text" class="form-control" name="ISBN number " value="{{ old('ISBN number ') }}"  autofocus>

                                @if ($errors->has('ISBN number '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ISBN number ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ISSN number ') ? ' has-error' : '' }}">
                            <label for="ISSN number " class="col-md-4 control-label">เลข ISSN</label>

                            <div class="col-md-6">
                                <input id="ISSN number " type="text" class="form-control" name="ISSN number " value="{{ old('ISSN number ') }}"  autofocus>

                                @if ($errors->has('ISSN number '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ISSN number ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    เพิ่มหนังสือ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
@endsection
