<!-- Modal -->
  <div class="modal fade" id="update" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">补全已填信息：</h4>
        </div>
        <div class="modal-body">
          <p>请输入您的姓名查询未填信息：</p>
          <form method="post" class="my-form" action="subpage/search.php" role=form>
          		<div class="row">
                	                    
                    <div class="col-md-6 form-group">
          <input class="form-control" id="id1" name="id1" placeholder="姓名" type="text" required>
        			</div>
					<div class="col-md-6 form-group">
          <button class="btn btn-info" id="submitbtn" type="submit">提交</button>
       				</div>
          </form>
           
     
<?php
		$k=1;
		
?>

        </div>
          <form method="post" class="my-form" action="subpage/modify.php" role=form>
				<h3>修改已存资料请选择所要修改的条目，填写新内容，提交：</h3><br>
                <label><span for="sel2">数据类型:</span></label>
          <select class="form" name="datatype" id="sel2" required>
    			<option value="姓名">姓名</option>
    			<option value="学院">学院</option>
   				<option value="专业">专业</option>
   				<option value="单位">单位</option>
                <option value="所在区县">所在区县</option>
                <option value="电话">电话</option>
                <option value="生日">生日</option>
                <option value="大学">大学</option>
                <option value="爱好">爱好</option>
                <option value="qq">qq</option>
                <option value="格言">格言或介绍</option>
                <option value="微博">微博</option>
                <option value="facebook">facebook</option>
                <option value="职业梦想">职业及梦想</option>
  		  </select>           
                <input class"form" id="new" name="new" placeholder="新内容" type="text" required>
				<input class"form" id="name1" name="name1" placeholder="您的姓名" type="text" required>
				<button class="btn btn-info" id="submitbtn2" type="submit">提交修改</button>
                </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
        </div>
      </div>
    </div>
  </div>
</div>