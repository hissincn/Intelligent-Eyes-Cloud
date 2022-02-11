function jslogout() { alert("已登出"); window.location.href = './api.php?do=logout'; }
function jsChangedUP() { alert("用户名密码已修改，请重新登录"); window.location.href = './api.php?do=logout'; }