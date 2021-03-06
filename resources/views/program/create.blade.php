
@extends('layouts.layout')
    @section('body')
        <div class="custom-flash {{ Session::get('class') }} ">{{ Session::get('message') }}</div>
    @endsection
    @section('content')
        <section>
            <div class="container-fluid">

                <div class="theme-form row">

                    <div class="col-sm-6 col-sm-offset-3 ">
                        <div>
                            <h2> Add A New Program </h2>

                            <span>Enter details for a new program of your event below: </span>
                            <hr>
                        </div>
                    </div>

                    <div class="col-sm-6 col-sm-offset-3">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('event/programs/') }}">
                                {{ csrf_field() }}
                            <div class="form row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('program_name') ? ' has-error' : '' }}">
                                        <label for="program_name" class="control-label">Program Name</label>

                                        <input id="program_name" type="text" class="form-control" name="program_name" value="{{ old('program_name') }}" placeholder="Practice or Competition">

                                        @if ($errors->has('program_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('program_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('program_statement') ? ' has-error' : '' }}">
                                        <label for="program_statement" class="control-label">Question</label>

                                        <textarea class="form-control" rows="5" name="program_statement" id="program_statement">{{ old('program_statement') }}</textarea>

                                        @if ($errors->has('program_statement'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('program_statement') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('difficulty') ? ' has-error' : '' }}">
                                        <label for="difficulty" class="control-label">Difficulty</label>

                                        <select class="form-control" id="difficulty" name="difficulty">
                                            <option value="Easy">Easy</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Hard">Hard</option>
                                            <option value="Excellent">Excellent</option>
                                        </select>

                                        @if ($errors->has('difficulty'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('difficulty') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('sample_input') ? ' has-error' : '' }}">
                                        <label for="sample_input" class=" control-label">Sample Input</label>


                                        <textarea class="form-control" rows="3" name="sample_input" id="sample_input">{{ old('sample_input') }}</textarea>

                                        @if ($errors->has('sample_input'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sample_input') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('sample_output') ? ' has-error' : '' }}">
                                        <label for="sample_output" class=" control-label">Sample Output</label>

                                        <textarea class="form-control" rows="3" name="sample_output" id="sample_output">{{ old('sample_output') }}</textarea>

                                        @if ($errors->has('sample_output'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sample_output') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('sample_explanation') ? ' has-error' : '' }}">
                                        <label for="sample_explanation" class=" control-label">Sample Explanation (optional)</label>

                                        <textarea class="form-control" rows="3" name="sample_explanation" id="sample_explanation">{{ old('sample_explanation') }}</textarea>

                                        @if ($errors->has('sample_explanation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sample_explanation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-sm-5">
                                    <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                        <label for="time">Time Limit (in Sec)</label>
                                        <input id="time" type="text" class="form-control" name="time" value="{{ old('time') }}" placeholder="5.0" pattern="[0-9]+(\.[0-9])">

                                        @if ($errors->has('time'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('time') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-sm-5 col-sm-offset-2">

                                    <div class="form-group{{ $errors->has('marks') ? ' has-error' : '' }}" id="markscheck">
                                        <label for="marks">Maximum Marks</label>

                                         <input id="marks" type="text" class="form-control" name="marks" value="{{ old('marks') }}" placeholder="100" pattern="[0-9]+">

                                        @if ($errors->has('marks'))
                                            <span class="help-block">
                                                <strong >{{ $errors->first('marks') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('testcases_input') ? ' has-error' : '' }}">
                                        <label for="testcases_input" class=" control-label">Test Case Input</label>

                                        <textarea class="form-control" rows="5" name="testcases_input" id="testcases_input">{{ old('testcases_input') }}</textarea>

                                        @if ($errors->has('testcases_input'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('testcases_input') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('testcases_output') ? ' has-error' : '' }}">
                                        <label for="testcases_output" class=" control-label">Test Case Output</label>

                                        <textarea class="form-control" rows="5" name="testcases_output" id="testcases_output">{{ old('testcases_output') }}</textarea>

                                        @if ($errors->has('testcases_output'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('testcases_output') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" name="decide" id="decide" value="">



                                <div class="col-sm-12">
                                    <a type="submit" class="btn btn-success" onclick="done()"><i class="fa fa-check-square-o"></i> Done </a>
                                    <a class="btn btn-default" onclick="add()"><i class="fa fa-plus"></i> Add More </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('master.foot')
    @endsection

    @section('script')
    <script type="text/javascript">
        function done()
        {
            $("#decide").val('0');
            $("form").submit();
        }

        function add() {
            $("#decide").val('1');
            $("form").submit();
        }

        CKEDITOR.config.toolbarLocation = 'bottom';
        CKEDITOR.replaceAll();
    </script>

    @endsection
