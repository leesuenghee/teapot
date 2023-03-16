// 클래스 관리

/*클래스 등록*/

//thumbnail_드래그 앤 드롭
// var uploadFile = [];
// var $box = $("#box");
// $box.on("dragenter", function (e) {
//     //드래그가 들어왔을 때
//     $(this).addClass("drag-over");
// })
//     .on("dragleave", function (e) {
//         $(this).removeClass("drag-over"); //드래그가 나갔을 때
//     })
//     .on("dragover", function (e) {
//         e.stopPropagation();
//         e.preventDefault();
//     })
//     .on("drop", function (e) {
//         // 드래그한 항목을 드랍했을 때
//         e.preventDefault();
//         $(this).removeClass("drag-over");
//         var files = e.originalEvent.dataTransfer.files; //드래그&드랍 항목
//         console.log(files);
//         for (var i = 0; i < files.length; i++) {
//             var file = file[i];
//             var size = uploadFile.push(file); // 업로드 목록에 이미지 추가
//             attachFile(file[i]);
//         }
//     });

// function preview(file, idx) {
//     var reader = new FileReader();
//     reader.onload = (function (f, idx) {
//         return function (e) {
//             var div =
//                 '<div class= "thumb" id="f_' +
//                 idx +
//                 '">\
//                 <div class="close" data-idx="' +
//                 idx +
//                 '"></div>\
//                 <img src="' +
//                 e.target.result +
//                 '"/>\
//                 </div>';
//             $(".thumb").append(div);
//         };
//     })(file, idx);
//     reader.readAsDataURL(file); //이미지 표시
// }

// $(".thumb").on("click", ".close", function (e) {
//     var $target = $(e.target);
//     var idx = $target.attr("data-idx");
//     file_del(idx); // 삭제 함수에 추가 이미지 전달
// });

// function attachFile(file) {
//     var formData = new FormData();
//     formData.append("savefile", file);
//     //<input name="savefile" value="첨부파일명">
//     console.log(formData);

//     $.ajax({
//         url: "product_save_image.php",
//         cache: false,
//         contentType: false,
//         processData: false,
//         data: formData,
//         type: "post",
//         dataType: "json",
//         beforeSend: function () {}, //product_save_image.php 응답하기전 할일
//         error: function () {}, //product_save_image.php 없으면 할일
//         success: function (return_data) {
//             //product_save_image.php 유무
//             console.log(return_data);
//             //관리자 유무, 어드민아니면 로그인메시지
//             if (return_data.result == "member") {
//                 alert("관리자로 로그인하세요");
//                 return;
//             } else if (return_data.result == "size") {
//                 alert("10메가 이하만 첨부할 수 있습니다.");
//                 return;
//             } else if (return_data.result == "image") {
//                 alert("이미지만 첨부할 수 있습니다.");
//                 return;
//             } else if (return_data.result == "error") {
//                 alert("첨부실패, 관리자에게 문의하세요");
//                 return;
//             } else {
//                 let imgid = $("#file_table_id").val() + return_data.imgid + ","; //제품등록시 추가될 id값 저장
//                 $("#file_table_id").val(imgid); //제품등록시 추가될 id값 추가
//                 preview(file, return_data.imgid); //미리보기 만들기
//             }
//         },
//     });
// }

// tiny 웹에디터
tinymce.init({
    selector: "textarea#tiny",
    height: 300,
    menubar: " false",
    statusbar: false,
    menubar: false,
    plugins:
        "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss",
    resize: false,
    toolbar_location: "top",
    /*setup: (editor) => {
        editor.ui.registry.addContextToolbar("textselection", {
            predicate: (node) => !editor.selection.isCollapsed(),
            items: "fontsizeselect | formatselect | fontselect ",
            position: "selection",
        });
    },*/
    toolbar:
        " blocks | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",

    content_style:
        "body { margin: 2rem 10%; font-family:Helvetica,Arial,sans-serif; font-size:16px; }",
});

// //가격
// $("#free").click(function () {
//     var tag = (
//         <input
//             type="number"
//             name="cls_price"
//             id="price"
//             class="class_p_txt"
//             readonly
//         />
//     );
//     $("#price").append(tag).remove();
// });
