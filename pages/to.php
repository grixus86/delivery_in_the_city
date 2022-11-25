<!DOCTYPE html>
<html>
    <body>   
        <select name="to_name" id="to" onchange="ChangetoList()" > 
            <option value="">-- Chọn quận --</option>
            <option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
            <option value="Quận Hải Châu">Quận Hải Châu</option>
            <option value="Quận Liên Chiểu">Quận Liên Chiểu</option> 
            <option value="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</option> 
            <option value="Quận Sơn Trà">Quận Sơn Trà</option> 
            <option value="Quận Thanh Khê">Quận Thanh Khê</option> 
            <option value="Huyện Hoàng Sa">Huyện Hoàng Sa</option> 
        </select> 
        <select name="to" id="wardto">
            <option>-- Chọn phường --</option>
        </select>
        <script>
            var orderto = {};
            orderto['Quận Cẩm Lệ'] = ['Khuê Trung', 'Hòa Thọ Đông', 'Hòa Thọ Tây', 'Hòa An', 'Hòa Phát', 'Hòa Xuân'];
            orderto['Quận Hải Châu'] = ['Bình Hiên', 'Bình Thuận', 'Hải Châu I', 'Hải Châu II', 'Hòa Cường Bắc', 'Hòa Cường Nam', 'Hòa Thuận Đông', 'Hòa Thuận Tây', 'Nam Dương', 'Phước Ninh', 'Thạch Thang', 'Thanh Bình', 'Thuận Phước']
            orderto['Quận Liên Chiểu'] = ['Hòa Minh', 'Hòa Khánh Nam', 'Hoà Khánh Bắc', 'Hòa Hiệp Nam', 'Hoà Hiệp Bắc'];
            orderto['Quận Ngũ Hành Sơn'] = ['Mỹ An', 'Khuê Mỹ', 'Hòa Hải', 'Hòa Quý'];
            orderto['Quận Sơn Trà'] = ['Thọ Quang', 'Mân Thái', 'Phước Mỹ', 'An Hải Bắc', 'An Hải Đông', 'An Hải Tây'];
            orderto['Quận Thanh Khê'] = ['Vĩnh Trung', 'Tân Chính', 'Thạc Gián', 'Chính Gián', 'Tam Thuận', 'Xuân Hà', 'An Khê', 'Hoà Khê', 'Thanh Khê Đông', 'Thanh Khê Tây'];
            orderto['Huyện Hoàng Sa'] = [''];

            function ChangetoList() {
                var toList = document.getElementById("to");
                var modelList = document.getElementById("wardto");
                var selto = toList.options[toList.selectedIndex].value;
                while (modelList.options.length) {
                    modelList.remove(0);
                }
                var tos = orderto[selto];
                if (tos) {
                    var i;
                    for (i = 0; i < tos.length; i++) {
                        var to = new Option(tos[i], i);
                        modelList.options.add(to);
                    }
                }
            }
        </script>
    </body>

</html>