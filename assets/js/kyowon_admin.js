$(document).ready(function(){

    var reg_files;


    $('body').on('change', '#slideimage, #thumbnail_image', function() {
        var json = uploadImage($(this));
        console.log(json);
        if(json.error == true) {
            alert(json.err_msg);
            $(this).val('');

            $(this).next().val('');
            $(this).next().next().hide();
            $(this).next().next().attr('src','');
            return false;
        }
        $(this).next().val(json.url[0]);
        $(this).next().next().css('display','block');
        $(this).next().next().attr('src','/data/image/'+json.url[0]);
        reg_files = $(this).val();
    });

    $('#imagesUpload').change(function() {
        var json = uploadImage($(this));

        if (json) {
            if(json.error == true) {
                alert(json.err_msg);
                $(this).val('');

                return false;
            }

            if (json.return == 'true') {
                for (var variable in json.url) {
                    if (json.url.hasOwnProperty(variable)) {
                        if ($('textarea+iframe').length) {
                            var sHTML = "<img style='max-width:100%' src='/data/image/"+json.url[variable]+"' />";
                            oEditors.getById["content"].exec("PASTE_HTML", [sHTML]);
                        } else {
                            $img = common.target.clone();
                            $img.removeClass('req def').attr('src', json.path + json.url[variable]);
                            $img.appendTo(common.target.parent()).after('<input type="hidden" name="' + $img.attr('id').replace(/[0-9]/g, '') + '[]" value="' + json.url[variable] + '">');
                            common.target=false;
                        }
                    }
                }
                $(this).val('');
            }
        } else {
            alert('서버 에러');
        }
    });



    $('body').on('click', '#logingo', function() {
        var req = true;
        $('.req').each(function() {
            if (!$(this).val()) {
                req = false;
                return false;
            }
        });

        if(req) {
            var form = $('form')[0];
            var data = new FormData(form);
            var json = jsonreturn('/kyowon/admin/main/loginData',data);
            if(json.return == true) {
                location.href = '/kyowon/admin/event/list';
            }
            else {
                alert("아이디 비밀번호가 일치하지 않습니다");
            }
        }
        else {
            $(this).next().trigger('click');
        }
    });
    function admin() {

        this.event = function() {

            $('body').on('click', '#eventgo, #eventedit', function() {

                var check = true;
                /*oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);


                var editor_chk = true;
                $('.req').each(function() {
                    if (!$(this).val()) {
                        check = false;
                        return false;
                    }

                    if($(this).attr('id') == 'content') {
                        var content =$(this).val();

                        if( content == ""  || content == null || content == '&nbsp;' || content == '<br>' || content == '<br />'
                            || content == '<p>&nbsp;</p>' || content == '<p><br></p>')  {
                            alert("내용을 입력하세요.");
                            oEditors.getById["content"].exec("FOCUS"); //포커싱
                            check = false;
                            editor_chk = false;
                            return false;
                        }
                    }
                });
                if(!editor_chk) {
                    return false;
                }*/

                if(check) {
                    var form = $('form')[0];
                    var data = new FormData(form);
                    if($(this).attr('id') == "eventgo"){
                        var json = jsonreturn('/kyowon/admin/event/addData',data);
                        if(json.return == true) {
                            alert("등록되었습니다");
                            location.href = "/kyowon/admin/event/list";
                        }
                    }
                    else {
                        var json = jsonreturn('/kyowon/admin/event/editData',data);
                        if(json.return == true) {
                            alert("수정되었습니다");
                            location.href = "/kyowon/admin/event/list";
                        }
                    }
                }
                else {
                    $(this).next().trigger('click');
                }
            });

        }




        $('body').on('click', '.up', function() {
            var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
            if(!$tr.prev().is(':visible') && $tr.prev().length > 0) {
                $tr.prev().show();
                $tr.hide();
            }
            $tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
        });

        $('body').on('click', '.down', function() {
            var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소

            if(!$tr.next().is(':visible') && $tr.next().length >0) {
                $tr.next().show();
                $tr.hide();
            }
            $tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기

        });

        /*
        * $('body').on('click', '#idxgo', function() {
            var result =json($(this).attr('data-count'));
            var page = $(this).attr('data-page');
            var idxs = new Array();
            var idx = new Array();

            var i;
            if(page*10 > 10){
                if((result*1)/(10*(page-1)) > 1) {
                    i = result - (page-1)*10;
                }
                else {
                    i = result%((page-1)*10);
                }
            } else {
                i =result;
            }
            $(".pointer").each(function() {
                idxs.push(i);
                idx.push($(this).attr('data-idx'));
                i--;
            });
            var url = $(this).attr('data-url');
            var result =json(url,{'idxs':idxs,'idx':idx});
            location.reload();
        });
        * */
        $('body').on('click', '#idxgo', function() {
            var result =json($(this).attr('data-count'));
            var page = $(this).attr('data-page');
            var idxs = new Array();
            var idx = new Array();


            var i;
            if(result > 10) {
                if(page == 1) {
                    i = ((page-1) * 10) + 1
                } else {
                    i = ((page-1) * 10)
                }

            } else {
                i=1;
            }

            $(".pointer").each(function() {
                idxs.push(i);
                idx.push($(this).attr('data-idx'));
                i++;
            });
            var url = $(this).attr('data-url');

            var result =json(url,{'idxs':idxs,'idx':idx});
            location.reload();
        });

        $('body').on('click', '#up', function() {
            $(".chktable").each(function() {
                if ($(this).is(":checked")) {
                    var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                    $tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
                }
            });
        });

        $('body').on('click', '#down', function() {
            $(".chktable").each(function() {
                if ($(this).is(":checked")) {
                    var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                    $tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
                }
            });
        });

        $('body').on('click', '.btn-show', function() {
            var result = json($(this).attr('data-url'),
                {show : $(this).attr('data-value'), idx : $(this).parent().parent().attr('data-idx')});
            location.reload();
        });
        //
        // $('body').on('click', '#idxgo', function() {
        // 	var idxs = new Array();
        // 	var idx = new Array();
        // 	var i = 1;
        // 	$(".chktable").each(function() {
        // 		idxs.push(i);
        // 		idx.push($(this).parent().parent().attr('data-idx'));
        // 		i++;
        // 	});
        // 	var url = $(this).attr('data-url');
        // 	var result =json(url,{'idxs':idxs,'idx':idx});
        // 	location.reload();
        // });


        // $('body').on('click', '.adminview', function() {
        //     var idx = $(this).parent().parent().attr('data-idx');
        //     location.href = '/admin/estimateView/'+idx;
        // });

    }
    var admin = new admin();
    admin.event();
});
