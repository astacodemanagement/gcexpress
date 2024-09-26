@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)


@section('content')



<div class="swiper-slide jt_index_1">
    <div class="swiper-container1" style="height: 100%">
        <div class="swiper-wrapper">
            <div class="swiper-slide banner_item"
                style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240820/72293ed8a353fecacc2f97dcf55d637d.jpg');"
                onclick="if (!window.__cfRLUnblockHandlers) return false; func_bulr('')"
                data-cf-modified-34d61b697cec2ef08b8ffd17-></div>
            <div class="swiper-slide banner_item"
                style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240830/00364861b44011052b39bc6ea46f1489.jpg');"
                onclick="if (!window.__cfRLUnblockHandlers) return false; func_bulr('')"
                data-cf-modified-34d61b697cec2ef08b8ffd17-></div>
            <div class="swiper-slide banner_item"
                style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240820/4662c4dab91916a642179058bd4bee63.jpg');"
                onclick="if (!window.__cfRLUnblockHandlers) return false; func_bulr('bucin.jet.co.id')"
                data-cf-modified-34d61b697cec2ef08b8ffd17-></div>
            <div class="swiper-slide banner_item"
                style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240906/bfe4f4dbce94449430ad5bf212196626.jpg');"
                onclick="if (!window.__cfRLUnblockHandlers) return false; func_bulr('https://jet.co.id/news/events?show=157')"
                data-cf-modified-34d61b697cec2ef08b8ffd17-></div>
            <div class="swiper-slide banner_item"
                style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240828/a7a4908bce9814bcced92d6e88966c89.jpg');"
                onclick="if (!window.__cfRLUnblockHandlers) return false; func_bulr('')"
                data-cf-modified-34d61b697cec2ef08b8ffd17-></div>
        </div>


    </div>
    <div class="gj_down_pa" style="display: none">
        <span class="gj_down_dian" style="background-color: #fff"></span>
        <img src="{{ asset('themplete/front') }}/static/images/home-no-next-1.png" style="width: 100%;height:100%">
    </div>
    <div class="search_mode">
        <div class="search_mode_item search_m1">
            <div class="search_kjgz" onkeydown="if (!window.__cfRLUnblockHandlers) return false; keyEnter();"
                data-cf-modified-34d61b697cec2ef08b8ffd17->
                <div class="kjgz_noclick" style="cursor: pointer">
                    <span>TRACE & TRACK</span>
                    <img src="{{ asset('themplete/front') }}/static/images/header_icon3.png" />
                    <img src="{{ asset('themplete/front') }}/static/images/header_icon2.png" class="kjgz_searchicon" />
                </div>
                <form class="index1_tc_form"
                    onkeydown="if (!window.__cfRLUnblockHandlers) return false; billdel()"
                    data-cf-modified-34d61b697cec2ef08b8ffd17->
                    <div class="kjgz_textarea">
                        <textarea oninput="if (!window.__cfRLUnblockHandlers) return false; inputbill(value)" id="billTextarea"
                            placeholder=" Please enter your waybill number. Available up to 10 waybills."
                            data-cf-modified-34d61b697cec2ef08b8ffd17-></textarea>
                        <input oninput="if (!window.__cfRLUnblockHandlers) return false; inputbill(value)"
                            type="text" placeholder="Please enter the waybill number"
                            data-cf-modified-34d61b697cec2ef08b8ffd17- />
                    </div>
                    <button type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; gzPage()"
                        class="js_index_2_btn" data-cf-modified-34d61b697cec2ef08b8ffd17->
                        Track <img src="{{ asset('themplete/front') }}/static/images/header_icon2.png"
                            style="float: none;margin-left:5px;vertical-align:text-top" class="kjgz_searchicon" />
                    </button>
                </form>
            </div>
        </div>
        <div class="search_mode_item search_m2">
            <form class="index1_tc_form">
                <div class="jt_index_2_inp">
                    <label>From</label>
                    <div class="inp_cont flex_1 jjcs_index search_select">
                        <input type="text" class="search_input" style="height: 100%; overflow: hidden"
                            data-type="1" />
                        <div class="search_my_box col_back" style="display: none;">
                            <div class="search_cont_box">
                                <div class="search_my_popular">
                                    <p>Popular Cities</p>
                                    <ul>
                                        <li class="mysearch_item" data-value="JAKARTA,DKI JAKARTA">JAKARTA,DKI
                                            JAKARTA
                                        </li>
                                        <li class="mysearch_item" data-value="BANDUNG,JAWA BARAT">BANDUNG,JAWA
                                            BARAT
                                        </li>
                                        <li class="mysearch_item" data-value="SURABAYA,JAWA TIMUR">SURABAYA,JAWA
                                            TIMUR
                                        </li>
                                        <li class="mysearch_item" data-value="YOGYAKARTA,D.I YOGYAKARTA">
                                            YOGYAKARTA,D.I
                                            YOGYAKARTA
                                        </li>
                                        <li class="mysearch_item" data-value="SEMARANG,JAWA TENGAH">SEMARANG,JAWA
                                            TENGAH
                                        </li>
                                    </ul>
                                </div>
                                <div class="search_my_keylist" style="display: none;">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jt_index_2_inp">
                    <label>To</label>
                    <div class="inp_cont flex_1 sjq_index search_select">
                        <input type="text" class="search_input" style="height: 100%; overflow: hidden"
                            data-type="2" />
                        <div class="search_my_box col_back" style="display: none;">

                            <div class="search_cont_box">
                                <div class="search_my_popular">
                                    <p>Popular Cities</p>
                                    <ul>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="JAKARTA,DKI JAKARTA">
                                            JAKARTA,DKI JAKARTA
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="BANDUNG,JAWA BARAT">
                                            BANDUNG,JAWA BARAT
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="SURABAYA,JAWA TIMUR">
                                            SURABAYA,JAWA TIMUR
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="YOGYAKARTA,D.I YOGYAKARTA">YOGYAKARTA,D.I YOGYAKARTA
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="SEMARANG,JAWA TENGAH">
                                            SEMARANG,JAWA TENGAH
                                        </li>
                                    </ul>
                                </div>
                                <div class="search_my_keylist" style="display: none;">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jt_index_2_inp">
                    <label>Weight</label>
                    <input type="number" id="weight"
                        oninput="if (!window.__cfRLUnblockHandlers) return false; xzWeight(value)" value="1"
                        style="width: 68px;margin-right: 5px;margin-left: 0" class="inp_cont flex_1"
                        data-cf-modified-34d61b697cec2ef08b8ffd17- /><span>KG</span>
                    <button type="button" class="zl_add"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; weightbtn(1)"
                        data-cf-modified-34d61b697cec2ef08b8ffd17-><img
                            src="{{ asset('themplete/front') }}/static/images/add_icon_sm.png" /></button>
                    <button type="button" class="zl_reduce"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; weightbtn(2)"
                        data-cf-modified-34d61b697cec2ef08b8ffd17-><img
                            src="{{ asset('themplete/front') }}/static/images/reduce_icon.png" /></button>
                </div>
                <div class="jt_index_2_inp flex cc_inp_box">
                    <label>Volume</label>
                    <div class="cc_div">
                        <input type="number" id="LCM"
                            oninput="if (!window.__cfRLUnblockHandlers) return false; DWCalculation()"
                            placeholder="Length" class="inp_cont" data-cf-modified-34d61b697cec2ef08b8ffd17->
                        <span class="bjcx_cm">CM</span>
                    </div>
                    <div class="cc_div">
                        <input type="number" id="KCM"
                            oninput="if (!window.__cfRLUnblockHandlers) return false; DWCalculation()"
                            placeholder="Width" class="inp_cont" data-cf-modified-34d61b697cec2ef08b8ffd17->
                        <span class="bjcx_cm">CM</span>
                    </div>
                    <div class="cc_div">
                        <input type="number" id="GCM"
                            oninput="if (!window.__cfRLUnblockHandlers) return false; DWCalculation()"
                            placeholder="Height" class="inp_cont" data-cf-modified-34d61b697cec2ef08b8ffd17->
                        <span class="bjcx_cm" style="margin-right: 0;">CM</span>
                    </div>
                </div>
                <button type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; QueryPage()"
                    class="js_index_2_btn" data-cf-modified-34d61b697cec2ef08b8ffd17->
                    Search <img src="{{ asset('themplete/front') }}/static/images/header_icon2.png"
                        style="float: none;margin-left:5px;vertical-align:text-top;width: 12px;"
                        class="kjgz_searchicon" />
                </button>
            </form>
            <div class="search_yfcx">
                <span>SHIPPING RATES</span>
                <img src="{{ asset('themplete/front') }}/static/images/jsq.png" />
            </div>
        </div>
        <div class="search_mode_item search_m3">
            <form class="index1_wd_form">
                <div style="font-size: 26px;margin: 28px 0;">District:</div>
                <div class="jt_index_2_inp pos_r">
                    <div class="inp_cont cont_r flex_1 sjq_index search_select">
                        <input type="text" class="search_input" placeholder="Please select area"
                            style="height: 100%; overflow: hidden" data-type="3" />
                        <div class="search_my_box col_back" style="display: none;">
                            <div class="search_cont_box">
                                <div class="search_my_popular">
                                    <p>Popular Cities</p>
                                    <ul>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="JAKARTA,DKI JAKARTA">
                                            JAKARTA,DKI JAKARTA
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="BANDUNG,JAWA BARAT">
                                            BANDUNG,JAWA BARAT
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="SURABAYA,JAWA TIMUR">
                                            SURABAYA,JAWA TIMUR
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="YOGYAKARTA,D.I YOGYAKARTA">YOGYAKARTA,D.I YOGYAKARTA
                                        </li>
                                        <li class="mysearch_item" data-type="city"
                                            data-value="SEMARANG,JAWA TENGAH">
                                            SEMARANG,JAWA TENGAH
                                        </li>
                                    </ul>
                                </div>
                                <div class="search_my_keylist" style="display: none;">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; WdPage(false)"
                        class="js_index_2_btn wd_index_btn" data-cf-modified-34d61b697cec2ef08b8ffd17-><img
                            src="{{ asset('themplete/front') }}/static/images/header_icon2.png" /></button>
                </div>


            </form>
            <div class="search_wdcx">
                <span>FIND DROP POINT</span>
                <img src="{{ asset('themplete/front') }}/static/images/shangdian.png" />
            </div>
        </div>
    </div>
    <div class="serch_mode_bg"></div>
</div>
<div class="swiper-slide swiper-no-swiping">
    <div class="jt_index_2_top">FEATURES</div>
    <div class="jt_index_2_list pos_r">
        <div class="swiper-container-features jt_index_2_listbox" style="height: 100%;overflow-x: hidden">
            <div class="swiper-wrapper clear_b">
                <div class="swiper-slide"><img class="index2_img1" src="{{ asset('themplete/front') }}/static/images/index2_item1.png" /></div>
                <div class="swiper-slide"><img class="index2_img2" src="{{ asset('themplete/front') }}/static/images/index2_item2.png" /></div>
                <div class="swiper-slide"><img class="index2_img3" src="{{ asset('themplete/front') }}/static/images/index2_item3.png" /></div>
                <div class="swiper-slide"><img class="index2_img4" src="{{ asset('themplete/front') }}/static/images/index2_item4.png" /></div>
                <div class="swiper-slide"><img class="index2_img5" src="{{ asset('themplete/front') }}/static/images/index2_item5.png" /></div>
            </div>
        </div>
        <div class="swiper-button-prev news-mx-pn" style="background-image: url('{{ asset('themplete/front') }}/static/images/bai_left.png')">
        </div>
        <div class="swiper-button-next news-mx-pn" style="background-image: url('{{ asset('themplete/front') }}/static/images/bai_right.png')">
        </div>
    </div>
    <ul class="index_2_nav_list">
        <li class="index_2_nav_item line_pos on"><span>News</span></li>
        <li class="index_2_nav_item line_pos"><span>Events</span></li>
        <li class="index_2_nav_item line_pos"><span>Top Employee</span></li>
    </ul>
    <div class="index_2_news_box">
        <div class="index_2_news_l">
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/newsa00c.html?show=103">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20221229/276855e05138b2995d62041574b3f39e.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>Information on Delivery Time Adjustment</div>
                        <p>2024-09-20</p>
                    </div>
                </a>
            </div>
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/news25b4.html?show=215">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240911/9e820da8c836c973d34a453f11b15ed7.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>J&T HEBOH: Cost-Effective Heavy Parcel Shipping from Just Rp3,000/Kg</div>
                        <p>2024-09-11</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="index_2_news_r">
            <div class="index_2_news_r_list newsType">
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/newsa00c.html?show=103">
                        <div class="index_2_news_r_head">Information on Delivery Time Adjustment</div>
                        <span class="index_2_news_r_date">2024-09-20</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/news25b4.html?show=215">
                        <div class="index_2_news_r_head">J&T HEBOH: Cost-Effective Heavy Parcel Shipping from Just
                            Rp3,000/Kg</div>
                        <span class="index_2_news_r_date">2024-09-11</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/news6643.html?show=214">
                        <div class="index_2_news_r_head">J&T Express for Greener Tomorrow: Sustainability
                            Initiative with the Planting of 3,000 Mangrove Seedlings</div>
                        <span class="index_2_news_r_date">2024-09-05</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/newscd4c.html?show=213">
                        <div class="index_2_news_r_head">J&T Express Officially Donates Grants to MSMEs Across
                            Jabodetabek and Banten via Rumah BUMN</div>
                        <span class="index_2_news_r_date">2024-08-14</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/news95e0.html?show=212">
                        <div class="index_2_news_r_head">Official Announcement to J&T Express Customers in the
                            Affected Areas Due to the KM Niki Sejahtera Fire</div>
                        <span class="index_2_news_r_date">2024-08-13</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/newse9ee.html?show=211">
                        <div class="index_2_news_r_head">J&T Express Wins TOP Brand Award in Courier Service
                            Category Ahead of Its 9th Anniversary</div>
                        <span class="index_2_news_r_date">2024-08-13</span>
                    </a>
                </div>
            </div>
            <div class="text_center page_margin">
                <div class="m-style M-box1" style="display: inline-block"></div>
            </div>
            <div class="seemore"><a href="{{ asset('themplete/front') }}/news/news.html">MORE >></a></div>
        </div>
    </div>
    <div class="index_2_news_box" style="display: none;">
        <div class="index_2_news_l">
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/events01b2.html?show=159">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240912/2f69d53881ddd514eb0684f37fda3b2e.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>Cashback 5% Using SPayLater</div>
                        <p>2024-09-12</p>
                    </div>
                </a>
            </div>
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/events0717.html?show=156">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240826/ec4f33ddbb6e1e79c890d7f390ac98c9.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>Extra Cashback 10% Using SPayLater</div>
                        <p>2024-08-25</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="index_2_news_r">
            <div class="index_2_news_r_list eventsType">
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/events01b2.html?show=159">
                        <div class="index_2_news_r_head">Cashback 5% Using SPayLater</div>
                        <span class="index_2_news_r_date">2024-09-12</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/events0717.html?show=156">
                        <div class="index_2_news_r_head">Extra Cashback 10% Using SPayLater</div>
                        <span class="index_2_news_r_date">2024-08-25</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eventsd526.html?show=158">
                        <div class="index_2_news_r_head">J&T EXPRESS BIRTHDAY SPECIAL, REDEEM J&T POINTS & GET
                            MERCHANDISE</div>
                        <span class="index_2_news_r_date">2024-08-19</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eventsf34d.html?show=157">
                        <div class="index_2_news_r_head"></div>
                        <span class="index_2_news_r_date">2024-08-16</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eventsb2b5.html?show=122">
                        <div class="index_2_news_r_head">DAILY SHIPPING DISCOUNT UNTIL SEPTEMBER 2024</div>
                        <span class="index_2_news_r_date">2024-07-04</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/events21c7.html?show=155">
                        <div class="index_2_news_r_head">Welcoming the J&T Connect Run next July, J&T Express is
                            holding a Weekend With Community at Car Free Day Jakarta</div>
                        <span class="index_2_news_r_date">2024-06-11</span>
                    </a>
                </div>
            </div>
            <div class="text_center page_margin">
                <div class="m-style M-box2" style="display: inline-block"></div>
            </div>
            <div class="seemore"><a href="{{ asset('themplete/front') }}/index/news/indexb20d.html?type=Events">MORE >></a></div>
        </div>
    </div>
    <div class="index_2_news_box" style="display: none;">
        <div class="index_2_news_l">
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/eotm21f6.html?show=99">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240829/a2732be4c18fe67d334261fc7071f771.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>Hasbul Subahri: From Covering 45KM Daily to Becoming a Trusted Supervisor</div>
                        <p>2024-08-30</p>
                    </div>
                </a>
            </div>
            <div class="index_2_news_l_item">
                <a href="{{ asset('themplete/front') }}/news/eotm1c40.html?show=98">
                    <div class="news_l_itemimg"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240729/50e8952a2127e1f01cabe6db1e4bdf66.jpg')">
                    </div>
                    <div class="news_l_itemcont">
                        <div>Starting Her Journey as a Drop Point Team Member, Denissa's Hard Work Leads Her to
                            Become One of the Best Drop Point Leaders</div>
                        <p>2024-07-30</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="index_2_news_r">
            <div class="index_2_news_r_list eotmType">
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotm21f6.html?show=99">
                        <div class="index_2_news_r_head">Hasbul Subahri: From Covering 45KM Daily to Becoming a
                            Trusted Supervisor</div>
                        <span class="index_2_news_r_date">2024-08-30</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotm1c40.html?show=98">
                        <div class="index_2_news_r_head">Starting Her Journey as a Drop Point Team Member,
                            Denissa's Hard Work Leads Her to Become One of the Best Drop Point Leaders</div>
                        <span class="index_2_news_r_date">2024-07-30</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotm3eb4.html?show=97">
                        <div class="index_2_news_r_head">Transformation to Build a Career From Courier to Manager
                        </div>
                        <span class="index_2_news_r_date">2024-06-27</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotme984.html?show=96">
                        <div class="index_2_news_r_head">Meet Edi Sarwono: From Courier to Manager</div>
                        <span class="index_2_news_r_date">2024-05-29</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotm5f65.html?show=93">
                        <div class="index_2_news_r_head">Underestimated when delivering packages, this female
                            courier shows her dedication and gets appreciation</div>
                        <span class="index_2_news_r_date">2024-04-29</span>
                    </a>
                </div>
                <div class="index_2_news_r_item">
                    <a href="{{ asset('themplete/front') }}/news/eotm7278.html?show=91">
                        <div class="index_2_news_r_head">Deni Alfateha: The Backbone of J&T Express's Customer
                            Support</div>
                        <span class="index_2_news_r_date">2024-02-29</span>
                    </a>
                </div>
            </div>
            <div class="text_center page_margin">
                <div class="m-style M-box3" style="display: inline-block"></div>
            </div>
            <div class="seemore"><a href="{{ asset('themplete/front') }}/news/eotm.html">MORE >></a></div>
        </div>
    </div>
    <div class="index_partners">
        <div class="jt_index_2_top">Partners</div>
        <div class="swiper-container-partners" style="height: 100%;overflow-x: hidden">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/22c8645f6951c7f50c53978cb973851f.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/c25b10c2417597ddfab371939036df9b.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/5fd74abdd37da1b83aede61465817a59.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/6925ef86e4ed73ae30b0db44e19662e2.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/3e5dc08d5dc353e1256d49cda6dcebd2.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/33119ab6666f790a7af51d2e3dca10b3.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20181227/54692ecff0ee4e84a4f8cf2f10ea67b9.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/149fe9d7950c8fc8e2248796a0afae0c.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/77dba6393a44539303946018b36e7042.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/d8f9dfcf298228d07b0d11e7ac685f5e.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/031ca1e7372218a23b7654c7733d9f29.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/0c77c44fc8d9af5115fc5bd93ec0369e.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/6fe5df4d603e72feec2d93795f21d5a1.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/4107f3b92d3e014c9a428b614455797a.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/576d4c921f42841f609f4353e032afc4.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/2d968cd66b05922e142aa7802fe20863.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/6b9fd805588f86ff10da6e81f3ffdd02.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/959cbe47a11534c110b5720904406de8.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/ad5fb82c91f402ee101a8552f150ee7d.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/4692d158bad6aecf433db0923b00b63f.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/154abd74d0adcb32a2a9b178de3c0d34.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/db2e433cce984a550dc9e470553ff133.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200622/1282a7ab9c0c37eea9ac69022ccdba97.png')">
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="partners_img"
                        style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20240724/663f5db70bb2ad78f946ce5460c8f30a.png')">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="pos_r" style="overflow: hidden">
        <div class="index_foot_bg">
            <img src="{{ asset('themplete/front') }}/static/images/index_foot.png" />
            <p class="index_foot_remark">© 2015-2024 PT. Global Jet Express All Rights Reserved</p>
        </div>
        <div class="index_foot_right">
            <div class="index_foot_img pos_r">
                <div class="down1 downimg"><img src="{{ asset('themplete/front') }}/static/images/down1.png" style="width: 100%;" /></div>
                <div class="down2 downimg"><img src="{{ asset('themplete/front') }}/static/images/down2.png" style="width: 100%;" /></div>
            </div>
            <div class="cont_right">
                <div class="cont_right_text">
                    <div class="index_foot_top pos_r">MORE THAN JUST A SIMPLE LOOK</div>
                    <div class="index_foot_tip pos_r">The J&T Express application now has more benefits </div>
                    <div class="index_3_cont pos_r ani" swiper-animate-effect="fadeInRight"
                        swiper-animate-duration="0.3s">
                        <ul class="jt_index_3_imglist clear_b ani" swiper-animate-effect="fadeInRight"
                            swiper-animate-duration="0.3s">
                            <li class="jt_index_3_imgitem on">
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191121/91aaddd04cfcdddf60e1151be5f453f0.png"
                                    class="nohover" />
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191102/ecadbccf46cb6452fe1d62a2deee8a5b.png"
                                    class="inhover" />
                            </li>
                            <li class="jt_index_3_imgitem ">
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191121/8d2a74cb5bcd388777c73a1988d4e4bd.png"
                                    class="nohover" />
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191102/05109314aedb6ad19849d74f705dfaee.png"
                                    class="inhover" />
                            </li>
                            <li class="jt_index_3_imgitem ">
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191121/91180078bdf841c18e63da763d9982dc.png"
                                    class="nohover" />
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191102/5d58a34fcffe656d8541f9bac8989da4.png"
                                    class="inhover" />
                            </li>
                            <li class="jt_index_3_imgitem ">
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191121/e5a9f7708b6dbf52bbbd658c857c389b.png"
                                    class="nohover" />
                                <img src="{{ asset('themplete/front') }}/indexUploads/images/20191102/7e4f6787aa5fed2f3d0e56d5810dbe54.png"
                                    class="inhover" />
                            </li>
                        </ul>
                        <div class="jt_index_3_seldesc on">
                            <h4>Order</h4>
                            <p style="line-height: normal;">You can enjoy drop off service more convenient by input
                                the detail first</p>
                        </div>
                        <div class="jt_index_3_seldesc ">
                            <h4>Real Time Tracking</h4>
                            <p>Track your shipping status in detail through J&amp;T Express&#39;s new tracking
                                feature.</p>
                            <p><br /></p>
                        </div>
                        <div class="jt_index_3_seldesc ">
                            <h4>Drop Point Nearby</h4>
                            <p>You can find Drop Point easier through application that has been integrated with
                                google maps.</p>
                            <p><br /></p>
                        </div>
                        <div class="jt_index_3_seldesc ">
                            <h4>Shipping Rates</h4>
                            <p>Check shipping rates through features J&amp;T Express in detail.</p>
                            <p><br /></p>
                        </div>
                    </div>
                </div>
                <div class="jt_index_2_top Download_App">Download App</div>
                <div class="ani btnimg_box pos_r text_center" swiper-animate-effect="fadeInUp"
                    swiper-animate-duration="0.3s" style="font-size: 0">
                    <button class="appstore" style="background-color: transparent">
                        <a target="_blank" href="{{ asset('themplete/front') }}/https://itunes.apple.com/id/app/j-t-express/id1073040673?mt=8">
                            <img src="{{ asset('themplete/front') }}/static/images/home-img-appstore.png" />
                        </a>
                    </button>
                    <button class="googleapp" style="background-color: transparent">
                        <a target="_blank"
                            href="{{ asset('themplete/front') }}/https://play.google.com/store/apps/details?id=com.msd.JTClient&amp;hl=en">
                            <img src="{{ asset('themplete/front') }}/static/images/home-img-googleapp.png" />
                        </a>
                    </button>
                    <button class="huaweiapp" style="background-color: transparent">
                        <a target="_blank"
                            href="{{ asset('themplete/front') }}/https://appgallery.cloud.huawei.com/ag/n/app/C101387331?channelId=WEBSITE&amp;id=de8d503152f54dbbacbab7ebfd5fd368&amp;s=1FF9B824FC2DCADB5F60040D1CB304666B4CF78009F4F4E228A35ECEA19AE14B&amp;detailType=0&amp;v=">
                            <img src="{{ asset('themplete/front') }}/static/images/huawei-img-appstore.png" />
                        </a>
                    </button>
                </div>
            </div>
            <div class="index_db_awards index_db_icon index_awards_box">
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/8a420042f44332906a96abf58fbbba3b.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/a552c828a47f23424a169b2aee1ccd42.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/a53152943e29ae8112538bcb28eb0d19.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/bcad5cc8bfbcda39eaf057addc34279a.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/5cea15a9a8ecd8857c63f54ff941483f.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20200204/c538d672aeef8beb95f0c6f773421a4c.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20210705/0d9afed6c015a7e9d4184c78dbb91b5e.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20210705/e995a884d3741bb479021214fb934ec0.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20210705/36213520babe8b43c49194ff083d8a3c.jpg')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20210705/613a5bfc463b90af35c41d7c583e7764.png')">
                </div>
                <div
                    style="background-image: url('{{ asset('themplete/front') }}/indexUploads/images/20210208/88b42cde310f7dd927340c5dce029d31.png')">
                </div>
            </div>
            <p style="display: none">© 2015-2020 PT. Global Jet Express All Rights Reserved</p>
        </div>
    </div>
</div>
<div class="index_db_callbox index_page">
    <div class="index_db_callbox_cont">
        <div>


            <img src="{{ asset('themplete/front') }}/static/images/ICON_CHAT%20WITH_US.png" />
        </div>
    </div>
</div>
<div class="index_db_txtbox">
    <img src="{{ asset('themplete/front') }}/static/images/ic_close_white.png" class="index_db_close" />
    <div class="index_db_txtbox_headimg">
        <img src="{{ asset('themplete/front') }}/static/images/bg_red.png" style="width: 100%;display: block;" />
        <div class="index_db_txtbox_imgbox">
            <img src="{{ asset('themplete/front') }}/static/images/jeny_profile_picture.png" />
            <div>
                <h2>Kontak Kami</h2>
                <p>Hubungi kami untuk segala pertanyaan Anda!</p>
            </div>
        </div>
    </div>
    <div class="index_db_textbox_cont">
        <div class="index_db_textbox_item">
            <img src="{{ asset('themplete/front') }}/static/images/ic_phone.png" /><a href="{{ asset('themplete/front') }}/tel:021-8066-1888">Call Us 021-8066-1888</a>
        </div>





        <div class="index_db_textbox_item">
            <a id="chart_with_us" href="{{ asset('themplete/front') }}/javascript:;">
                <img src="{{ asset('themplete/front') }}/static/images/ic_chat.png" /><span>Chat with Us<span
                        style="font-size: 10px;color:#333;float: right;margin-top: 5px;"></span></span>
            </a>
        </div>




    </div>
    <p class="index_db_textbox_tip">Stay Connected</p>
    <div class="index_db_icon" style="position: initial;margin-left: 0;margin-bottom: 10px;">
        <a target="_blank" href="{{ asset('themplete/front') }}/https://www.facebook.com/jntexpressindonesia/" style="margin-right:10px"><img
                src="{{ asset('themplete/front') }}/static/images/ic_fb.png" /></a>
        <a target="_blank" href="{{ asset('themplete/front') }}/https://twitter.com/jntexpressid" style="margin-right:10px"><img
                src="{{ asset('themplete/front') }}/static/images/ic_twitter.png" /></a>
        <a target="_blank" href="{{ asset('themplete/front') }}/https://www.instagram.com/jntexpressid/" style="margin-right:10px"><img
                src="{{ asset('themplete/front') }}/static/images/ic_ig.png" /></a>
        <a target="_blank" href="{{ asset('themplete/front') }}/https://www.youtube.com/channel/UCdL3-euNvJhMMBvEVVBg5pA"><img
                src="{{ asset('themplete/front') }}/static/images/ic_yt.png" /></a>
    </div>
</div>
<div class="db_cont" style="display: none;">
    <img class="a_cp" src="{{ asset('themplete/front') }}/static/images/backtop-bolck.png" />
</div>
<div class="alerttip_a" style="display: none;">
    <img class="alert_del" src="{{ asset('themplete/front') }}/static/images/od_del.png" />
    <a href><img class="alert_img" src /></a>
</div>


@endsection
