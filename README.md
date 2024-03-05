.htaccess là một tệp cấu hình quan trọng trong Apache. Nó cho phép bạn tùy chỉnh và kiểm soát hành vi của máy chủ web (Server). 
 1. Điều hướng URL: Bạn có thể sử dụng .htaccess để chuyển hướng các URL từ một địa chỉ đến một địa chỉ khác. Ví dụ, bạn có thể chuyển hướng phiên bản “www” và phiên bản không 
    “www” của trang web về cùng một phiên bản.
    + khi server nhận được request từ phía client file .htaccess sẽ thay đổi đường dẫn URL (tạo đường dẫn ảo)
 2. Bảo mật : Sử dung tập tin .htaccess , có thể kiểm soát quyền truy cập vào tệp và thư mục trên máy chủ web
    bằng cách sử dụng các chỉ thị trong .htaccess  có thể xác định rằng chỉ những người dùng được ủy quyền mới có thể truy cập vào các phần cụ thể mà server mong muốn
    khi người dùng cố gắng truy cập vào thư mục được bảo vệ họ sẽ được yêu cầu cung cấp tên người dùng và mật khẩu
 3. Tùy chỉnh lỗi
    ErrorDocument 400 /errors/bad_request.html
    ErrorDocument 401 /errors/unauthorized.html
    ErrorDocument 403 /errors/forbidden.html
    ErrorDocument 404 /errors/not_found.html
    cErrorDocument 500 /errors/internal_server_error.html
 4. Chuyển đổi HTTP sang HTTPS : https là http security vì khi sử dung file .htaccess là file bảo mật dùng để kiểm soát cho nên khi sử dụng file .htaccess là tự động chuyển
    đổi http sang https   
