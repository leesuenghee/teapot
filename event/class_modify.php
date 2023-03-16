<?php
    include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/admin_header.php";
?>
        <link rel="stylesheet" href="../css/class_main.css" />
        <?php
    include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/admin_aside.php";

?>
                <section class="col-10 align-self-center">
                    <div class="class_top d-flex row mb54">
                        <h2 class="col-md-4 suit_bold_xl">클래스 수정</h2>
                    </div>
                    <form action="" method="post" class="ms-3">
                        <div class="class_subit_mid d-flex mb27">
                            <div class="class_submit_L col-md-6 d-flex row">
                                <div
                                    class="DND R_BR col-md-6 text-center class_modi"
                                >
                                    <h3 class="suit_rg_m mb27">이미지 등록</h3>
                                    <div class="class_modify_img">
                                        <img
                                            src="../img/class/thub_class01.jpg"
                                            alt=""
                                            class="thubnail"
                                        />
                                    </div>
                                    <div
                                        class="c_submit_btns d-flex justify-content-end mt-3 me-4"
                                    >
                                        <button class="btn_s">
                                            <a href="./class_main.html">수정</a>
                                        </button>
                                        <button class="btn_s">
                                            <a href="./class_main.html">삭제</a>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="classprice R_BR col-md-6 text-center"
                                >
                                    <h3 class="suit_rg_m mb27">금액</h3>
                                    <ul
                                        class="class_price d-flex justify-content-center"
                                    >
                                        <li class="d-flex">
                                            <label
                                                for="free"
                                                class="suit_rg_s price_btn click"
                                                >무료</label
                                            ><input
                                                type="radio"
                                                name="FNP"
                                                id="free"
                                            />
                                            <label
                                                for="paid"
                                                class="suit_rg_s price_btn"
                                                >유료</label
                                            ><input
                                                type="radio"
                                                name="FNP"
                                                id="paid"
                                            />
                                        </li>
                                        <li>
                                            <p class="suit_rg_s price_C_G">
                                                원
                                            </p>
                                            <input
                                                type="text"
                                                name=""
                                                id=""
                                                class="class_p_txt"
                                            />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="class_submit_R R_BR col-md-6">
                                <ul>
                                    <li class="mb27">
                                        <div class="mb27">
                                            <h3 class="suit_rg_m mb27">
                                                클래스 정보
                                            </h3>
                                            <input
                                                type="text"
                                                placeholder="클래스명"
                                                class="class_tit c_sub"
                                                value=""
                                            />
                                        </div>
                                        <select
                                            name="class_cate"
                                            class="c_sub"
                                            id="class_cate"
                                        >
                                            <option value="" disabled selected>
                                                카테고리
                                                <i
                                                    class="fa-solid fa-caret-down"
                                                ></i>
                                            </option>
                                            <option value="beginner_daily">
                                                초급_일상회화
                                            </option>
                                            <option value="intermediate_daily">
                                                중급_일상회화
                                            </option>
                                            <option value="advanced_daily">
                                                고급_일상회화
                                            </option>
                                            <option value="beginner_Travel">
                                                초급_여행회화
                                            </option>
                                            <option value="intermediate_Travel">
                                                중급_여행회화
                                            </option>
                                            <option value="advanced_Travel">
                                                고급_여행회화
                                            </option>
                                            <option value="beginner_business">
                                                초급_비지니스회화
                                            </option>
                                            <option
                                                value="intermediate_business"
                                            >
                                                중급_비지니스회화
                                            </option>
                                            <option value="advanced_business">
                                                고급_비니지스회화
                                            </option>
                                            <option value="beginner_SNS">
                                                초급_SNS회화
                                            </option>
                                            <option value="intermediate_SNS">
                                                중급_SNS회화
                                            </option>
                                            <option value="advanced_SNS">
                                                고급_SNS회화
                                            </option>
                                        </select>
                                    </li>
                                    <li>
                                        <h3 class="suit_rg_m mb27">강좌소개</h3>
                                        <div>
                                            <textarea id="tiny"></textarea>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c_submit_btns d-flex justify-content-end">
                            <button class="btn_s">
                                <a href="/class_main.html">수정</a>
                            </button>
                            <button class="btn_s">
                                <a href="/class_main.html">취소</a>
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
        <script
            type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <script
            src="https://cdn.tiny.cloud/1/p6o8j0wimrfigyl87k6yzi7ip85hzbk03a21g4vu4y52h9vi/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"
        ></script>
        <script src="../js/script.js"></script>
        <script src="../js/class.js"></script>
    </body>
</html>
