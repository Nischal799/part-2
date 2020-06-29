@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/Questionnaires/{{ $questionnaire->id }}/questions" method="post">
                    
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control"
                            value="{{ old('question.question') }}"
                             id="title" aria-describedby="emailHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Ask Questions</small>
                        
                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give choices</small>
                                
                            <div>
                                <div class="form-group">
                            <label for="answer1">Choice 1</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            value="{{ old('answers.0.answer') }}"
                             id="answer1" aria-describedby="choiceHelp" placeholder="Enter Choice 1">
                            
                            @error('answer.0.answer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                                </div>
                              </div>

                              <div>
                                <div class="form-group">
                            <label for="answer2">Choice 1</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            value="{{ old('answers.1.answer') }}"
                             id="answer2" aria-describedby="choiceHelp" placeholder="Enter Choice 2">
                            
                            @error('answer.1.answer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                                </div>
                              </div>
                            
                              <div>
                                <div class="form-group">
                            <label for="answer3">Choice 1</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            value="{{ old('answers.2.answer') }}"
                             id="answer3" aria-describedby="choiceHelp" placeholder="Enter Choice 3">
                            
                            @error('answer.2.answer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                                </div>
                              </div>

                              <div>
                                <div class="form-group">
                            <label for="answer4">Choice 1</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            value="{{ old('answers.3.answer') }}"
                             id="answer4" aria-describedby="choiceHelp" placeholder="Enter Choice 4">
                            
                            @error('answer.3.answer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                                </div>
                              </div>




                              
                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Question</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection