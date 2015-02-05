<?php ?>
<form id="frm-stamps" class="form-horizontal frm-stamps" onsubmit="return Stamp.save();" enctype="multipart/form-data" method="POST">
    <div class="box">
        <!-- Setting vip-->
        <div class="box-header">
            <h2>スタンプ登録</h2>
        </div>
        <div class="box-content">
            <table id="frm-stamps-list" class="table table-bordered">
			<?php foreach($data as $index => $stamp) { ?>
                <tr class="stamp">
                    <td class="stamp-action">
                        <button type="button" class="btn btn-success btn-sm stamp-btn-up">↑</button>
                        <button type="button" class="btn btn-success btn-sm stamp-btn-down">↓</button>
                        <button type="button" class="btn btn-primary btn-danger stamp-btn-remove">削除</button>
                    </td>
                    <td>
                        <input type="hidden" name="stamps[<?php echo $index ?>][remove]" class="stamp-remove" value="0" />
                        <input type="hidden" name="stamps[<?php echo $index ?>][stamp_id]" class="stamp-id" value="<?php echo $stamp['Stamp']['stamp_id'] ?>" />
                        <input type="hidden" name="stamps[<?php echo $index ?>][image]" class="stamp-image" value="<?php echo $stamp['Stamp']['image'] ?>" />
                        <input type="hidden" name="stamps[<?php echo $index ?>][display_order]" class="stamp-order" value="" />
                        <div class="media" style="margin-top: 0;">
                            <div class="pull-left">
                                <img class="media-object img-thumbnail stamp-image-display" src="<?php echo $stamp['Stamp']['image_url'] ?>" alt="">
                            </div>
                            <div class="media-body">
                                <label for="image-<?php echo $index ?>">
                                    <a class="btn btn-default">パソコンから画像を選択</a>
                                    <input type="file" accept="image/*" class="form-control stamp-input-file" name="data[image]" id="image-<?php echo $index ?>" style="display: none;" />
                                </label>
                                <span class="help-block">Accept file type GIF, JPG, PNG.</span>
                                <div class="text-danger error-image"></div>
                            </div>
                        </div>
                    </td>
                </tr>
  			<?php } ?>
            </table>
        </div>
    </div>

    <div class="form-group" style="margin-top: 15px;">
        <center>
            <button type="button" class="btn btn-primary btn-lg add-new-stamp">新しい行を追加</button>
            <button type="submit" class="btn btn-primary btn-lg">更新</button>
        </center>
    </div>
</form>