;
(function(win) {
    var index = {
        init: function() {
            this.bindEvent();
            var timestamp = new Date().getTime(),
                data = {
                    from: "weixin",
                    cert: "bohu-tech-weixinclient",
                    label: "query-device",
                    content: {
                        uid: ""
                    }
                };
            $.ajax({
                    method: "GET",
                    url: "http://121.42.173.133/bohu/php/and_check_controler.php",
                    data: JSON.stringify(data),
                    timestamp: timestamp
                })
                .done(function(msg) {
                    alert(msg);
                });
        },
        bindEvent: function() {
            $(".plus")[0].onclick = function() {
                wx.ready(function() {
                    wx.chooseImage({
                        count: 4, // 默认9
                        sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
                        sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
                        success: function(res) {
                            var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                        }
                    });
                    for (var i = localIds.length - 1; i >= 0; i--) {
                        wx.uploadImage({
                            localId: localIds[i], // 需要上传的图片的本地ID，由chooseImage接口获得
                            isShowProgressTips: 1, // 默认为1，显示进度提示
                            success: function(res) {
                                var serverId = res.serverId; // 返回图片的服务器端ID
                            }
                        });
                        wx.downloadImage({
                            serverId: serverId, // 需要下载的图片的服务器端ID，由uploadImage接口获得
                            isShowProgressTips: 1, // 默认为1，显示进度提示
                            success: function(res) {
                                var localId = res.localId; // 返回图片下载后的本地ID
                            }
                        });
                    }
                });
            }
        }
    }
    index.init();
})(window);
