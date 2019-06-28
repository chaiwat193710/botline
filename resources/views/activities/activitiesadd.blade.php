@extends('layouts.app')

@section('content')
    <body class="p-3 mb-2 bg-info text-dark" style="background: #fff399">
    <div class="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('Activity name') ? ' has-error' : '' }}">
                                <label for="Activity name" class="col-md-4 control-label">ชื่อกิจกรรม</label>

                                <div class="col-md-6">
                                    <input id="Activity name" type="text" class="form-control" name="Activity name" value="{{ old('Activity name') }}"  autofocus>

                                    @if ($errors->has('Activity name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Activity name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                                <label for="detail" class="col-md-4 control-label">รายละเอียดกิจกรรม</label>

                                <div class="col-md-6">
                                    <input id="detail" type="text" class="form-control" name="detail" value="{{ old('detail') }}"  autofocus>

                                    @if ($errors->has('detail'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                                <label for="Status" class="col-md-4 control-label">สถานะ</label>

                                <div class="col-md-6">
                                    <input id="Status" type="text" class="form-control" name="Status" value="{{ old('Status') }}"  autofocus>

                                    @if ($errors->has('Status'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Status') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('responsible') ? ' has-error' : '' }}">
                                <label for="responsible" class="col-md-4 control-label">ผู้รับผิดชอบ</label>
                                <div class="col-md-6">
                                    <input id="responsible" type="text" class="form-control" name="responsible" value="{{ old('responsible') }}"  autofocus>

                                    @if ($errors->has('responsible'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('responsible') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Time') ? ' has-error' : '' }}">
                                <label for="Time" class="col-md-4 control-label">เวลา</label>

                                <div class="col-md-6">
                                    <input id="Time" type="text" class="form-control" name="Time" value="{{ old('Time') }}"  autofocus>

                                    @if ($errors->has('Time'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Place') ? ' has-error' : '' }}">
                                <label for="Place" class="col-md-4 control-label">สถานที่</label>

                                <div class="col-md-6">
                                    <input id="Place" type="text" class="form-control" name="Place" value="{{ old('Place') }}"  autofocus>

                                    @if ($errors->has('Place'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('institution ') ? ' has-error' : '' }}">
                                <label for="institution " class="col-md-4 control-label">หน่วยงาน</label>

                                <div class="col-md-6">
                                    <input id="institution " type="text" class="form-control" name="institution " value="{{ old('institution ') }}"  autofocus>

                                    @if ($errors->has('institution '))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                      เพิ่มกิจกรรม
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
