
<!--THÔNG TIN PROJECT-->
<br>
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="assets/logo.png" alt="Logo" width="80" height="80">
  </a>
  <h1 align="center">TIỂU LUẬN</h1>
   <h3>Áp dụng Design Pattern vào ứng dụng</h3>
<br>

</div>
    <br>
    <br>
    <br>
    <br>
<p>
            <p style="line-height: 1.0" dir ="rtl">
                <i>Giảng viên:</i><b> Thầy Đặng Huỳnh Trung Tín</b>
            </p>
			  <p style="line-height: 1.0" dir ="rtl">
                <i>Người thực hiện:</i><b> Cao Thành Phát - 51800747</b>
            </p>
            <p style="line-height: 1.0" dir ="rtl">
                <b> Cao Thành Phát - 51800747</b>
            </p>
            <p style="line-height: 1.0" dir ="rtl">
                <b> Cao Thành Phát - 51800747</b>
            </p>
            <p style="line-height: 1.0" dir ="rtl">
                <b> Cao Thành Phát - 51800747</b>
            </p>
            </p>

</p>
<br>

<!-- MỤC LỤC -->
# Danh mục

  1. [Giới thiệu](#1-giới-thiệu)<br>
   
  2. [Yêu cầu:](#2-yêu-cầu) <br>
    2.1 [Hướng dẫn cài đặt VideoLibrary (Nuget Package) (*)](#hướng-dẫn-cài-đặt-videolibrary-nuget-package-)<br>
    
  3. [Cách thực thi ứng dụng:](#3-cách-thực-thi-ứng-dụng)<br>
    3.1 [Trực tiếp: (Sau khi tải về)](#trực-tiếp-sau-khi-tải-về)<br>
    3.2 [Gián tiếp: (GitHub)](#gián-tiếp-github)<br>
  4. [Kiến thức cơ bản:](#4-kiến-thức-cơ-bản)<br>
      4.1 [Builder Pattern](#builder-pattern)
        - [Giới thiệu](#giới-thiệu-builder-pattern)
        - [Lý do áp dụng](#lý-do-áp-dụng-builder-pattern)
        - [Thông tin ứng dụng Pattern](#thông-tin-ứng-dụng-builder-pattern)
        - [Folder Structure Builder pattern:](#folder-structure-builder-pattern)
        - [Kết quả triển khai](#kết-quả-triển-khai-builder-pattern)

      4.2 [Factory Method](#factory-method)
        - [Giới thiệu](#giới-thiệu-factory-method)
        - [Lý do áp dụng](#lý-do-áp-dụng-factory-method)
        - [Thông tin ứng dụng](#thông-tin-ứng-dụng-factory-method)
        - [Kết quả triển khai](#kết-quả-triển-khai-factory-method)

  5. [Thông tin người phát triển:](#5-thông-tin-người-phát-triển)


# 1. Giới thiệu
#### Mô tả :
  * Ecommerce-solution là dự án hỗ trợ các trang thương mại điện tử, quản lý sản phẩm, đơn hàng
  
#### Chức năng:

* Quản lý người dùng
* Quản lý sản phẩm
* Quản lý đơn hàng


<!-- YÊU CẦU PROJECT-->
# 2. Yêu cầu

* Java 8
* MySQL
* Apache Tomcat
* Git

# 3. Cách sử dụng:

#### Lấy code từ git

  `git clone https://github.com/TDTU-IT-DP/ecommerce-management`

`git checkout develop`

#### Chạy ứng dụng

`mvn install abcxyz`


#### API Collection

[Nhấn vào để tải](http.abcxyz)<br>

login vào tài khoản admin@tdtu/pass1245
<!-- GIỚI THIỆU, LÝ DO ÁP DỤNG PATTERN VÀO PROJECT-->

# 4. Kiến thức cơ bản

### Builder Pattern

#### Giới thiệu Builder Pattern

>''Builder is a creational design pattern that separate the construction of a complex object from its representation so that the same construction process can create different representations.

Builder pattern thuộc trong một những Creational pattern. Là mẫu thiết kế được tạo ra để xây dựng cho đối tượng phức tạp với nhiều tham số, phương thức. Bằng cách sử dụng đối tượng đơn giản, tiếp cận từng bước vào đối tượng phức tạp thông qua việc xây dựng đối tượng độc lập để cụ thể hóa đối tượng phức tạp.

#### Lý do áp dụng Builder Pattern

- Có quá nhiều tham số được truyền vào constructor của Object.
- Việc khởi tạo đối tượng với nhiều tham số khiến cả người lập trình trực tiếp cũng tốn nhiều thời gian và khó cho cả người kế thừa hệ thống.
- Giúp mọi người dễ dàng hiểu cách các parameters được truyền vào một constructor.

#### Thông tin ứng dụng Builder Pattern

 * Object **Product** là đối tượng khởi tạo trong **Builder pattern**. Tại đây, thay vì khởi tạo trực tiếp thì ta gọi thông qua Interface **ProductBuilder**. Tạo một lớp kế thừa  **ProductBuilder**, tại đây có tất cả các phương thức dùng để tạo ra parameters của  **Product**.
