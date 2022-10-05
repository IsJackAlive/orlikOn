<!DOCTYPE html>
    <h2>Test</h2>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <p>xcv</p>
</html>

<?php 
    // Form::open(array('url' => 'foo/bar')); 
    //     echo Form::label('email', 'E-Mail Address', array('class' => 'awesome'));
    //     echo Form::text('email', 'example@gmail.com');
    // Form::close(); 
?>