<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>口袋高校助手</title>
    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/0.4.3/weui.min.css"/>
  </head>
  <body>
    <div class="pages">
      <div class="container" id="container">
        <div class="msg">
          <div class="weui_msg">
           <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
            <div class="weui_text_area">
              <h2 class="weui_msg_title">等待审核</h2>
              <p class="weui_msg_desc">审核成功即可在页面中查看</p>
            </div>
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="javascript:WeixinJSBridge.call('closeWindow');" class="weui_btn weui_btn_primary">确定关闭窗口</a>
                </p>
            </div>
            <div class="weui_extra_area">
                <small>@版权归口袋高校所有</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>