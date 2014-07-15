@extends('_master')


@section('title')
Lorem Generator
@stop

@section('scripts')
<?php
include('lore.php')
?>
@stop


@section('content')
<form method="POST" action="http://php-harvardp3.rhcloud.com/lorem">

  <h1>LOREM IPSUM GENERATOR</h1>
  <h4>Pick a number of paragraphs</h4>

  <br/>
  <input type="text" value="10" class="dial" name="dial" data-min="0" data-max="50" width="400px" style="margin-left:calc(50% - 200px)">
  <br/>


  <input type="submit" class="submit" value="Generate!">

  <div id="out">
  <?php
    echo($output);
  ?>
  </div>
</form>

<script src="knob.js"></script>
<script>
$(function() {
    $(".dial").knob();
});
</script>
@stop
