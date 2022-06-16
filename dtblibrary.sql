-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2022 lúc 08:45 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dtblibrary`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `phone`, `email`) VALUES
(1, 'admin1', '12345678', 374423375, 'lbducanhb1ts419@gmail.com'),
(2, 'admin', '$2y$10$Gy3xipJ1z3sr/497AEY3guKCqC3hypyf9zFWVBRc8S0/6vSZkPRya', 0, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` varchar(250) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `image`, `description`) VALUES
(1, 'Phạm Văn Hiệp', 'images\\author\\nam.png', ''),
(2, 'Cao Thị Thanh', 'images\\author\\nu.png', ''),
(3, 'Đặng Văn Lương', 'images\\author\\nam.png', ''),
(4, 'Covey, Stephen R.', 'images\\author\\nam.png', ''),
(5, 'Từ Quang Phương', 'images\\author\\nam.png', ''),
(6, 'Đặng Ngọc Hùng', 'images\\author\\nam.png', ''),
(7, 'Đỗ Thị Tâm ', 'images\\author\\nu.png', ''),
(8, 'Đỗ Ngọc Sơn', 'images\\author\\nam.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `book_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `publisher` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `uploaded_time` datetime NOT NULL,
  `total_qty` int(11) NOT NULL,
  `current_qty` int(11) NOT NULL,
  `nganh_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `image`, `book_name`, `publisher`, `description`, `uploaded_time`, `total_qty`, `current_qty`, `nganh_id`, `author_id`) VALUES
(1, 'sach03.jpg', 'Nghệ thuật lãnh đạo', 'Tổng hợp Tp. Hồ CHí ', 'Cuốn sách Nghệ thuật lãnh đạo theo nguyên tắc sẽ giúp bạn giải quyết những nghịch lý sau:\r\n\r\n+ Làm thế nào để đạt được và duy trì sự cân bằng giữa công viêc với gia đình, giữa nghề nghiệp với các cuộc sống cá nhân dưới áp lực và khủng hoảng thường xuyên?\r\n\r\n+ Làm thế nào giải phóng tính sáng tạo, tài năng và sức mạnh hầu hết đội ngũ lao động hiện nay?\r\n\r\n+ Làm thế nào để xây dựng nột văn hóa đổi mới, linh hoạt mà vẫn duy trì được tính ổn định và an toàn của tổ chức?\r\n\r\n+ Làm thế nào gắn kết con người và văn hóa với chiến lược để mọi người đều tận tâm với chiến lược?\r\n\r\n+ Cùng nhiều vấn đề đáng quan tâm khác?', '2022-05-19 09:49:06', 20, 5, 4, 4),
(2, 'sach05.jpg', 'Giáo trình kế toán quản trị', 'Thống kê', 'Nội dung của cuốn sách gồm các chương:\r\n\r\n+ Chương 1: Tổng quan về kế toán quản trị\r\n\r\n+ Chương 2: Chi phí và phân loại chi phí trong kế toán quản trị\r\n\r\n+ Chương 3: Các phương pháp xác định chi phí và giá thành\r\n\r\n+ Chương 4: Phân tích mối quan hệ chi phi-khối lượng-lợi nhuận\r\n\r\n+ Chương 5: Định mức chi phí và dự toán ngân sách hoạt động sản xuất kinh doanh', '2013-05-15 15:11:27', 32, 12, 6, 6),
(3, 'sach04.jpg', 'Giáo trình lập trình Windows', 'Đại học Công nghiệp ', 'Giáo trình Windows được biên soạn nhằm mục đích cung cấp những kiến thức cơ bản về lập trình trong môi trường .Net của MicroSoft. Với giáo trình này, sinh viên sẽ có được các kiến thức về lập trình để tạo ra các ứng dụng khác nhau, bao gồm: ứng dụng dòng lệnh (ConsoleApplication), ứng dụng giao diện Windows (Windows Application) sao cho chương trình dễ sử dụng, tính thực tiễn cao, giao diện thân thiện.\r\n\r\nNội dung giáo trình gồm 5 chương:\r\n\r\nChương 1: VISUAL STUDIO và .NET FRAMEWORK\r\n\r\nChương 2: Lập trình C# căn bản\r\n\r\nChương 3: Lập trình hướng đối tượng trong C#\r\n\r\nChương 4: Lập trình Windows Form\r\n\r\nChương 5: Tương tác cơ sở dữ liệu\r\n\r\n', '2015-01-14 15:09:16', 113, 20, 3, 8),
(4, 'sach01.jpg', 'Giáo trình Mạng máy tính', 'Thanh Niên', 'Nội dung được trình bày trong các chương mục một cách rõ ràng, logic, giáo trình này sẽ giúp sinh viên nhanh chóng tiếp thu được các kiến thức cơ bản về mạng máy tính, từ đó thiết kế, xây dựng một hệ thống mạng cho các phòng thí nghiệm thực hành, các văn phòng làm việc của các cơ quan, tổ chức...\r\n\r\nNội dung giáo trình gồm 5 chương:\r\n\r\nChương 1: Tổng quan về mạng máy tính\r\n\r\nChương 2: Mô hình tham chiếu OIS và các chuẩn mạng\r\n\r\nChương 3: Các giao thức truyền thông\r\n\r\nChương 4: Mạng cục bộ\r\n\r\nChương 5: Giới thiệu hệ điều hành mạng Windows Server', '2019-05-22 00:00:00', 100, 70, 3, 2),
(5, 'sach06.jpg', 'Giáo trình kinh tế đầu tư', 'Đại học KTQD', 'Giáo trình có kết cấu 10 chương như sau:\r\n\r\n- Chương 1: Tổng quan về đầu tư và môn học kinh tế đầu tư.\r\n\r\n- Chương 2: Những vấn đề cơ bản của đầu tư phát triển.\r\n\r\n- Chương 3: Nguồn vốn đầu tư.\r\n\r\n- Chương 4: Quản lý nhà nước và kế hoạch hóa đầu tư.\r\n\r\n- Chương 5: Môi trường đầu tư.\r\n\r\n- Chương 6: Đầu tư công.\r\n\r\n- Chương 7: Kết quả và hiệu quả của đầu tư phát triển.\r\n\r\n- Chương 8: Đầu tư quốc tế.\r\n\r\n- Chương 9: Đầu tư phát triển trong doanh nghiệp.\r\n\r\n- Chương 10: Quản lý đầu tư theo dự án.', '2014-07-17 15:11:27', 21, 5, 5, 5),
(7, 'sach07.jpg', 'Giáo trình Công nghệ XML', 'Giáo dục Việt Nam', 'Giáo trình Công nghệ XML giúp bạn đọc có kiến thức nền tảng về công nghệ XML các ứng dụng của XML để xây dựng các ứng dụng thực tế. Giáo trình này cung cấp cho bạn đọc kiến thức từ cơ bản cho đến chuyên sâu về công nghệ XML\r\n\r\nGiáo trình này gồm 5 chương:\r\n\r\nChương 1: Tổng quan về XML\r\n\r\nChương 2: Định nghĩa tài liệu kiểu và không gian tên\r\n\r\nChương 3: Trình bày tài liệu XML sử dụng CSS và XSL\r\n\r\nChương 4: Mô hình đối tượng cơ bản.\r\n\r\nChương 5: Lược đồ. Nội dung của chương trình bày về các lược đồ XML và tính năng của nó trong việc xây dựng cấu trúc của tài liệu XML', '2013-04-24 15:16:45', 40, 20, 3, 7),
(8, 'sach02.jpg', 'Giáo trình nguyên lý thống kê', 'Thống Kê', 'Trong các cuộc tiếp xúc về thương mại, kinh tế, giáo dục và chính sách xã hội...mọi người đều minh chứng bẵng dữ liệu. Hiểu biết về thống kê giúp chúng ta chắt lọc những thông tin có nghĩa trong dòng lũ của dữ liệu để ra các quyết định chính xác trong điều kiện không chắc chắn\r\nNội dung giáo trình hướng đến tính khoa học, cơ bản và hội nhập. Giáo trình gồm 8 chương:\r\n\r\n+ Chương 1: Những vấn đề chung về thống kê.\r\n\r\n+ Chương 2: Điều tra thống kê.\r\n\r\n+ Chương 3: Tổng hợp thống kê.\r\n\r\n+ Chương 4: Các mức độ của hiện tượng kinh tế - xã hội.\r\n\r\n+ Chương 5: Hồi quy và tương quan.\r\n\r\nChương 6: Dãy số thời gian.\r\n\r\n+ Chương 7: Chỉ số.\r\n\r\n+ Chương 8: Điều tra chọn mẫu', '2014-02-06 09:32:46', 50, 12, 4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_borrow`
--

CREATE TABLE `book_borrow` (
  `borrow_id` int(11) NOT NULL,
  `book_copy_id` int(11) NOT NULL,
  `borrow_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `deadline` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_copy`
--

CREATE TABLE `book_copy` (
  `bcopy_id` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `nganh_id` int(11) NOT NULL,
  `nganh_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`nganh_id`, `nganh_name`, `creation_date`) VALUES
(3, 'Công Nghệ Thông Tin', '0000-00-00 00:00:00'),
(4, 'Quản trị nhân lực', '0000-00-00 00:00:00'),
(5, 'Quản lý kinh doanh', '0000-00-00 00:00:00'),
(6, 'Kế toán - Kiểm toán', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(30) COLLATE utf8_bin NOT NULL,
  `class` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `class`, `phone`, `email`, `avatar`) VALUES
(2, 'Đức Anh', '123133', '2143242412', 'qweqeqw@gmail.com', 'imag-01.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `maDanhMuc` (`nganh_id`),
  ADD KEY `maTacGia` (`author_id`);

--
-- Chỉ mục cho bảng `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `maBanDoc` (`user_id`),
  ADD KEY `book_copy_id` (`book_copy_id`);

--
-- Chỉ mục cho bảng `book_copy`
--
ALTER TABLE `book_copy`
  ADD PRIMARY KEY (`bcopy_id`),
  ADD KEY `maSach` (`book_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`nganh_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `book_borrow`
--
ALTER TABLE `book_borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `nganh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`nganh_id`) REFERENCES `category` (`nganh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Các ràng buộc cho bảng `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD CONSTRAINT `book_borrow_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_borrow_ibfk_3` FOREIGN KEY (`book_copy_id`) REFERENCES `book_copy` (`bcopy_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `book_copy`
--
ALTER TABLE `book_copy`
  ADD CONSTRAINT `book_copy_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
