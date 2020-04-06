@extends('home.test.base')
@section('mainbody')


    <input type="button" value="提交" id="btn">
    <div></div>

<script>
    $(function(){
        $('#btn').click(function(){
            $.get('/home/sajax',function(data){
                console.log(data)
            },'json');
        });
    });
</script>
@endsection