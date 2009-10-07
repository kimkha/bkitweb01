- views/event.php
Các kiểu viewtype:
+ short : View để liệt kê nội dung trích dẫn bài viết tại trang chủ
+ full : Xem chi tiết từng bài viết
+ title: Hiển thị tiêu đề bài viết

- views/user.php

Nếu object =NULL chuyển đến view Register
còn không viewtype
+ profile
+ userprofileinfo
+ confirm


- views/sidebar.php
Nó sẽ nhét trạng thái user login vào hàm view
- vars['viewtype] : level user đăng nhập : 0 => Không có, 1 =>User, 777=> admin
- vars[''object] : user đang đăng nhập - nếu không có là null