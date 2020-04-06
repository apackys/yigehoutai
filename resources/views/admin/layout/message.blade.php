@if ($errors->any())
<div class="modal fade" id="model_message" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">提示信息</h5>
                 
            </div>
            <div class="modal-body">
                  
                        <div class="alert alert-danger">
                           
                                @foreach ($errors->all() as $error)
                                     {{ $error }}<br/>
                                @endforeach
                           
                        </div>
                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        
            </div>
        </div>
    </div>
</div>

<script>
   $(function(){
         $('#model_message').modal('show')
         setTimeout(function(){
            $('#model_message').modal('hide');
        },3000);
          });
</script>

@endif