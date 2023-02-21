<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <span class="section"><?= $name ?></span>

                        <form class="form-horizontal form-label-left">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 이름 <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12 req" name="name" value="<?= isset($data->name) ? $data->name : '' ?>" required="required">
                                </div>
                            </div>
                            <? if ($memo_func) : ?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 연락처 <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="memo" class="form-control col-md-7 col-xs-12 req" name="memo" value="<?= isset($data->memo) ? $data->memo : '' ?>" required="required">
                                    </div>
                                </div>
                            <? endif; ?>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hope"> 원하는 상품 <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="hope" class="form-control col-md-7 col-xs-12 req" name="hope" value="<?= isset($data->hope) ? $data->hope : '' ?>" required="required">
                                </div>
                            </div>

                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="call2"> 상태 <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="call2" class="form-control col-md-7 col-xs-12 req" name="call2" value="<?= isset($data->call2) ? $data->call2 : '' ?>" required="required">
                                </div>
                            </div>

                            

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note"> 메모 <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="note" class="form-control col-md-7 col-xs-12 req" name="note" value="<?= isset($data->note) ? $data->note : '' ?>" required="required">
                                </div>
                            </div>

                            
                            <? if ($thum_func) : ?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file"> 썸네일 <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="slideimage" required="required">
                                        <input type="hidden" class="req" name="image" value="<?= isset($data->image) ? $data->image : '' ?>">
                                        <img src="<?= isset($data->image) ? '/' . DIR_UP_IMAGE . $data->image : '' ?>">
                                    </div>
                                </div>

                            <? endif; ?>

                            <? if ($link_func) : ?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url"> 클릭 시 링크주소<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="url" name="link" value="<?= isset($data->link) ? $data->link : '' ?>" class="form-control col-md-7 col-xs-12 req" required="required">
                                    </div>
                                </div>
                            <? endif; ?>

                            <? if ($editor_func) : ?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image"> 내용 <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="content" name="content" class="req" required="required"><?= isset($data->content) ? $data->content : '' ?></textarea>
                                    </div>
                                </div>
                                <!--smart에디터 이미지업로드용-->
                                <input type="file" id="imagesUpload" style="display:none;">
                            <? endif; ?>

                            <? if ($file_func) : ?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="up_file1"> 첨부파일1 </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom:10px;">
                                        <input type="file" id="up_file1" name="up_file[]">
                                        <? if (isset($data->file1)) : ?>
                                            <a href="<?= '/' . DIR_UP_FILE . $data->file1 ?>"><?= $data->file1 ?></a> <input type="checkbox" name="upfile_del[]" value="1"> 삭제체크
                                        <? endif; ?>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 pb-4" for="up_file2"> 첨부파일2</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom:10px;">
                                        <input type="file" id="up_file2" name="up_file[]">
                                        <? if (isset($data->file2)) : ?>
                                            <a href="<?= '/' . DIR_UP_FILE . $data->file2 ?>"><?= $data->file2 ?></a> <input type="checkbox" name="upfile_del[]" value="2"> 삭제체크
                                        <? endif; ?>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="up_file3"> 첨부파일3 </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom:10px;">
                                        <input type="file" id="up_file3" name="up_file[]">
                                        <? if (isset($data->file3)) : ?>
                                            <a href="<?= '/' . DIR_UP_FILE . $data->file3 ?>"><?= $data->file3 ?></a> <input type="checkbox" name="upfile_del[]" value="3"> 삭제체크
                                        <? endif; ?>
                                    </div>
                                </div>
                            <? endif; ?>

                            <input type="hidden" name="idx" value="<?= isset($data->idx) ? $data->idx : '' ?>">

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                                    <? if (isset($data) && !empty($data)) {
                                        $id = "eventedit2";
                                        $text = "수정하기";
                                    } else {
                                        $id = "eventgo2";
                                        $text = "등록하기";
                                    } ?>
                                    <button id="<?= $id ?>" type="button" class="btn btn-success"><?= $text ?></button>
                                    <button type="submit" style="display:none;"></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
    $(document).ready(function() {
        <? if ($editor_func) : ?>
            oEditors = [];
            nhn.husky.EZCreator.createInIFrame({
                oAppRef: oEditors,
                elPlaceHolder: "content",
                sSkinURI: "/smarteditor/SmartEditor2Skin.html",
                fCreator: "createSEditor2"
            });
        <? endif; ?>
    });
</script>