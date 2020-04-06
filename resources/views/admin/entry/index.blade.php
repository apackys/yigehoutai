@extends('admin.layout.layout')
@section('body')
                <div class="page-body">
    
                	<div class="row">
                		<div class="col-xs-12">
                			<div class="well with-header with-footer">
                				<div class="header bg-themeprimary">
                					服务器信息
                				</div>
                				<table class="table table-hover table-bordered">
                					<thead>
                						<tr>
                							<th colspan="2">服务器信息</th>
                						</tr>
                					</thead>
                					<tbody>
                						<tr>
                							<td>服务器域名</td>
                							<td>{{$fullUrl}}</td>
                						</tr>
                						<tr>
                							<td>服务器IP地址</td>
                							<td>{{$ip}}</td>
                						</tr>
                						<tr>
                							<td>服务器端口</td>
                							<td>{{$port}}</td>
                						</tr>
                			 
                						<tr>
                							<td>联系邮箱</td>
                							<td>admin@admin.com</td>
                						</tr>
                					</tbody>
                				</table>
                		
                			</div>
                		</div>
                	</div>
                </div>
              
 @endsection