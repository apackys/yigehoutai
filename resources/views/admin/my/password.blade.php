@extends('admin.layout.layout')
@section('body')

                <div class="page-body">
                	<div class="row">
                		<div class="col-xs-12">
                			<div class="well with-header with-footer">
                				<div class="header bg-themeprimary">
                					修改密码
                				</div>
								<form action=""  method="post">
							<div class="panel-body">
						         {{csrf_field()}}
									<div class="form-group">
									  <label for="exampleInputPassword1">原密码</label>
									  <input type="password" class="form-control" name="origin_password" placeholder="原密码">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">新密码</label>
										<input type="password" class="form-control" name="password" placeholder="新密码">
									  </div>
									  <div class="form-group">
										<label for="exampleInputPassword1">确认密码</label>
										<input type="password" class="form-control" name="password_confirmation" placeholder="确认密码">
									  </div>
									<button  class="btn btn-default">修改密码</button>
								</div>  </form>
								  
                			</div>
                		</div>
                	</div>
                </div>
              
 @endsection