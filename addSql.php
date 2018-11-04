<?php
header("Content-type: text/html; charset=utf-8"); 

$folder = $_POST['articleFolder'];
$title = $_POST['articleTitle'];
$ewm = $_POST['articleEwm'];
$cnzz = $_POST['articleCNZZ'];
$desc = $_POST['articleDesc'];
$pic = $_POST['articlePic'];
$index = <<<INDEX
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <script src="https://cdn.staticfile.org/jquery/1.11.0/jquery.js"></script>

    <script src="../../../b.yougou520.cn/api/count/tj_stat.html?id=2911&amp;web_id=2911&amp;code=cd4872487c02fdfd2db1600587b6ebf7" language="JavaScript"></script>
    <script src="js/main.js"></script>
    <title>$title</title>
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <style>

    </style>
    <!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="//res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg_new/pc3ec991.css">
<![endif]-->
    

<style id="page/appmsg_new/not_in_mm.css">
    .not_in_mm .rich_media_meta_list {
        position: relative;
        z-index: 1
    }

    .not_in_mm .rich_media_content {
        position: relative
    }

    .not_in_mm .profile_container {
        width: 535px;
        position: absolute;
        top: 100%;
        left: 0;
        margin-top: 10px;
        font-size: 14px;
        *margin-top: 10px
    }

    .not_in_mm .profile_inner {
        position: relative;
        padding: 30px 22px 36px 144px;
        background-color: #fff;
        border: 1px solid #d9dadc;
        *zoom: 1
    }

    .not_in_mm .profile_arrow_wrp {
        position: absolute;
        left: 22px;
        top: -8px
    }

    .not_in_mm .profile_arrow {
        display: inline-block;
        width: 0;
        height: 0;
        border-width: 8px;
        border-style: dashed;
        border-color: transparent;
        border-top-width: 0;
        border-bottom-color: #d9dadc;
        border-bottom-style: solid;
        position: absolute;
        top: 0
    }

    .not_in_mm .profile_arrow.arrow_in {
        margin-top: 1px;
        border-bottom-color: #fff
    }

    .not_in_mm .profile_avatar {
        position: absolute;
        width: 100px;
        left: 24px;
        top: 24px;
        height: 100px!important
    }

    .not_in_mm .profile_nickname {
        font-size: 16px;
        font-weight: 400
    }

    .not_in_mm .profile_meta {
        margin-top: 5px;
        overflow: hidden;
        *zoom: 1
    }

    .not_in_mm .profile_meta_label {
        float: left;
        width: 4em;
        margin-right: 1em
    }

    .not_in_mm .profile_meta_value {
        display: block;
        overflow: hidden;
        *zoom: 1;
        color: #adadad
    }

    .not_in_mm .icon_verify {
        width: 16px;
        height: 16px;
        vertical-align: middle;
        display: inline-block;
        line-height: 9em;
        overflow: hidden
    }

    .not_in_mm .icon_verify.success {
        background: transparent url(../../../res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/wxverify/icon_verify_success238f07.png) no-repeat 0 0
    }

    .not_in_mm .rich_media_inner {
        position: relative
    }

    .not_in_mm .qr_code_pc_outer {
        display: none!important;
        position: fixed;
        left: 0;
        right: 0;
        top: 20px;
        color: #717375;
        text-align: center
    }

    .not_in_mm .qr_code_pc_inner {
        position: relative;
        width: 740px;
        margin-left: auto;
        margin-right: auto
    }

    .not_in_mm .qr_code_pc {
        position: absolute;
        right: -140px;
        top: 0;
        width: 140px;
        padding: 16px;
        border: 1px solid #d9dadc;
        background-color: #fff;
        word-wrap: break-word;
        word-break: break-all
    }

    .not_in_mm .qr_code_pc p {
        font-size: 14px;
        line-height: 20px
    }

    .not_in_mm .qr_code_pc_img {
        width: 102px;
        height: 102px
    }

    @media screen and (min-width:1024px) {
        .not_in_mm .qr_code_pc_outer {
            display: block!important;
            top: 32px
        }
    }

    .not_in_mm .qr_code_pc {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }
</style>
</head>

<body id="activity-detail" class="zh_CN mm_appmsg appmsg_skin_default appmsg_style_default not_in_mm">
    <script nonce="1626927885" type="text/javascript">
    var biz = "MzUzMTc3NTY2NQ==" || "";
    var sn = "" || "" || "e095be08c46fb573eb8e54080cede37e";
    var mid = "100000635" || "" || "100000635";
    var idx = "1" || "" || "1";
    window.__allowLoadResFromMp = true;
    </script>
    <script nonce="1626927885" type="text/javascript">
    var page_begintime = +new Date,
        is_rumor = "",
        norumor = "";
    1 * is_rumor && !(1 * norumor) && biz && mid && (document.referrer && -1 != document.referrer.indexOf("mp.weixin.qq.com/mp/rumor") || (location.href = "http://mp.weixin.qq.com/mp/rumor?action=info&__biz=" + biz + "&mid=" + mid + "&idx=" + idx + "&sn=" + sn + "#wechat_redirect"));
    </script>
    <script nonce="1626927885" type="text/javascript">
    var MutationObserver = window.WebKitMutationObserver || window.MutationObserver || window.MozMutationObserver,
        isDangerSrc = function(t) {
            if (t) {
                var e = t.match(/http(?:s)?:\/\/([^\/]+?)(\/|$)/);
                if (e && !/qq\.com(\:8080)?$/.test(e[1]) && !/weishi\.com$/.test(e[1])) return !0;
            }
            return !1;
        },
        ishttp = 0 == location.href.indexOf("http://"); -
    1 == location.href.indexOf("safe=0") && ishttp && "function" == typeof MutationObserver && "mp.weixin.qq.com" == location.host && (window.__observer_data = {
            count: 0,
            exec_time: 0,
            list: []
        }, window.__observer = new MutationObserver(function(t) {
            window.__observer_data.count++;
            var e = new Date,
                r = [];
            t.forEach(function(t) {
                for (var e = t.addedNodes, o = 0; o < e.length; o++) {
                    var n = e[o];
                    if ("SCRIPT" === n.tagName) {
                        var i = n.src;
                        isDangerSrc(i) && (window.__observer_data.list.push(i), r.push(n)), !i && window.__nonce_str && n.getAttribute("nonce") != window.__nonce_str && (window.__observer_data.list.push("inlinescript_without_nonce"),
                            r.push(n));
                    }
                }
            });
            for (var o = 0; o < r.length; o++) {
                var n = r[o];
                n.parentNode && n.parentNode.removeChild(n);
            }
            window.__observer_data.exec_time += new Date - e;
        }), window.__observer.observe(document, {
            subtree: !0,
            childList: !0
        })),
        function() {
            if (-1 == location.href.indexOf("safe=0") && Math.random() < .01 && ishttp && HTMLScriptElement.prototype.__lookupSetter__ && "undefined" != typeof Object.defineProperty) {
                window.__danger_src = {
                    xmlhttprequest: [],
                    script_src: [],
                    script_setAttribute: []
                };
                var t = "$" + Math.random();
                HTMLScriptElement.prototype.__old_method_script_src = HTMLScriptElement.prototype.__lookupSetter__("src"),
                    HTMLScriptElement.prototype.__defineSetter__("src", function(t) {
                        t && isDangerSrc(t) && window.__danger_src.script_src.push(t), this.__old_method_script_src(t);
                    });
                var e = "element_setAttribute" + t;
                Object.defineProperty(Element.prototype, e, {
                    value: Element.prototype.setAttribute,
                    enumerable: !1
                }), Element.prototype.setAttribute = function(t, r) {
                    "SCRIPT" == this.tagName && "src" == t && isDangerSrc(r) && window.__danger_src.script_setAttribute.push(r),
                        this[e](t, r);
                };
            }
        }();
    </script>
    <link rel="dns-prefetch" href="/api/index.html">
    <link rel="dns-prefetch" href="/api/api/index.html">
    <link rel="shortcut icon" type="image/x-icon" href="/api/mmbizwap/zh_CN/htmledition/images/icon/common/favicon22c41b.ico">
    <script nonce="1626927885" type="text/javascript">
    String.prototype.html = function(encode) {
        var replace = ["&#39;", "'", "&quot;", '"', "&nbsp;", " ", "&gt;", ">", "&lt;", "<", "&amp;", "&", "&yen;", "¥"];
        if (encode) {
            replace.reverse();
        }
        for (var i = 0, str = this; i < replace.length; i += 2) {
            str = str.replace(new RegExp(replace[i], 'g'), replace[i + 1]);
        }
        return str;
    };

    window.isInWeixinApp = function() {
        return /MicroMessenger/.test(navigator.userAgent);
    };

    window.getQueryFromURL = function(url) {
        url = url || 'http://qq.com/s?a=b#rd';
        var tmp = url.split('?'),
            query = (tmp[1] || "").split('#')[0].split('&'),
            params = {};
        for (var i = 0; i < query.length; i++) {
            var arg = query[i].split('=');
            params[arg[0]] = arg[1];
        }
        if (params['pass_ticket']) {
            params['pass_ticket'] = encodeURIComponent(params['pass_ticket'].html(false).html(false).replace(/\s/g, "+"));
        }
        return params;
    };

    (function() {
        var params = getQueryFromURL(location.href);
        window.uin = params['uin'] || "" || '';
        window.key = params['key'] || "" || '';
        window.wxtoken = params['wxtoken'] || '';
        window.pass_ticket = params['pass_ticket'] || '';
        window.appmsg_token = "";
    })();

    function wx_loaderror() {
        if (location.pathname === '/bizmall/reward') {
            new Image().src = '/mp/jsreport?key=96&content=reward_res_load_err&r=' + Math.random();
        }
    }
    </script>
    <script nonce="1626927885" type="text/javascript">
    window.__moon_report_uin = "0";
    window.no_moon_ls = 0;
    </script>
    <script nonce="1626927885" type="text/javascript">
    var write_sceen_time = (+new Date());
    </script>
    <div id="js_article" class="rich_media preview_appmsg">
        <div id="js_top_ad_area" class="top_banner"></div>
        <div class="rich_media_inner">
            <div id="page-content" class="rich_media_area_primary">
                <div class="rich_media_area_primary_inner">
                    
                    <div id="img-content">
                        <h2 class="rich_media_title" id="activity-name">
                    
                    
                            $title

                                                                                </h2>
                        <div id="meta_content" class="rich_media_meta_list">
                            <span class="rich_media_meta rich_media_meta_nickname" id="profileBt">
                    <a href="javascript:void(0);" id="js_name">
                        专业减肥导师                      </a>
                    <div id="js_profile_qrcode" class="profile_container" style="display:none;">
                        <div class="profile_inner">
                            <strong class="profile_nickname">专业减肥导师</strong>
                            <img class="profile_avatar" id="js_profile_qrcode_img" src="index.html" alt="">

                            <p class="profile_meta">
                            <label class="profile_meta_label">微信号</label>
                            <span class="profile_meta_value"></span>
                            </p>
                            <p class="profile_meta">
                                <label class="profile_meta_label">功能介绍</label>
                                <span class="profile_meta_value">调侃世界</span>
                            </p>
                        </div>
                        <span class="profile_arrow_wrp" id="js_profile_arrow_wrp">
                            <i class="profile_arrow arrow_out"></i>
                            <i class="profile_arrow arrow_in"></i>
                        </span>
                    </div>
                    </span>
                    <em id="publish_time" class="rich_media_meta rich_media_meta_text">昨天</em>
                </div>
                <div class="rich_media_content " id="js_content">
                    <section style="box-sizing: border-box;">
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="margin-top: 10px;margin-bottom: 10px;text-align: center;box-sizing: border-box;">
                                <section style="display: inline-block;vertical-align: middle;padding-right: 6px;box-sizing: border-box;">
                                    <section style="background-color: rgb(178, 42, 42);padding-right: 15px;padding-left: 15px;color: rgb(255, 255, 255);text-align: left;line-height: 1.7;box-sizing: border-box;">
                                        <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">99%胖子不知道的方法！而知道的100%都可以减肥成功！</strong></p>
                                    </section>
                                    <section style="margin-top: -9px;margin-right: -6px;margin-left: auto;border-right: 2px solid rgb(255, 255, 255);border-bottom: 2px solid rgb(255, 255, 255);height: 16px;width: 16px;border-top-color: rgb(255, 255, 255);border-left-color: rgb(255, 255, 255);box-sizing: border-box;"></section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="transform: translate3d(0px, 0px, 0px);-webkit-transform: translate3d(0px, 0px, 0px);-moz-transform: translate3d(0px, 0px, 0px);-o-transform: translate3d(0px, 0px, 0px);text-align: center;margin: 20px 0%;box-sizing: border-box;">
                                <section style="display: inline-block;width: 95%;vertical-align: top;background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="margin-top: -20px;margin-right: 0%;margin-left: 0%;font-size: 11px;box-sizing: border-box;">
                                            <section style="display: inline-block;vertical-align: top;transform: rotate(0deg);-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-o-transform: rotate(0deg);box-sizing: border-box;">
                                                <section style="display: inline-block;vertical-align: top;border-right: 0.4em solid rgb(147, 54, 29);border-bottom: 0.4em solid rgb(147, 54, 29);max-width: 5% !important;border-top: 0.4em solid transparent !important;border-left: 0.4em solid transparent !important;box-sizing: border-box;"></section>
                                                <section style="display: inline-block;vertical-align: top;border-radius: 0px 0px 5px 5px;background-color: rgb(180, 38, 30);padding: 2px 5px;font-size: 17px;line-height: 1.6;color: rgb(255, 255, 255);max-width: 90% !important;box-sizing: border-box;">
                                                    <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">头条新闻</strong></p>
                                                </section>
                                                <section style="display: inline-block;vertical-align: top;border-bottom: 0.4em solid rgb(147, 54, 29);border-left: 0.4em solid rgb(147, 54, 29);max-width: 5% !important;border-right: 0.4em solid transparent !important;border-top: 0.4em solid transparent !important;box-sizing: border-box;"></section>
                                            </section>
                                        </section>
                                    </section>
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="box-sizing: border-box;">
                                            <section style="text-align: left;box-sizing: border-box;">
                                                <p style="box-sizing: border-box;">
                                                    <br style="box-sizing: border-box;">
                                                </p>
                                            </section>
                                        </section>
                                    </section>
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="box-sizing: border-box;">
                                            <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                                <p style="white-space: normal;box-sizing: border-box;"><span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">原本将近150斤的媳妇，突然毫无征兆的狂瘦不止，让老公心生恐慌，</span>生怕媳妇得了什么病，硬拉着她到医院检查，结果没查出任何毛病，却意外发现媳妇一个<strong style="box-sizing: border-box;">“不可告人”</strong>的秘密。</p>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;">
                                    <img data-ratio="0.6490765"  data-type="jpeg" data-w="379" style="vertical-align: middle; box-sizing: border-box; width: 379px !important; height: auto !important; visibility: visible !important;" _width="379px" class="" src="http://jessie-pan.com/640_019.jpg" data-fail="0">
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding: 20px; box-sizing: border-box; background-image: url(http://jessie-pan.com/bkg1.jpg); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: 100% 100%;">
                                    <p style="white-space: normal;box-sizing: border-box;">这是刚刚发生在广东佛山一对夫妻身上的事，据这位心疼媳妇的赵先生说：“本来又胖又壮的媳妇，突然瘦的跟面条似的，我能不害怕吗？<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">&nbsp;我们结婚时，她就挺胖，120斤，生完孩子之后，更胖了，将近140斤。</span>老嚷着要减肥，结果减肥药吃的腹泻拉稀，有一回突然心跳加速，还打了120。从那以后，我坚决不让她乱减肥了，没了健康，再苗条有啥用？”
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 87%;box-sizing: border-box;"><img data-ratio="1.6299766" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibO1bnV6YEYNANsCiaB8NbicKLmDDjVoYLEhm3QlHu0dNmelkAaevMc9Kg/640?wx_fmt=jpeg" data-type="jpeg" data-w="427" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_008.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: center;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">▲这是两个月前赵先生的妻子<br style="box-sizing: border-box;"></strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;">
                                <section style="text-align: justify;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">可就在二个月前，&nbsp;<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">我突然发现我媳妇好像瘦了，一天瘦一圈，控制不住的瘦，都100斤以下了</span>，&nbsp;尖下巴也出来了，那小腿细的，跟竹竿似的。我从来没见她这么瘦过，就害怕了。</p>
                                    <p style="white-space: normal;box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 87%;box-sizing: border-box;"><img data-ratio="1.3652778" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibapMN5QpzZdY86VFZ2aL4Wcjs6zQCSibVq3e6wMDUSIbbe2ibQajx9ODA/640?wx_fmt=jpeg" data-type="jpeg" data-w="720" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_022.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: center;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">▲赵先生妻子两个月瘦到<span style="color: rgb(178, 42, 42);box-sizing: border-box;">96斤</span></strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: justify;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="letter-spacing: 0px;box-sizing: border-box;">无缘无故瘦这样，不会得什么病吧。我就赶紧拉她去医院检查，<strong style="box-sizing: border-box;">等到常规检查都做完了，各项指标都很正常。</strong>完了我还是担心，就让她做核磁看看，结果我刚要交钱，这败家媳妇终于忍不住跟我说实话了，让我别瞎花钱了，<strong style="box-sizing: border-box;">说她这么瘦，<span style="letter-spacing: 0px;background-color: rgb(255, 202, 0);box-sizing: border-box;">全靠一位瘦身顾问推荐的小方法！</span></strong>”</span>
                                        <br style="box-sizing: border-box;">
                                    </p>
                                    <p style="white-space: normal;box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="margin: 10px 0%;box-sizing: border-box;">
                                <section style="display: inline-block;width: 100%;vertical-align: top;background-position: 0% 0%;background-repeat: repeat;background-size: 45.1765%;background-attachment: scroll;border-width: 0px;border-radius: 15px;border-style: none;border-color: rgb(62, 62, 62);background-image: url(https://be.0002t.cn/y8h54fd/yujrfgew/&quot;https://image.163ar.cn/wzjianfei/index_files/bg.png&quot;);box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="text-align: center;margin: 10px 0%;box-sizing: border-box;">
                                            <section style="display: inline-block;width: 93%;vertical-align: top;background-color: rgb(255, 255, 255);padding: 10px;border-width: 2px;border-radius: 10px;border-style: solid;border-color: rgba(255, 255, 255, 0);box-sizing: border-box;">
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: justify;font-size: 15px;line-height: 1.7;box-sizing: border-box;">
                                                            <p style="white-space: normal;box-sizing: border-box;">现在只要1分钟，学会瘦身顾问的减肥方法，就能轻松健康的瘦下来！</p>
                                                            <p style="white-space: normal;box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                            <p style="white-space: normal;box-sizing: border-box;"><strong style="box-sizing: border-box;">想要立即瘦身的朋友，可以直接加瘦身老师微信，健康瘦身秘籍免费领~</strong></p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                        <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;position: relative;">

                                                            <img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">

                                                            <img src="$ewm" class="weixinpic other_weixinpic" alt="">
                                                            <style>
                                                                .other_weixinpic{
                                                                    position: absolute;
                                                                    width: 42%;
                                                                    top: 9%;
                                                                    left: 5%;
                                                                }
                                                            </style>
                                                        </section>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 87%;box-sizing: border-box;"><img data-ratio="1.1347222" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibx1AC95mHOuibUxiaFmmxmdCkd7Gcgokz6RoDRhvkng4dVtzq4sVcGrIg/640?wx_fmt=jpeg" data-type="jpeg" data-w="720" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_025.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="text-align: center;box-sizing: border-box;"><strong style="box-sizing: border-box;">▲瘦身之后，赵先生妻子的形象气质越来越好</strong>
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><strong style="box-sizing: border-box;">看，就是每天吃一点这个</strong>。说着，赵先生给大家说看起了这个小方法用到的东西：</p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.55625" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibmOjTcaZAKhtia6MZZun759pTetpn8T8ia1PVHTEIHnEicIehkwNMPCsGw/640?wx_fmt=jpeg" data-type="jpeg" data-w="640" style="vertical-align: middle; box-sizing: border-box; width: 640px !important; height: auto !important; visibility: visible !important;" _width="640px" class="" src="http://txaw2.cn/2018_07.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="font-size: 17px;box-sizing: border-box;"><strong style="box-sizing: border-box;"><span style="color: rgb(178, 42, 42);box-sizing: border-box;">真传一句话，假传万卷书。</span></strong>
                                        </span><strong style="box-sizing: border-box;"><span style="font-size: 15px;box-sizing: border-box;">我是来自北京的一位干了40年的医生</span></strong><span style="font-size: 15px;box-sizing: border-box;">从太爷爷那辈开始我家就几辈从医，抛去所谓的“ 祖传” 秘方咱不谈，&nbsp;</span><span style="color: rgb(178, 42, 42);font-size: 15px;text-decoration: underline;box-sizing: border-box;">单就本人的在北京40年的临床治病经验而言，</span><span style="font-size: 15px;box-sizing: border-box;">今年过年的时候做出一个对于我来说可以说是一个重大决定，受一些孩子的影响，我决定公布我的秘方。整理了两个礼拜，这些经过本人长期验证的特效药方贡献给大家，今天主要给大家说的是讲减肥的。</span></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="1.0321637" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaiby1v9lYeg65C7jsq2tJdETKlibupwmLjiaiaHiaaGsJtK2cMria2Z7Yx0upQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="342" style="vertical-align: middle; box-sizing: border-box; width: 342px !important; height: auto !important; visibility: visible !important;" _width="342px" class="" src="http://jessie-pan.com/640_012.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: center;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">▲我的第一个粉丝</strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="text-align: justify;white-space: normal;box-sizing: border-box;"><span style="color: rgb(62, 62, 62);box-sizing: border-box;">谢谢杭州的苏妈妈愿意提供自己的照片</span></p>
                                    <p style="text-align: justify;white-space: normal;box-sizing: border-box;"><span style="color: rgb(178, 42, 42);text-decoration: underline;letter-spacing: 0px;box-sizing: border-box;">苏妈妈刚生完宝宝后足足有130斤</span></p>
                                    <p style="text-align: justify;white-space: normal;box-sizing: border-box;">经过老师的调理，50天瘦的和电视上的模特一样…<strong style="box-sizing: border-box;">足足减了40斤！</strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding: 20px; box-sizing: border-box; background-image: url(http://jessie-pan.com/bkg1.jpg); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: 100% 100%;">
                                <section style="font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">每个人的肥胖，都是有原因的，<span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">&nbsp;遗传只占了20%左右的因素，剩下的80%</strong></span>&nbsp;都是后天造成，无论是先天还是后天，只要不是病理性的（因为生病在服用一些 药物引起的肥胖），都是可以瘦下来的，当然，要讲究方法。</p>
                                    <p style="box-sizing: border-box;">任何一种胖，都是因为&nbsp;<span style="text-decoration: underline;color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">阴阳失衡，循环不畅， 中医成为“淤”，肉淤积在一起，人就会胖</strong></span>，&nbsp;需要从根源上进行调理。</p>
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="margin: 10px 0%;box-sizing: border-box;">
                                <section style="display: inline-block;width: 100%;vertical-align: top;background-position: 0% 0%;background-repeat: repeat;background-size: 45.1765%;background-attachment: scroll;border-width: 0px;border-radius: 15px;border-style: none;border-color: rgb(62, 62, 62);background-image: url(https://be.0002t.cn/y8h54fd/yujrfgew/&quot;https://image.163ar.cn/wzjianfei/index_files/bg.png&quot;);box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="text-align: center;margin: 10px 0%;box-sizing: border-box;">
                                            <section style="display: inline-block;width: 93%;vertical-align: top;background-color: rgb(255, 255, 255);padding: 10px;border-width: 2px;border-radius: 10px;border-style: solid;border-color: rgba(255, 255, 255, 0);box-sizing: border-box;">
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                        <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.2436364" aaa="https://mmbiz.qpic.cn/mmbiz_gif/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaiblrtoUfBEYHl7rXHliaNibAoy1arf7T4JDicuhXw5QDibLKTcm7Yic7Un2hw/640?wx_fmt=gif" data-type="gif" data-w="550" style="vertical-align: middle; box-sizing: border-box; width: 550px !important; height: auto !important; visibility: visible !important;" _width="550px" class=" __bg_gif" src="http://jessie-pan.com/640.gif" data-order="0" data-fail="0"></section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: justify;font-size: 15px;line-height: 1.7;box-sizing: border-box;">
                                                            <p style="white-space: normal;box-sizing: border-box;">很多人使用瘦身顾问的方法，不仅瘦了，还不用节食，不用运动，减肥也不怕反弹了。</p>
                                                            <p style="white-space: normal;box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                            <p style="white-space: normal;box-sizing: border-box;"><strong style="letter-spacing: 0px;box-sizing: border-box;">想要立即瘦身的朋友，可以直接加微信，健康瘦身秘籍免费领~</strong>
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                        <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;position: relative;"><img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">
                <img src="$ewm" class="weixinpic other_weixinpic" alt="">
                                                        </section>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">我今天要公开的这个小配方 ，是经过多年科学验证的，&nbsp;<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">这个配方减肥非常有效，对年龄大、血脂高的人降压、减肚子也很管用。</span>这个配方是以排油为主，排油不是指拉肚子，是排出体内多余油脂油与毒素，行经通络，只要不是病理性的肥胖，都会有效。&nbsp;<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;"><strong style="box-sizing: border-box;">有的人当天就能瘦，有的人一周就减3-8斤，有的人一个月 瘦 20多斤，提供图片的苏妈妈一个半月瘦了有42斤，</strong></span>&nbsp;只要用我的这个配方，方法对，药材对，那就一定能瘦。
                                        <br style="box-sizing: border-box;">
                                    </p>
                                    <p style="white-space: normal;box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.976378" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaib2q3FNo1Ogj66bb2kabwEHA5lU5tpp2KBVVrFdPyCMTZe3WF8mJNftg/640?wx_fmt=jpeg" data-type="jpeg" data-w="381" style="vertical-align: middle; box-sizing: border-box; width: 381px !important; height: auto !important; visibility: visible !important;" _width="381px" class="" src="http://jessie-pan.com/640_006.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">▲胖了二十多年的<span style="color: rgb(34, 79, 140);box-sizing: border-box;"><strong style="box-sizing: border-box;">王女士30天时间</strong></span><span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">瘦了25斤，</strong></span>这么励志的故事必须赞一个
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="1.0997305" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibvrwicCj1zicoRIsKBOxK5kQicQ4iaXamUgibILmibaQicoxzicQXV1CJA6QMOQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="371" style="vertical-align: middle; box-sizing: border-box; width: 371px !important; height: auto !important; visibility: visible !important;" _width="371px" class="" src="http://jessie-pan.com/640_009.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">这个配方很简单，&nbsp;<span style="text-decoration: underline;color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">只有简单的一种晶体小颗粒</strong></span>&nbsp;
                                        <br style="box-sizing: border-box;">
                                    </p>
                                    <p style="white-space: normal;box-sizing: border-box;"><strong style="box-sizing: border-box;">主要功效：</strong></p>
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="text-decoration: underline;box-sizing: border-box;">润肠通便，解毒消脂，泄油排淤，降血脂，瘦身不反弹</span></p>
                                    
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;color: rgb(178, 42, 42);box-sizing: border-box;">
                                    
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: justify;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="color: rgb(34, 79, 140);box-sizing: border-box;"><strong style="box-sizing: border-box;">▲感谢山东胶州的用户小龚提供的照片，</strong></span>&nbsp;<span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">初见小龚时体重138斤</strong></span></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.6438127" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibT7HQKlzlzfJ51ena38ox6ia7k3w44wnLHBDUEEAuc9ZLguKYowLeBMg/640?wx_fmt=jpeg" data-type="jpeg" data-w="598" style="vertical-align: middle; box-sizing: border-box; width: 598px !important; height: auto !important; visibility: visible !important;" _width="598px" class="" src="http://jessie-pan.com/640_004.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">▲&nbsp;<strong style="box-sizing: border-box;">小龚按瘦身顾问的指导调理一个星期体重没变，</strong><strong style="box-sizing: border-box;">体型开始变化</strong>
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.8208556" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaib3B4nIWLaKWYYbwUAkficF2XOAzF289zKXl9Oe9y6sY8rph6ibgWUReFQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="374" style="vertical-align: middle; box-sizing: border-box; width: 374px !important; height: auto !important; visibility: visible !important;" _width="374px" class="" src="http://jessie-pan.com/640_021.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">▲随便吃照旧瘦，<span style="color: rgb(178, 42, 42);box-sizing: border-box;">一个半月后减重40斤</span></strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">医生讲究的是经验和悟性，别小看我这个简单的小配方，这是祖辈传下来的，农村里面一些爱俏的姑娘常来我这里要 配方，&nbsp;<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">有些小姑娘本身不胖，还想 瘦个十斤八斤的，也一样能减下来。用的较多的都是些刚生完小孩断奶后的女性，用这个 配方 瘦的比普通人要快，有的人一个月左右就把怀孕长的肉都减掉了。还有些管不住嘴，馋食的人，使用这个瘦身祖方，只要稍微适当的控制下饮食，</span>&nbsp;一个月就可以&nbsp;减掉<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;"><strong style="box-sizing: border-box;">10--25斤&nbsp;</strong></span>。那些喝水都胖的人，用这个配方20天左右，&nbsp;<span style="text-decoration: underline;color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">瘦8-20斤</strong></span>&nbsp;没一点问题。<strong style="box-sizing: border-box;">我</strong><strong style="box-sizing: border-box;">们瘦身顾问是医科大学毕业的，她的同学们也都用这个配方，大家可以和她交流。</strong>
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="margin: 10px 0%;box-sizing: border-box;">
                                <section style="display: inline-block;width: 100%;vertical-align: top;background-position: 0% 0%;background-repeat: repeat;background-size: 45.1765%;background-attachment: scroll;border-width: 0px;border-radius: 15px;border-style: none;border-color: rgb(62, 62, 62);background-image: url(https://be.0002t.cn/y8h54fd/yujrfgew/&quot;https://image.163ar.cn/wzjianfei/index_files/bg.png&quot;);box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="text-align: center;margin: 10px 0%;box-sizing: border-box;">
                                            <section style="display: inline-block;width: 93%;vertical-align: top;background-color: rgb(255, 255, 255);padding: 10px;border-width: 2px;border-radius: 10px;border-style: solid;border-color: rgba(255, 255, 255, 0);box-sizing: border-box;">
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                        <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.2436364" aaa="https://mmbiz.qpic.cn/mmbiz_gif/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaiblrtoUfBEYHl7rXHliaNibAoy1arf7T4JDicuhXw5QDibLKTcm7Yic7Un2hw/640?wx_fmt=gif" data-type="gif" data-w="550" style="vertical-align: middle; box-sizing: border-box; width: 550px !important; height: auto !important; visibility: visible !important;" _width="550px" class=" __bg_gif" src="http://jessie-pan.com/640.gif" data-order="1" data-fail="0"></section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: justify;font-size: 15px;line-height: 1.7;box-sizing: border-box;">
                                                            <p style="white-space: normal;box-sizing: border-box;">很多人使用瘦身顾问的方法，不仅瘦了，还不用节食，不用运动，减肥也不怕反弹了。</p>
                                                            <p style="white-space: normal;box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                            <p style="white-space: normal;box-sizing: border-box;"><strong style="letter-spacing: 0px;box-sizing: border-box;">想要立即瘦身的朋友，可以直接加微信，健康瘦身秘籍免费领~</strong>
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                        <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;position: relative;"><img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">
                                                        <img src="$ewm" class="weixinpic other_weixinpic" alt=""></section>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;padding: 20px; box-sizing: border-box; background-image: url(http://jessie-pan.com/bkg1.jpg); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: 100% 100%;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: justify;font-size: 15px;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">前些年有些姑娘们从老远的地方坐飞机坐火车来我这里，为的就是这个瘦身配方，</span>&nbsp;我都建议她们不用花这么高交通费，药材没多少钱，来回跑的钱是药材的几十倍。</p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="height: 1.4em;border-left: 1px solid rgb(158, 158, 158);margin-bottom: -0.9em;margin-left: 0.5em;box-sizing: border-box;"></section>
                                <section style="width: 2.5em;border-top: 1px solid rgb(158, 158, 158);box-sizing: border-box;"></section>
                                <section style="padding-right: 0.5em;padding-left: 0.5em;box-sizing: border-box;">
                                    <section style="padding: 10px;box-sizing: border-box;">
                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                            <section style="box-sizing: border-box;">
                                                <section style="text-align: justify;font-size: 15px;line-height: 1.7;box-sizing: border-box;">
                                                    <p style="white-space: normal;box-sizing: border-box;">有些外地的顾客就反应，担心去药店里买不到正规产品，让减肥的效果大打折扣。</p>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section style="width: 2.5em;margin-left: auto;box-sizing: border-box;">
                                    <section style="width: 2.5em;border-top: 1px solid rgb(158, 158, 158);box-sizing: border-box;"></section>
                                    <section style="height: 1.4em;border-left: 1px solid rgb(158, 158, 158);margin-top: -0.9em;margin-left: 2em;box-sizing: border-box;"></section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.8225806" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibdXpeeYu63yxrNG6tvaFTujSh5VibwS5JeCZLuIjV8pBwoJNLylrrqLw/640?wx_fmt=jpeg" data-type="jpeg" data-w="372" style="vertical-align: middle; box-sizing: border-box; width: 372px !important; height: auto !important; visibility: visible !important;" _width="372px" class="" src="http://jessie-pan.com/640_003.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="padding: 20px; box-sizing: border-box; background-image: url(http://jessie-pan.com/bkg1.jpg); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: 100% 100%;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;font-size: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">我们瘦身顾问刚从医科大学毕业，她就想出了更加先进科学的办法，把这个原材料配好以后，<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">通过原叶提取成颗粒，更容易被人体吸收，瘦得更快，放在透明的胶囊里面，用温开水冲服，一天一到两次就可以了，</span>&nbsp;大伙反应这个方法用起来方便，效果还非常好。这个方法，让全国各地更多想健康减肥的人受益。<span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">下面是瘦身顾问的微信号，</strong></span>她会耐心的解答大家提出的疑问。</p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;position: relative;"><img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">
                                <img src="$ewm" class="weixinpic other_weixinpic" alt=""></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;color: rgb(178, 42, 42);text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><strong style="box-sizing: border-box;">为了证明我家这个配方的效果及安全性，特地聘请中国 中医研究院张立 教授，对我们这个 配方进行研究分析。<br style="box-sizing: border-box;"></strong></p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.7690289" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaiboqAiaDfqPRfkYuicUW9ib5k55CMn60rLDDNzqhkKoSfxXannfOGyoQCtA/640?wx_fmt=jpeg" data-type="jpeg" data-w="381" style="vertical-align: middle; box-sizing: border-box; width: 381px !important; height: auto !important; visibility: visible !important;" _width="381px" class="" src="http://jessie-pan.com/640_014.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;padding: 20px; box-sizing: border-box; background-image: url(http://jessie-pan.com/bkg1.jpg); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: 100% 100%;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">瘦身顾问还把我的<span style="color: rgb(178, 42, 42);box-sizing: border-box;">“&nbsp;祖传&nbsp;” </span>偏方也进行了炮制，一些有<span style="color: rgb(178, 42, 42);box-sizing: border-box;">痛经、月经不调、月子病、小产、妇科</span>问题的人，不用千里迢迢跑到我这里，也能体会到医学的博大精深。<strong style="box-sizing: border-box;">瘦身顾问还开通了微信，大家可以加她的微信号</strong>
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;position: relative;"><img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">
                                <img src="$ewm" class="weixinpic other_weixinpic" alt=""></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;">可以和瘦身顾问交流下心得。她还开了一家瘦身咨询指导机构，&nbsp;<span style="color: rgb(178, 42, 42);text-decoration: underline;box-sizing: border-box;">将我这50多年来积累的 偏方，能传播出去，造福想要瘦身的人群，</span>&nbsp;如果你也对健康瘦身感兴趣，<span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">加我们瘦身顾问微信号&nbsp;，她一定能帮到你。</strong></span></p>
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;"><br style="box-sizing: border-box;"></strong></span></p>
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="text-decoration: underline;font-size: 16px;box-sizing: border-box;"><strong style="box-sizing: border-box;"><span style="color: rgb(178, 42, 42);box-sizing: border-box;">这个减肥方子非常适合下面这些人群</span></strong>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="1.4306569" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibcqoO0eX3CPnnWC1wcNVTVl3hfKM44KTGhQFmeUHsfruxjewnKkdxaQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="411" style="vertical-align: middle; box-sizing: border-box; width: 411px !important; height: auto !important; visibility: visible !important;" _width="411px" class="" src="http://jessie-pan.com/640_023.jpg" data-fail="0"></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="background-color: rgb(255, 255, 255);border-width: 0px;border-radius: 5px;border-style: solid;border-color: rgb(69, 140, 130);box-shadow: rgb(153, 166, 171) 0px 0px 3px;padding: 10px;box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="font-size: 15px;text-align: justify;line-height: 1.7;padding-right: 15px;padding-left: 15px;box-sizing: border-box;">
                                    <p style="white-space: normal;box-sizing: border-box;"><span style="color: rgb(178, 42, 42);box-sizing: border-box;"><strong style="box-sizing: border-box;">用这个减肥方子的注意事项：</strong></span></p>
                                    <p style="white-space: normal;box-sizing: border-box;">1、饭前饭后吃都可以，这个配方是泄油排瘀，无需控制饮食。</p>
                                    <p style="white-space: normal;box-sizing: border-box;">2、如果是想保持身材，一天一次即可。减肥成功后不可暴饮暴食。</p>
                                    <p style="white-space: normal;box-sizing: border-box;">3、中老年人一天一次两次均可</p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;position: relative;">
                                <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.5079114" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibrQcEbAZ0NS05GBBhs5ORveygcolvdUyJUzwlTDa10iaSYoxXtQKdXoQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="632" style="vertical-align: middle; box-sizing: border-box; width: 632px !important; height: auto !important; visibility: visible !important;" _width="632px" class="" src="http://jessie-pan.com/640_026.jpg" data-fail="0">
                                <img src="$ewm" class="weixinpic other_weixinpic" alt=""></section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;">
                                    <p style="box-sizing: border-box;">
                                        <br style="box-sizing: border-box;">
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="box-sizing: border-box;">
                                <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="box-sizing: border-box;">
                                            <section style="font-size: 15px;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                <p style="box-sizing: border-box;">阅读 34695</p>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="box-sizing: border-box;">
                                            <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="color: rgb(62, 62, 62);box-sizing: border-box;">560</span></p>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                            <section style="text-align: center;box-sizing: border-box;">
                                <section style="display: inline-block;width: 100%;vertical-align: top;background-color: rgba(160, 160, 160, 0.22);border-width: 0px;border-radius: 0px;border-style: solid;border-color: rgb(62, 62, 62);box-sizing: border-box;">
                                    <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                        <section style="margin: 10px 0%;box-sizing: border-box;">
                                            <section style="display: inline-block;width: 100%;vertical-align: top;box-sizing: border-box;">
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: middle;width: 30%;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                                    <section style="border-top: 1px dotted rgb(160, 160, 160);box-sizing: border-box;"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: middle;width: 20%;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="color: rgba(62, 62, 62, 0.67);font-size: 15px;box-sizing: border-box;">
                                                                        <p style="box-sizing: border-box;">精彩评论</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: middle;width: 30%;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                                    <section style="border-top: 1px dotted rgb(160, 160, 160);box-sizing: border-box;"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="0.9056604" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibf41RxGicUwcziaGpswtXCboU8icM0tUkT5c6shsrRic7ibYw5KngRJqQibMQ/640?wx_fmt=png" data-type="png" data-w="106" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_002.png" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">岁岁月</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">97</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">我是朋友介绍的，加了瘦身顾问的微信，她很专业一对一的帮我分析怎么减肥，现在我的肚子赘肉明显瘦下去了，不再突出来，穿衣服好看而且皮肤也变好了！所以我一定要在这里留言，表示对她的感谢！最后告诉大家：减肥必须要坚持才能成功哦！</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="0.8013857" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaib9TiaPM1oTKEUruSTX52uBFfcNraP89qwsjJd7t0XxPO5iabWuiboDXFhw/640?wx_fmt=png" data-type="png" data-w="433" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_010.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">李雪莲</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">65</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">我也是用这个配方瘦下来的，当初选择的原因就是没有副作用，见效快，不反弹，健康安全！</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="1.1597938" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibzEO0wfW6meuLBdzJiad4PGl6uANJtY7hicHfRcTB0jqk2luQ6Y4BANhA/640?wx_fmt=jpeg" data-type="jpeg" data-w="388" style="vertical-align: middle; box-sizing: border-box; width: 388px !important; height: auto !important; visibility: visible !important;" _width="388px" class="" src="http://jessie-pan.com/640_013.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br>
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="1" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibZ4jednGdj7Hib58CLYK3nBySowytHNCVhjFKtGTxD4oic9EKU3PFRwgg/640?wx_fmt=jpeg" data-type="jpeg" data-w="200" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_016.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">小女子</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">43</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">半个月瘦了13斤，腹部和腰围都减了4公分。对老师的配方，我很有信心！期待后续效果！</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.8685969" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibdY0CMH6n7kBzIvNcTQOVA89Hw5ZKdhVFTFKoJVwYXzAicTWtm5qTzrw/640?wx_fmt=jpeg" data-type="jpeg" data-w="449" style="vertical-align: middle; box-sizing: border-box; width: 449px !important; height: auto !important; visibility: visible !important;" _width="449px" class="" src="http://jessie-pan.com/640_018.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="1" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibNe3oxdh8rlxcWFMtWL4ibIAE1CNU3xrcEMMSvEDrRxnLpBhfpfMXFSA/640?wx_fmt=jpeg" data-type="jpeg" data-w="200" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_002.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">讲不出再见</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">33</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">减肥多年，用过无数产品，在绝望中遇见了你，让我重新对减肥有了信心，感恩！</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;color: rgb(255, 255, 255);font-size: 14px;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="0.9370079" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibQibia3u9vsgJBnEOWibh1VzmoRpUL3Y2qlQB3jeGhJhLw4IBtZticVCWsg/640?wx_fmt=png" data-type="png" data-w="127" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_004.png" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">陈晨</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">29</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">我是典型的吃货，之前也试过不少的减肥方法，后来听朋友介绍的排油减肥法，让我真正瘦了一圈，没节食没运动，照样瘦了30斤！！！对我来说非常满意。</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.722408" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibiaUy8Mn7YHTT2SetRvKAouibrB2Zsd4Xw0HAvHVZyq1eojWCXL5gu0rQ/640?wx_fmt=png" data-type="png" data-w="299" style="vertical-align: middle; box-sizing: border-box; width: 299px !important; height: auto !important; visibility: visible !important;" _width="299px" class="" src="http://jessie-pan.com/640_007.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: justify;color: rgb(255, 255, 255);font-size: 14px;line-height: 1.8;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <p style="white-space: normal;box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="0.9758065" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaib9icA2C9lmo5OJb95g2ZxvkT15MpXA6HUhlxeKDQJxj6j7YKCfFTibI0w/640?wx_fmt=png" data-type="png" data-w="124" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640.png" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">控控</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">34</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">通过老师的精心指导，成功瘦下来了，非常感谢老师。有问题的推荐大家点击下方添加老师咨询：</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="box-sizing: border-box;">
                                                                        <p style="box-sizing: border-box;">
                                                                            <br style="box-sizing: border-box;">
                                                                        </p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="margin-top: 10px;margin-bottom: 10px;text-align: center;box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: middle;padding-right: 6px;box-sizing: border-box;">
                                                                        <section style="background-color: rgb(212, 36, 38);padding-right: 6px;padding-left: 6px;font-size: 15px;color: rgb(255, 255, 255);box-sizing: border-box;">
                                                                            <p style="box-sizing: border-box;"><strong style="box-sizing: border-box;">长按下方二维码识别添加， 查看更多真实案例</strong></p>
                                                                        </section>
                                                                        <section style="margin-top: -9px;margin-right: -6px;margin-left: auto;border-right: 2px solid transparent;border-bottom: 2px solid transparent;height: 16px;width: 16px;border-top-color: transparent;border-left-color: transparent;box-sizing: border-box;"></section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="text-align: center;margin-right: 0%;margin-left: 0%;box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 80%;box-sizing: border-box;"><img data-ratio="1" aaa="$ewm" data-type="gif" data-w="258" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="weixinpic" src="$ewm" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;color: rgb(255, 255, 255);font-size: 15px;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="1" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibQMrAkzqrfha5zliaTrxEgyeT3KD8jNibeGarfF8q8iaDIJiaasiaf5PLb5Q/640?wx_fmt=jpeg" data-type="jpeg" data-w="200" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_015.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">宝妈妈</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">57</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">为啥我加上还没通过……</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;color: rgb(255, 255, 255);font-size: 15px;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br style="box-sizing: border-box;">
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="1" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaiberbSh5OYVoeNTqK22feTCkUiaxDDXRWq5icCwde3tntuuk3lEExTy4ew/640?wx_fmt=jpeg" data-type="jpeg" data-w="200" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_020.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">心尚温存</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">22</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">试过好多方法了，都不管用，纠结，算了先加上试试吧</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="box-sizing: border-box;">
                                                        <section style="text-align: left;box-sizing: border-box;">
                                                            <p style="box-sizing: border-box;">
                                                                <br>
                                                            </p>
                                                        </section>
                                                    </section>
                                                </section>
                                                <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                    <section style="margin-top: 0.5em;margin-bottom: 0.5em;box-sizing: border-box;">
                                                        <section style="display: inline-block;vertical-align: top;width: 20%;box-sizing: border-box;float: left;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;width: 60%;box-sizing: border-box;"><img data-ratio="1" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibSmjdnV0g956GlicExThy9JuN1v7zDCc961RMyoRdibQUjMEtLBEItAwQ/640?wx_fmt=jpeg" data-type="jpeg" data-w="200" style="vertical-align: middle; box-sizing: border-box; width: 100% !important; height: auto !important; visibility: visible !important;" _width="100%" class="" src="http://jessie-pan.com/640_011.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                        <section style="display: inline-block;vertical-align: top;width: 80%;text-align: left;padding-right: 10px;padding-left: 10px;box-sizing: border-box;">
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;">静月</p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                    <section style="display: inline-block;vertical-align: top;width: 50%;box-sizing: border-box;float: right;">
                                                                        <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                            <section style="box-sizing: border-box;">
                                                                                <section style="text-align: right;font-size: 15px;color: rgb(160, 160, 160);box-sizing: border-box;">
                                                                                    <p style="box-sizing: border-box;"><img data-ratio="0.6896552" aaa="https://mmbiz.qpic.cn/mmbiz_png/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibl7gygg7lSicaW6eWK4icIRRPwfHK5j20BlBaLBEsW3rubITgojAuoVlA/640?wx_fmt=png" data-type="png" data-w="29" style="box-sizing: border-box; width: 29px !important; height: auto !important; visibility: visible !important;" _width="29px" src="http://jessie-pan.com/640_003.png" class="" data-fail="0" width="29" height="20"><span style="letter-spacing: 0px;box-sizing: border-box;">19</span></p>
                                                                                </section>
                                                                            </section>
                                                                        </section>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="box-sizing: border-box;">
                                                                    <section style="text-align: justify;font-size: 15px;line-height: 1.5;box-sizing: border-box;">
                                                                        <p style="white-space: normal;box-sizing: border-box;">我也是产后一直没瘦下来，三餐都不定时，体重不停的在上升。也是通过朋友介绍找到老师帮我成功瘦身的！现在又回到了从前美美的时期。</p>
                                                                    </section>
                                                                </section>
                                                            </section>
                                                            <section class="" style="box-sizing: border-box;" powered-by="xiumi.us">
                                                                <section style="text-align: center;margin-top: 10px;margin-bottom: 10px;box-sizing: border-box;">
                                                                    <section style="max-width: 100%;vertical-align: middle;display: inline-block;box-sizing: border-box;"><img data-ratio="0.7933579" aaa="https://mmbiz.qpic.cn/mmbiz_jpg/C5ML3Bq4siaCgiaL2RQIlRicvZ89RcpQxiaibbuJnv6SM7AaZVnWmicwmKdIG3ADdmH0mG2FhP5rg0FePAibb0bRMGoUg/640?wx_fmt=jpeg" data-type="jpeg" data-w="271" style="vertical-align: middle; box-sizing: border-box; width: 271px !important; height: auto !important; visibility: visible !important;" _width="271px" class="" src="http://jessie-pan.com/640_005.jpg" data-fail="0"></section>
                                                                </section>
                                                            </section>
                                                        </section>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p>
                        <br>
                    </p>
                </div>
            
            
                
            </div>
        
        </div>
    </div>


    </div>
    </div>

    <div class="bottom_btn" onclick="showLayer()">
        <div class="bottom_box">
            <img class="wechat_img" src="http://jessie-pan.com/wechat.svg" alt="">
            点击添加秒变苗条
        </div>
    </div>

    <div class="alert_box">
        <div class="fixed_box">
            <div>
                <p class="fixed_title">教你减肥良方，做苗条女人!</p>
                <p class="fixed_open">打开微信扫一扫下方二维码</p>
                <img src="$ewm" class="weixinpic fix_weixinpic" alt="">
                <p class="fixed_add">或者添加减肥老师微信号: <span class="weixin">
                    
                </span></p>
            </div>
        </div>
    </div>
    <div class="close_alert" onclick="closeLayer()"></div>

    <script>
        function showLayer () {
            $(".alert_box").fadeIn();
            $(".close_alert").show();
        }
        function closeLayer () {
            $(".alert_box").fadeOut();
            $(".close_alert").hide();
        }

    </script>
    <style>
        .close_alert{
            position: fixed;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            z-index: 2;
            display: none;
        }
        .fixed_open{
            padding: 3px 10px;
            display: inline-block;
            border-radius: 25px;
            background-color: #CC376D;
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
            box-shadow: -2px 3px 38px -7px rgba(0,0,0,0.44);
            -webkit-box-shadow: -2px 3px 38px -7px rgba(0,0,0,0.44);
            animation: twinkling 4s infinite ease-in-out;
            -webkit-animation: twinkling 4s infinite ease-in-out;
        }
        .fix_weixinpic{
            display: block;
            width: 60%;
            margin: auto;
        }
        .fixed_add{
            font-weight: bold;
        }
        .fixed_add>.weixin{
            color: red;
            font-weight: bold;
        }
        @-webkit-keyframes twinkling{
            0% {
                opacity: 0.3;
            }
                25% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
                75% {
                opacity: 1;
            }
                100%{
                opacity: 0.3;
                }
            }

            @keyframes twinkling{
            0% {
                opacity: 0.3;
            }
                25% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
                75% {
                opacity: 1;
            }
                100%{
                opacity: 0.3;
                }
            }
        .fixed_title{
            font-size: 16px;
            font-weight: bold;
            border-bottom: #F00 dotted 3px;
            display: inline-block;
        }
        .alert_box{
            /*width: 100%;*/
            min-width: 320px;
            position: fixed;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            z-index: 3;
            display: none;
        }
        .fixed_box{
            width: 100%;
            text-align: center;
            padding: 10px 0px; 
            background-image: linear-gradient(180deg, #D1F386 0%, #FFC1C1 100%);
            border-radius: 5px;
        }
        .bottom_btn{
            position: fixed;
            width: 100%;
            bottom: 0px;
            left: 0px;
        }
        .bottom_box{
            margin: auto;
            max-width: 640px;
            background-image: linear-gradient(37deg, #FF8181 0%, #F97718 100%);
            display: flex;
            height: 60px;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #fff;
            font-weight: bold;
        }
        .wechat_img{
            width: 40px;
        }
    </style>
    <div style="display: none;">
        $cnzz
    </div>
</body>
<script src="js/EasyLazyload.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    //懒加载
    lazyLoadInit({
            coverColor: "white",
            coverDiv: "",
            offsetBottom: 500,
            offsetTopm: 0,
            showTime: 500,
            onLoadBackEnd: function(i, e) {
                console.log("onLoadBackEnd:" + i);
            },
            onLoadBackStart: function(i, e) {
                console.log("onLoadBackStart:" + i);
            }
        });
//分享信息
    var thiswstitle = "$title";
    var thiswsdesc = "$desc";
    var thiswsimg = "$pic";
</script>
<script src="js/wxshare.js"></script>

</html>
INDEX;

function create_folders($dir){ 
    return is_dir($dir) or (create_folders(dirname($dir)) and mkdir($dir, 0777)); 
}


create_folders($folder);
$i = 0;
while ($i < 3){
    switch ($i){
        case 1:
            create_folders($folder.'/js');
            break;
        case 2:
            create_folders($folder.'/css');
            break;
    }
    $i ++;
}


// echo $css;
$host = '127.0.0.1';
$user = 'root';
$passwd = 'hy815923';
$database = 'articleOne';
// $sql = "insert into fileTable (Filename, Content) values ('" . $filename . "', '" . $css . "')";
$sql = "select * from fileTable";
// echo $sql;

$con = new mysqli($host, $user, $passwd, $database);
if($con){
    echo "数据库连接成功<br>";
}else{
    echo "数据库连接失败<br>";
}
// mysqli_select_db($con, 'articleOne');
$res = $con->query($sql);
if($res){
    echo "查询成功1<br>";
    if($res->num_rows>0){
        while($row = $res->fetch_array()){
            if($row[0] == 'EasyLazyLoad.js'){
                $ell = fopen($folder . '/js' .'/EasyLazyLoad.js','w');
                fwrite($ell, $row[1]);
            }elseif($row[0] == 'index.css'){
                $incss = fopen($folder . '/css' .'/index.css','w');
                fwrite($incss, $row[1]);
            }elseif($row[0] == 'main.js'){
                $mjs = fopen($folder . '/js' .'/main.js','w');
                fwrite($mjs, $row[1]);
            }elseif($row[0] == 'uuid.php'){
                $uphp = fopen($folder . '/js' .'/uuid.php','w');
                fwrite($uphp, $row[1]);
            }else{
                $wxs = fopen($folder . '/js' .'/wxshare.js','w');
                fwrite($wxs, $row[1]);
            }
        }
    }else{
        echo "查询失败";
    }
}
$findex = fopen($folder . '/index.html','w');
fwrite($findex, $index);
// echo $colums;
// $retval = mysqli_query($con, $sql);
// if(!$retval){
//     dir('无法插入数据库：'. mysqli_error($con));
// }
// echo '数据库插入成功！';

$con->close();
    





