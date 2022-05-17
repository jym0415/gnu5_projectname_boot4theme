
<script language="javascript">
var char_min = parseInt(<?=$write_min?>); 
var char_max = parseInt(<?=$write_max?>); 
</script>

<style type="text/css">
.form-box .form-con{border-top:1px solid #ccc;}
.form-box .form-con ul li{display:table;width:100%;padding:10px 0;border-bottom:1px solid #ddd;}
.form-box .form-con ul li .fl-name{float:left;width:20%;}
.form-box .form-con ul li .fr-con{float:left;width:80%;}
.form-box .form-con ul li .fr-con input, .form-box .form-con ul li .fr-con select, .form-box .form-con ul li .fr-con textarea{width:100%;border:0;height:42px;line-height:42px;padding:0 10px;}
.form-box .form-con ul li .fr-con .text-box{diaplay:table;width:100%;}
.form-box .form-con ul li .fr-con .text-box input{width:34%;float:left;margin-left:1%;}
.form-box .form-con ul li .fr-con .text-box select{width:30%;float:left;}
.form-box .form-con ul li .fr-con textarea{height:164px;resize:none;}
.form-box .form-con .provision{display:table;width:100%;margin-top:20px;}
.form-box .form-con .provision label{cursor:pointer;font-weight:300;}
.form-box .form-con .provision label input{width:20px;height:20px;}
.form-box .form-con .provision label span{vertical-align: -2px;margin-left:5px;}
.form-box .form-con .provision a{padding:0 15px;height:35px;line-height:35px;font-size:12px;background:#999;color:#fff;display:inline-block;margin-left:10px;}
.form-box .receive-btn{margin-top:20px;}
.form-box .receive-btn input{width:100%;padding:15px 0;background:#585858;color:#fff;border:0;}
@media (max-width: 600px){
	.form-box .receive-btn input{padding:10px 0;}
}

</style>
<script type="text/javascript">
function checkFrm(obj) {
if(obj.wr_6.checked == false) {
  alert('개인정보 활동동의에 체크해주세요.');
  obj.wr_6.focus();
  return false;
	
 }

}
</script>
<div class="form-box" >
  <form name=frm method=post action="<?=$g5['path']?>/bbs/write_update.php" onsubmit="return checkFrm(this);">
		<input type="hidden" name="token" value=<?php echo get_write_token('online') ?>> 
		<input type=hidden name=bo_table value="online">
		<input type=hidden name="wr_7" value="">
		<input type=hidden name="wr_8" value="">
		<input type=hidden name="wr_9" value="">
		<input type=hidden name="wr_name" value="관리자">
		<input type=hidden name="wr_subject" >
		<input type=hidden name="wr_content" value="">
		<div class="form-con">
			<ul>
				<li>
					<span class="fl-name">이름</span>
					<span class="fr-con">
						<input type="text" name="wr_subject" placeholder="이름을 입력하세요" required itemname="이름"/>
					</span>
				</li>
				<li>
					<span class="fl-name">연락처</span>
					<span class="fr-con">
						<div class="text-box">
							<select name="wr_7" id="" class="select-1" required itemname="연락처">
							 <option value="010">010</option>
							 <option value="011">011</option>
							 <option value="016">016</option>
							 <option value="017">017</option>
							 <option value="018">018</option>
							 <option value="019">019</option>
							</select>
							<input type="text" name="wr_8" maxlength="4" required itemname="연락처"/>
							<input type="text" name="wr_9" maxlength="4" required itemname="연락처"/>
						</div>
					</span>
				</li>
				<li>
					<span class="fl-name">문의내용</span>
					<span class="fr-con">
						<textarea name="wr_content" id="" cols="30" rows="10" required itemname="문의내용"></textarea>
					</span>
				</li>
			</ul>
			<div class="provision">
				<label for="provision-check">
					<input id="provision-check" type="checkbox" name="wr_6" value="6" <?=$write[wr_6]?>/>
					<span>개인정보처리방침 동의</span>
				</label>
				<a href="#">개인정보처리방침</a>
			</div>
		</div>
		<div class="receive-btn">
			
			<input name="image" type="submit" value="견적문의" alt="견적문의">
		</div>		
  </form>
</div>
<!--//-->
