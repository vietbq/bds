/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var city_arr = new Array("Hà Nội", "TP HCM", "Hải Phòng", "An Giang", "Bà Rịa - Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định",
//        "Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cao Bằng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang",
//        "Hà Nam", "Hà Tĩnh", "Hải Dương", "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang", "Kon Tum", "Lai Châu", "Lâm Đồng", "Lạng Sơn",
//        "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh",
//        "Quảng Ninh", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế", "Tiền Giang", "Trà Vinh",
//        "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái", "Phú Yên", "Cần Thơ", "Đà Nẵng");
//
//// States
//var s_a = new Array();
//s_a[0] = "";
//
//// Hà Nội
//s_a[1] = "Quận Ba Đình|Quận Hoàn Kiếm|Quận Tây Hồ|Quận Long Biên|Quận Cầu Giấy|Quận Đống Đa|Quận Hai Bà Trưng|Quận Hoàng Mai|Quận Thanh Xuân|Quận Hà Đông|Huyện Nam Từ Liêm|Huyện Bắc Từ Liêm|Thành Phố Sơn Tây|Huyện Ba Vì|Huyện Chương Mỹ|Huyện Đan Phượng|Huyện Đông Anh|Huyện Gia Lâm|Huyện Hoài Đức|Huyện Mê Linh|Huyện Mỹ Đức|Huyện Phú Xuyên|Huyện Phúc Thọ|Huyện Quốc Oai|Huyện Sóc Sơn|Huyện Thạch Thất|Huyện Thanh Oai|Huyện Thanh Trì|Huyện Thường Tín|Huyện Ứng Hòa";
//
//// TP HCM
//s_a[2] = "Quận 1|Quận 2|Quận 3|Quận 4|Quận 5|Quận 6|Quận 7|Quận 8|Quận 9|Quận 10|Quận 11|Quận 12|Quận Bình Tân|Quận Bình Thạnh|Quận Gò Vấp|Quận Phú Nhuận|Quận Tân Bình|Quận Tân Phú|Quận Thủ Đức|Huyện Bình Chánh|Huyện Cần Giờ|Huyện Củ Chi|Huyện Hóc Môn|Huyện Nhà Bè";
//
//// Hải Phòng
//s_a[3] = "Quận Dương Kinh|Quận Đồ Sơn|Quận Hải An|Quận Kiến An|Quận Hồng Bàng|Quận Ngô Quyền|Quận Lê Chân|Huyện An Dương|Huyện An Lão|Huyện Bạch Long Vĩ|Huyện Cát Hải|Huyện Kiến Thụy|Huyện Tiên Lãng|Huyện Vĩnh Bảo|Huyện Thủy Nguyên";
//
//// An Giang
//s_a[4] = "Thị xã Châu Đốc|Huyện An Phú|Huyện Tân Châu|Huyện Phú Tân|Huyện Tịnh Biên|Huyện Tri Tôn|Huyện Châu Phú|Huyện Chợ Mới|Huyện Châu Thành|Huyện Thoại Sơn";
//
//// Bà Rịa - Vũng Tàu
//s_a[5] = "Thành phố Vũng Tàu|Thị xã Bà Rịa|Huyện Xuyên Mộc|Huyện Long Điền|Huyện Côn Đảo|Huyện Tân Thành|Huyện Châu Đức|Huyện Đất Đỏ";
//
//// Bắc Giang
//s_a[6] = "Thành phố Bắc Giang|Huyện Yên Thế|Huyện Lục Ngạn|Huyện Sơn Động|Huyện Lục Nam|Huyện Tân Yên|Huyện Hiệp Hoà|Huyện Lạng Giang|Huyện Việt Yên|Huyện Yên Dũng";
//
//// Bắc Kạn
//s_a[7] = "Thị xã Bắc Kạn|Huyện Chợ Đồn|Huyện Bạch Thông|Huyện Na Rì|Huyện Ngân Sơn|Huyện Ba Bể|Huyện Chợ Mới|Huyện Pác Nặm";
//
//// Bạc Liêu
//s_a[8] = "Thị xã Bạc Liêu|Huyện Vĩnh Lợi|Huyện Hồng Dân|Huyện Giá Rai|Huyện Phước Long|Huyện Đông Hải|Huyện Hoà Bình";
//
////Bắc Ninh
//s_a[9] = "Thành phố Bắc Ninh|Huyện Yên Phong|Huyện Quế Võ.|Huyện Tiên Du|Huyện Từ Sơn|Huyện Thuận Thành|Huyện Gia Bình|Huyện Lương Tài";
//
//// Bến Tre
//s_a[10] = "Thị xã Bến Tre|Huyện Châu Thành|Huyện Chợ Lách|Huyện Mỏ Cày|Huyện Giồng Trôm|Huyện Bình Đại|Huyện Ba Tri|Huyện Thạnh Phú";
//
//// Bình Định
//s_a[11] = "Thành phố Quy Nhơn|Huyện An Lão|Huyện Hoài Ân|Huyện Hoài Nhơn|Huyện Phù Mỹ|Huyện Phù Cát|Huyện Vĩnh Thạnh|Huyện Tây Sơn|Huyện Vân Canh|Huyện An Nhơn|Huyện Tuy Phước";
//
////Bình Dương
//s_a[12] = "Thị xã Thủ Dầu Một|Huyện Bến Cát|Huyện Tân Uyên|Huyện Thuận An|Huyện Dĩ An|Huyện Phú Giáo|Huyện Dầu Tiếng";
//
////Bình Phước
//s_a[13] = "Thị xã Đồng Xoài|Huyện Đồng Phú|Huyện Chơn Thành|Huyện Bình Long|Huyện Lộc Ninh|Huyện Bù Đốp|Huyện Phước Long|Huyện Bù Đăng";
//
//// Bình Thuận
//s_a[14] = "Thành phố Phan Thiết|Huyện Tuy Phong|Huyện Bắc Bình|Huyện Hàm Thuận Bắc|Huyện Hàm Thuận Nam|Huyện Hàm Tân|Huyện Đức Linh|Huyện Tánh Linh|Huyện đảo Phú Quý|Thị xã LaGi";
//
//// Cà Mau
//s_a[15] = "Thành phố Cà Mau|Huyện Thới Bình|Huyện U Minh|Huyện Trần Văn Thời|Huyện Cái Nước|Huyện Đầm Dơi|Huyện Ngọc Hiển|Huyện Năm Căn|Huyện Phú Tân";
//
//// Cao Bằng
//s_a[16] = "Thị xã Cao Bằng|Huyện Bảo Lạc|Huyện Thông Nông|Huyện Hà Quảng|Huyện Trà Lĩnh|Huyện Trùng Khánh|Huyện Nguyên Bình|Huyện Hoà An|Huyện Quảng Uyên|Huyện Thạch An|Huyện Hạ Lang|Huyện Bảo Lâm|Huyện Phục Hoà";
//
//// Đắk Lắk
//s_a[17] = "Thành phố Buôn Ma Thuột|Huyện Ea H Leo|Huyện Krông Buk|Huyện Krông Năng|Huyện Ea Súp|Huyện Cư M gar|Huyện Krông Pắc|Huyện Ea Kar|Huyện M`Đrăk|Huyện Krông Ana|Huyện Krông Bông|Huyện Lăk|Huyện Buôn Đôn|Huyện Cư Kuin";
//
//// Đắk Nông
//s_a[18] = "Thị xã Gia Nghĩa|Huyện Dăk RLấp|Huyện Dăk Mil|Huyện Cư Jút|Huyện Dăk Song|Huyện Krông Nô|Huyện Dăk GLong|Huyện Tuy Đức";
//
//// Điện Biên
//s_a[19] = "TP. Điện Biên Phủ|Thị xã Mường Lay|Huyện Điện Biên|Huyện Tuần Giáo|Huyện Mường Chà|Huyện Tủa Chùa|Huyện Điện Biên Đông|Huyện Mường Nhé|Huyện Mường Ảng";
//
////Đồng Nai
//s_a[20] = "Thành phố Biên Hoà|Huyện Vĩnh Cửu|Huyện Tân Phú|Huyện Định Quán|Huyện Thống Nhất|Thị xã Long Khánh|Huyện Xuân Lộc|Huyện Long Thành|Huyện Nhơn Trạch|Huyện Trảng Bom|Huyện Cẩm Mỹ";
//
//// Đồng Tháp
//s_a[21] = "Thành phố Cao Lãnh|Thị xã Sa Đéc|Huyện Tân Hồng|Huyện Hồng Ngự|Huyện Tam Nông|Huyện Thanh Bình|Huyện Cao Lãnh|Huyện Lấp Vò|Huyện Tháp Mười|Huyện Lai Vung|Huyện Châu Thành";
//
//// Gia Lai
//s_a[22] = "Thành phố Pleiku|Huyện Chư Păh|Huyện Mang Yang|Huyện Kbang|Thị xã An Khê|Huyện Kông Chro|Huyện Đức Cơ|Huyện Chưprông|Huyện Chư Sê|Huyện Ayunpa|Huyện Krông Pa|Huyện Ia Grai|Huyện Đăk Đoa|Huyện Ia Pa|Huyện Đăk Pơ|Huyện Phú Thiện";
//
//// Hà Giang
//s_a[23] = "Thành phố Hà Giang|Huyện Đồng Văn|Huyện Mèo Vạc|Huyện Yên Minh|Huyện Quản Bạ|Huyện Vị Xuyên|Huyện Bắc Mê|Huyện Hoàng Su Phì|Huyện Xín Mần|Huyện Bắc Quang|Huyện Quang Bình";
//
//// Hà Nam
//s_a[24] = "Thị xã Phủ Lý|Huyện Duy Tiên|Huyện Kim Bảng|Huyện Lý Nhân|Huỵện Thanh Liêm|Huyện Bình Lục";
//
//// Hà Tĩnh
//s_a[25] = "Thành phố Hà Tĩnh|Thị xã Hồng Lĩnh|Huyện Hương Sơn|Huyện Đức Thọ|Huyện Nghi Xuân|Huyện Can Lộc|Huyện Hương Khê|Huyện Thạch Hà|Huyện Cẩm Xuyên|Huyện Kỳ Anh|Huyện Vũ Quang|Huyện Lộc Hà";
//
//// Hải Dương
//s_a[26] = "Thành phố Hải Dương|Huyện Chí Linh|Huyện Nam Sách|Huyện Kinh Môn|Huyện Gia Lộc|Huyện Tứ Kỳ|Huyện Thanh Miện|Huyện Ninh Giang|Huyện Cẩm Giàng|Huyện Thanh Hà|Huyện Kim Thành|Huyện Bình Giang";
//
//// Hậu Giang
//s_a[27] = "Thành phố Vị Thanh|Huyện Vị Thuỷ|Huyện Long Mỹ|Huyện Phụng Hiệp|Huyện Châu Thành|Huyện Châu Thành A|Thị xã Ngã Bảy";
//
//// Hoà Bình
//s_a[28] = "Thành phố Hoà Bình|Huyện Đà Bắc|Huyện Mai Châu|Huyện Tân Lạc|Huyện Lạc Sơn|Huyện Kỳ Sơn|Huyện Lưương Sơn|Huyện Kim Bôi|Huyện Lạc Thuỷ|Huyện Yên Thuỷ|Huyện Cao Phong";
//
//// Hưng Yên
//s_a[29] = "Thành Phố Hưng Yên|Huyện Kim Động|Huyện Ân Thi|Huyện Khoái Châu|Huyện Yên Mỹ|Huyện Tiên Lữ|Huyện Phù Cừ|Huyện Mỹ Hào|Huyện Văn Lâm|Huyện Văn Giang";
//
//// Khánh Hòa
//s_a[30] = "Thành Phố Nha Trang|Thành Phố Cam Ranh|Huyện Khánh Sơn|Huyện Khánh Vĩnh|Huyện Cam Lâm|Huyện Diên Khánh|Huyện Ninh Hòa|Huyện Trường Sa|Huyện Vạn Ninh";
//
//// Kiên Giang
//s_a[31] = "Thành Phố Rạch Giá|Thị Xã Hà Tiên|Huyện An Biên|Huyện An Minh|Huyện Châu Thành|Huyện Giồng Riềng|Huyện Gò Quao|Huyện Hòn Đất|Huyện Kiên Hải|Huyện Kiên Lương|Huyện Phú Quốc|Huyện Tân Hiệp|Huyện U Minh Thượng|Huyện Vĩnh Thuận|Huyện Giang Thành";
//
////Kon Tum
//s_a[32] = "Thành Phố Kon Tum|Huyện Đak Hà|Huyện Đak Tô|Huyện Ngọc Hồi|Huyện Đak Glêi|Huyện Sa Thầy|Huyện Kon Rẫy|Huyện Kon Plong|Huyện Tu Mơ Rông";
//
//// Lai Châu
//s_a[33] = "Thị Xã Lai Châu|Huyện Tam Đường|Huyện Than Uyên|Huyện Phong Thổ|Huyện Sìn Hồ|Huyện Mường Tè|Huyện Tân Uyên";
//
////Lâm Đồng
//s_a[34] = "Thành Phố Đà Lạt|Thành Phố Bảo Lộc|Huyện Bảo Lâm|Huyện Cát Tiên|Huyện Di Linh|Huyện Đam Rông|Huyện Đạ Huoai|Huyện Đạ Tẻh|Huyện Đơn Dương|Huyện Lạc Dương|Huyện Lâm Hà|Huyện Đức Trọng";
//
//// Lạng Sơn
//s_a[35] = "Thành Phố Lạng Sơn|Huyện Tràng Định|Huyện Văn Lãng|Huyện Hữu Lũng|Huyện Cao Lộc|Huyện Lộc Bình|Huyện Đình Lập|Huyện Chi Lăng|Huyện Văn Quan|Huyện Bình Gia|Huyện Bắc Sơn";
//
////Lào Cai
//s_a[36] = "Thành Phố Lào Cai|Huyện Bảo Thắng|Huyện Bắc Hà|Huyện Bảo Yên|Huyện Bát Xát|Huyện Mường Khương|Huyện Sa Pa|Huyện Si Ma Cai|Huyện Văn Bàn";
//
//// Long An
//s_a[37] = "Thành Phố Tân An|Huyện Cần Giuộc|Huyện Châu Thành|Huyện Thủ Thừa|Huyện Bến Lức|Huyện Thạnh Hoá|Huyện Cần Đước|Huyện Tân Trụ|Huyện Đức Hoà|Huyện Tân Hưng|Huyện Vĩnh Hưng|Huyện Tân Thạnh|Huyện Đức Huệ|Huyện Mộc Hóa";
//
//// Nam Định
//s_a[38] = "Thành Phố Nam Định|Huyện Xuân Trường|Huyện Giao Thủy|Huyện Hải Hậu|Huyện Nghĩa Hưng|Huyện Nam Trực|Huyện Trực Ninh|Huyện Vụ Bản|Huyện Ý Yên|Huyện Mỹ Lộc";
//
//// Nghệ An
//s_a[39] = "Thành Phố Vinh|Thị Xã Cửa Lò|Thị Xã Thái Hòa|Huyện Anh Sơn|Huyện Con Cuông|Huyện Diễn Châu|Huyện Đô Lương|Huyện Hưng Nguyên|Huyện Quỳ Châu|Huyện Kỳ Sơn|Huyện Nam Đàn|Huyện Nghi Lộc|Huyện Nghĩa Đàn|Huyện Quế Phong|Huyện Quỳ Hợp|Huyện Quỳnh Lưu|Huyện Tân Kỳ|Huyện Tương Dương|Huyện Thành Chương|Huyện Yên Thành";
//
//// Ninh Bình
//s_a[40] = "Thành Phố Ninh Bình|Thị Xã Tam Điệp|Huyện Hoa Lư|Huyện Gia Viễn|Huyện Nho Quan|Huyện Yên Mô|Huyện Kim Sơn|Huyện Yên Khánh";
//
//// Ninh Thuận
//s_a[41] = "Thành Phố Phan Rang|Huyện Bác Ái|Huyện Ninh Hải|Huyện Ninh Phước|Huyện Ninh Sơn|Huyện Thuận Nam|Huyện Thuận Bắc";
//
//// Phú Thọ
//s_a[42] = "Thành Phố Việt Trì|Thị Xã Phú Thọ|Huyện Phù Ninh|Huyện Đoan Hùng|Huyện Thanh Ba|Huyện Hạ Hòa|Huyện Lâm Thao|Huyện Cẩm Khê|Huyện Yên Lập|Huyện Tam Nông|Huyện Thanh Thủy|Huyện Thanh Sơn|Huyện Tân Sơn";
//
//// Quảng Bình
//s_a[43] = "Thành Phố Đồng Hới|Huyện Minh Hóa|Huyện Tuy Hóa|Huyện Quảng Trạch|Huyện Bố Trạch|Huyện Quảng Ninh|Huyện Lệ Thủy";
//
//// Quảng Nam
//s_a[44] = "Thành Phố Tam Kỳ|Thành Phố Hội An|Huyện Thăng Bình|Huyện Duy Xuyên|Huyện Điện Bàn|Huyện Đại Lộc|Huyện Quế Sơn|Huyện Hiệp Đức|Huyện Phước Sơn|Huyện Tiên Phước|Huyện Bắc Trà My|Huyện Nam Trà My|Huyện Nam Giang|Huyện Đông Giang|Huyện Tây Giang|Huyện Phú Ninh|Huyện Nông Sơn";
//
//// Quảng Ngãi
//s_a[45] = "Thành Phố Quảng Ngãi|Huyện Ba Tơ|Huyện Bình Sơn|Huyện Đức Phổ|Huyện Minh Long|Huyện Mộ Đức|Huyện Nghĩa Hành|Huyện Sơn Hà|Huyện Sơn Tây|Huyện Sơn Tịnh|Huyện Tây Trà|Huyện Trà Bồng|Huyện Tư Nghĩa|Huyện Lý Sơn";
//
//
//// Quảng Ninh
//s_a[46] = "Thành Phố Hạ Long|Thành Phố Móng Cái|Thành Phố Cẩm Phả|Thành Phố Uông Bí|Thị Xã Quảng Yên|Huyện Vân Đồn|Huyện Hoành Bồ|Huyện Hải Hà|Huyện Đầm Hà|Huyện Đông Triều|Huyện Tiên Yên|Huyện Bình Liêu|Huyện Yên Hưng|Huyện Cô Tô|Huyện Ba Chẽ";
//
//
//// Quảng Trị
//s_a[47] = "Thành Phố Đông Hà|Thị Xã Quảng Trị|Huyện Đakrông|Huyện Cam Lộ|Huyện Gio Linh|Huyện Hải Lăng|Huyện Hướng Hoá|Huyện Vĩnh Linh|Huyện Triệu Phong|Huyện Cồn Cỏ";
//
//// Sóc Trăng
//s_a[48] = "Thành Phố Sóc Trăng|Thị Xã Vĩnh Châu|Huyện Long Phú|Huyện Mỹ Xuyên|Huyện Thạnh Trị|Huyện Ngã Năm|Huyện Mỹ Tú|Huyện Kế Sách|Huyện Cù Lao Dung|Huyện Trần Đề|Huyện Châu Thành";
//
//// Sơn La
//s_a[49] = "Thành Phố Sơn La|Huyện Mai Sơn|Huyện Yên Châu|Huyện Mộc Châu|Huyện Mường La|Huyện Phù Yên|Huyện Quỳnh Nhai|Huyện Sông Mã|Huyện Sốp Cộp|Huyện Thuận Châu|Huyện Bắc Yên";
//
//// Tây Ninh
//s_a[50] = "Thị Xã Tây Ninh|Huyện Hòa Thành|Huyện Gò Dầu|Huyện Trảng Bàng|Huyện Bến Cầu|Huyện Châu Thành|Huyện Tân Biên|Huyện Dương Minh Châu|Huyện Tân Châu";
//
//// Thái Bình
//s_a[51] = "Thành Phố Thái Bình|Huyện Vũ Thư|Huyện Tiền Hải|Huyện Kiến Xương|Huyện Thái Thụy|Huyện Đông Hưng|Huyện Quỳnh Phụ|Huyện Hưng Hà";
//
//// Thái Nguyên
//s_a[52] = "Thành Phố Thái Nguyên|Thị Xã Sông Công|Huyện Đại Từ|Huyện Định Hóa|Huyện Đồng Hỷ|Huyện Phổ Yên|Huyện Phú Bình|Huyện Phú Lương|Huyện Võ Nhai";
//
//// Thanh Hóa
//s_a[53] = "Thành Phố Thanh Hóa|Thị Xã Bỉm Sơn|Thị Xã Sầm Sơn|Huyện Bá Thước|Huyện Cẩm Thủy|Huyện Đông Sơn|Huyện Hà Trung|Huyện Hậu Lộc|Huyện Hoằng Hóa|Huyện Lang Chánh|Huyện Mường Lát|Huyện Nga Sơn|Huyện Ngọc Lặc|Huyện Như Thanh|Huyện Như Xuân|Huyện Nông Cống|Huyện Quan Hóa|Huyện Quan Sơn|Huyện Quảng Xương|Huyện Thạch Thành|Huyện Thiệu Hóa|Huyện Thọ Xuân|Huyện Thường Xuân|Huyện Tỉnh Gia|Huyện Triệu Sơn|Huyện Vĩnh Lộc|Huyện Yên Định";
//
//// Thừa Thiên Huế
//s_a[54] = "Thành Phố Huế|Thị Xã Hương Thủy|Thị Xã Hương Trà|Huyện Phong Điền|Huyện Quảng Điền|Huyện Phú Vang|Huyện Phú Lộc|Huyện Nam Đông|Huyện A Lưới";
//
//// Tiền Giang
//s_a[55] = "Thành Phố Mỹ Tho|Thị Xã Gò Công|Huyện Cái Bè|Huyện Cai Lậy|Huyện Châu Thành|Huyện Chợ Gạo|Huyện Gò Công Tây|Huyện Gò Công Đông|Huyện Tân Phước|Huyện Tân Phú Đông";
//
//// Trà Vinh
//s_a[56] = "Thành Phố Trà Vinh|Huyện Càng Long|Huyện Tiểu Cần|Huyện Cầu Kè|Huyện Trà Cú|Huyện Châu Thành|Huyện Cầu Ngang|Huyện Duyên Hải";
//
//// Tuyên Quang
//s_a[57] = "Thành Phố Tuyên Quang|Huyện Na Hang|Huyện Chiêm Hoá|Huyện Hàm Yên|Huyện Yên Sơn|Huyện Sơn Dương|Huyện Lâm Bình";
//
//// Vĩnh Long
//s_a[58] = "Thành Phố Vĩnh Long|Huyện Bình Minh|Huyện Bình Tân|Huyện Tam Bình|Huyện Long Hồ|Huyện Mang Thít|Huyện Vũng Liêm|Huyện Trà Ôn";
//
//// Vĩnh Phúc
//s_a[59] = "Thành Phố Vĩnh Yên|Thị Xã Phúc Yên|Huyện Lập Thạch|Huyện Bình Xuyên|Huyện Mê Linh|Huyện Vĩnh Tường|Huyện Tam Đảo|Huyện Yên Lạc|Huyện Tam Dương|Huyện Sông Lô";
//
//// Yên Bái
//s_a[60] = "Thành Phố Yên Bái|Thị Xã Nghĩa Lộ|Huyện Yên Bình|Huyện Lục Yên|Huyện Trấn Yên|Huyện Văn Yên|Huyện Văn Chấn|Huyện Trạm Tấu|Huyện Mù Cang Chải";
//
//// Phú Yên
//s_a[61] = "Thành Phố Tuy Hòa|Thị Xã Sông Cầu|Huyện Đông Hòa|Huyện Tây Hòa|Huyện Tuy An|Huyện Sông Cầu|Huyện Đồng Xuân|Huyện Sơn Hoà||Huyện Sông Hinh|Huyện Phú Hoà";
//
//// Cần Thơ
//s_a[62] = "Quận Ninh Kiều|Quận Cái Răng|Quận Bình Thủy|Quận Ô Môn|Quận Thốt Nốt|Huyện Cờ Đỏ|Huyện Phong Điền|Huyện Vĩnh Thạnh|Huyện Thới Lai";
//
//// Đà Nẵng
//s_a[63] = "Thành Phố Đà Nẵng|Quận Hải Châu|Quận Thanh Khê|Quận Sơn Trà|Quận Ngũ Hành Sơn|Quận Liên Chiểu|Quận Cẩm Lệ|Huyện Hòa Vang|Huyện Hoàng Sa";
//
var address_auto_filter = '';
var address_city = '';
var address_state = '';
var address_town = '';
function populateStates(cityElementId, stateElementId, townElementId) {

    var city_id = document.getElementById(cityElementId).value;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option("--Chọn quận / huyện--", '-1');
    stateElement.selectedIndex = 0;

//    var state_arr = s_a[selectedCityIndex].split("|");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_state',
        data: {city_id: city_id}
    }).done(function(data) {
        var stateArr = data;
        for (var i = 0; i < stateArr.length; i++) {
            stateElement.options[stateElement.length] = new Option(stateArr[i].name, stateArr[i].state_id);
        }
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    if (stateElementId) {
        stateElement.onchange = function() {
            populateTowns(cityElementId, stateElementId, townElementId);
            if ($('#state option:selected').val() != -1) {
                address_state = $('#state option:selected').text();
                address_auto_filter = address_state + ", " + address_city;
                $('#address').val(address_auto_filter);
            } else {
                address_auto_filter = address_city;
                $('#address').val(address_auto_filter);
            }
        };
    }
}


function populateCities(cityElementId, stateElementId, townElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var cityElement = document.getElementById(cityElementId);
    cityElement.length = 0;
    cityElement.options[0] = new Option("--Chọn tỉnh / thành phố--", '-1');
    cityElement.selectedIndex = 0;
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_city',
    }).done(function(data) {
        var cityArr = data;
        for (var i = 0; i < cityArr.length; i++) {
            cityElement.options[cityElement.length] = new Option(cityArr[i].name, cityArr[i].city_id);
        }
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    // Assigned all cities. Now assign event listener for the states.

    if (stateElementId) {
        cityElement.onchange = function() {
            populateStates(cityElementId, stateElementId, townElementId);
            if ($('#city option:selected').val() != -1) {
                address_city = $('#city option:selected').text();
                address_auto_filter = address_city;
                $('#address').val(address_auto_filter);
            } else {
                address_auto_filter = '';
                $('#address').val(address_auto_filter);
            }
        };
    }
}
function populateTowns(cityElementId, stateElementId, townElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var city_id = document.getElementById(cityElementId).value;
    var state_id = document.getElementById(stateElementId).value;
    var townElement = document.getElementById(townElementId);

    townElement.length = 0; // Fixed by Julian Woods
    townElement.options[0] = new Option('--Chọn phường / xã--', '-1');
    townElement.selectedIndex = 0;
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_town',
        data: {city_id: city_id, state_id: state_id}
    }).done(function(data) {
        var townArr = data;
        for (var i = 0; i < townArr.length; i++) {
            townElement.options[townElement.length] = new Option(townArr[i], i + 1);
        }
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    if (townElementId) {
        townElement.onchange = function() {
            if ($('#town option:selected').val() != -1) {

                address_town = $('#town option:selected').text();
                address_auto_filter = address_town + ', ' + address_state + ", " + address_city;
                $('#address').val(address_auto_filter);
            } else {
                address_auto_filter = address_state + ", " + address_city;
                $('#address').val(address_auto_filter);
            }
        };
    }
}
function populateTypeItemNews(typeNewsElementId, itemNewsElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var type_id = document.getElementById(typeNewsElementId).value;
    var itemNewsElement = document.getElementById(itemNewsElementId);
    itemNewsElement.length = 0; // Fixed by Julian Woods
    itemNewsElement.options[0] = new Option('--Chọn danh mục tin tức nhỏ', '-1');
    itemNewsElement.selectedIndex = 0;
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_type_item_news',
        data: { type_id: type_id }
    }).done(function(data) {
        var typeItemArr = data;
        for (var i = 0; i < typeItemArr.length; i++) {
            itemNewsElement.options[itemNewsElement.length] = new Option(typeItemArr[i].title, typeItemArr[i].type_item_id);
        }
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
}
function populateTypeNews(typeNewsElementId, itemNewsElementId) {
    var typeNewsElement = document.getElementById(typeNewsElementId);
    typeNewsElement.length = 0; // Fixed by Julian Woods
    typeNewsElement.options[0] = new Option('--Chọn danh mục tin tức lớn', '-1');
    typeNewsElement.selectedIndex = 0;
    console.log('ok');
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_type_news',
    }).done(function(data) {
        var typeArr = data;
        for (var i = 0; i < typeArr.length; i++) {
            typeNewsElement.options[typeNewsElement.length] = new Option(typeArr[i].title, typeArr[i].type_id);
        }
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    if (itemNewsElementId) {
        typeNewsElement.onchange = function() {
            populateTypeItemNews(typeNewsElementId, itemNewsElementId);
        };
    }
}