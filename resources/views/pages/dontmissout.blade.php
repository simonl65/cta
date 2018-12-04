@extends('layouts.app') 
@section('css')
<link rel="stylesheet" href="css/ppichecker/style.css">
@endsection
 
@section('content')
<div class="dontmissout">
    <div id="edgemid">

        <div class=" cta-question-buttons">
            <div class=" cta-question-buttons__title">Don't Miss Out!</div>
            <div class=" cta-question-buttons__content">
                <p class=" cta-question-buttons__narrative">The PPI deadline is fast approaching. Do you want to check if you're owed any money?</p>
                <p><a class=" cta-button cta-button--animated" href="http://native.flavourads.com/campaigns/path/out.php">Yes, Start My Check Now!</a></p>
                <hr>
                <p style="text-align: center;">Your information will only be used to complete a check for PPI on previous finance you had. All checks are
                    carried out by Authorised&nbsp;Claims Management Companies.</p>
            </div>
        </div>
        
    </div>
</div>
@endsection
