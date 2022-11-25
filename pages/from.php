<!DOCTYPE html>
<html>
    <body>   
        <select name="from_name" id="from" onchange="ChangefromList()" > 
                <option value="">-- Chọn quận --</option>
                <option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
                <option value="Quận Hải Châu">Quận Hải Châu</option>
                <option value="Quận Liên Chiểu">Quận Liên Chiểu</option> 
                <option value="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</option> 
                <option value="Quận Sơn Trà">Quận Sơn Trà</option> 
                <option value="Quận Thanh Khê">Quận Thanh Khê</option> 
                <option value="Huyện Hoàng Sa">Huyện Hoàng Sa</option> 
            </select> 
            <select name="from" id="ward">
                <option>-- Chọn phường --</option>
            </select>

        <script>
            var orderfrom = {};
            orderfrom['Quận Cẩm Lệ'] = ['Khuê Trung', 'Hòa Thọ Đông', 'Hòa Thọ Tây', 'Hòa An', 'Hòa Phát', 'Hòa Xuân'];
            orderfrom['Quận Hải Châu'] = ['Bình Hiên', 'Bình Thuận', 'Hải Châu I', 'Hải Châu II', 'Hòa Cường Bắc', 'Hòa Cường Nam', 'Hòa Thuận Đông', 'Hòa Thuận Tây', 'Nam Dương', 'Phước Ninh', 'Thạch Thang', 'Thanh Bình', 'Thuận Phước']
            orderfrom['Quận Liên Chiểu'] = ['Hòa Minh', 'Hòa Khánh Nam', 'Hoà Khánh Bắc', 'Hòa Hiệp Nam', 'Hoà Hiệp Bắc'];
            orderfrom['Quận Ngũ Hành Sơn'] = ['Mỹ An', 'Khuê Mỹ', 'Hòa Hải', 'Hòa Quý'];
            orderfrom['Quận Sơn Trà'] = ['Thọ Quang', 'Mân Thái', 'Phước Mỹ', 'An Hải Bắc', 'An Hải Đông','An Hải Tây'];
            orderfrom['Quận Thanh Khê'] = ['Vĩnh Trung', 'Tân Chính', 'Thạc Gián', 'Chính Gián', 'Tam Thuận','Xuân Hà','An Khê','Hoà Khê','Thanh Khê Đông','Thanh Khê Tây'];
            orderfrom['Huyện Hoàng Sa'] = [''];

            function ChangefromList() {
                var fromList = document.getElementById("from");
                var modelList = document.getElementById("ward");
                var selfrom = fromList.options[fromList.selectedIndex].value;
                while (modelList.options.length) {
                    modelList.remove(0);
                }
                var froms = orderfrom[selfrom];
                if (froms) {
                    var i;
                    for (i = 0; i < froms.length; i++) {
                        var from = new Option(froms[i], i);
                        modelList.options.add(from);
                    }
                }
            }
        </script>
    </body>
</html>