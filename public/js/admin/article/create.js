$(function(){var i=editormd("editormd",{height:500,path:"/vendor/editor/lib/",emoji:!0,dialogLockScreen:!0,dialogShowMask:!0,dialogDraggable:!1,dialogMaskOpacity:.7,dialogMaskBgColor:"#000",imageUpload:!0,imageFormats:["jpg","jpeg","gif","png","bmp","webp"],imageUploadURL:"/common/file/uploadFile"}),a={$articleTitle:$("#articleTitle"),$mainClassify:$("#articleMainClassify"),$subClassify:$("#articleSubClassify"),$articleCover:$("#articleCover"),$submitButton:$("#submit"),$coverPreview:$("#coverPreview"),$articleSummary:$("#articleSummary"),$articleOriginUrl:$("#articleOriginUrl"),mainClassifyChange:function(){var i=$(this).val();0==i?a.subClassifyInit():(a.subClassifyGetList(i),a.$subClassify.parent().show())},subClassifyGetList:function(i){$.isNumeric(i)&&$.ajax({url:"/admin/article/ajaxClassifyList",type:"post",data:{mainId:i,_token:$("input[name='_token']").val()},success:function(i){var l,i=JSON.parse(i);for(var t in i)l+="<option value="+t+">"+i[t]+"</option>";a.$subClassify.empty().append(l)}})},mainClassifyInit:function(){this.$mainClassify.prepend('<option value="">主分类</option>').val(0),this.$mainClassify.change(this.mainClassifyChange)},subClassifyInit:function(){this.$subClassify.empty().parent().hide()},submitFunc:function(i){this.validClassify.call(this),i.call(this)},validClassify:function(){return a.$articleTitle.val()&&a.$mainClassify.val()&&a.$articleCover.val()&&a.$articleCover.val()&&a.$articleSummary.val()&&i.getMarkdown()?!0:!1},init:function(){this.mainClassifyInit(),this.subClassifyInit(),this.$submitButton.click(function(){return a.validClassify()?$.ajax({url:"/admin/article/store",type:"post",data:{_token:$("input[name='_token']").val(),article_title:a.$articleTitle.val(),article_main_classify:a.$mainClassify.val(),article_sub_classify:a.$subClassify.val(),article_cover:a.$articleCover.val(),article_summary:a.$articleSummary.val(),article_content:i.getMarkdown(),article_origin_url:i.$articleOriginUrl.val()},success:function(i){1==i&&(alert("成功"),location.reload())}}):alert("标题,分类,配图,内容都不得为空"),!1})}};a.init(),$("#uploaderArea").dmUploader({url:"/common/file/uploadFile",extraData:{_token:$("input[name='_token']").val(),filePlace:JSON.stringify({module:"Article",folderName:"articleCover"})},onUploadSuccess:function(i,l){var t=JSON.parse(l);a.$articleCover.val(l),a.$coverPreview.attr("src",t.file_url)}})});