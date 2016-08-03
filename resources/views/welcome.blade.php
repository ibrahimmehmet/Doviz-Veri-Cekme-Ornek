<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title>Get Json Data</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<div>
    <div>
        {{ ($JsonData) }}
    </div>

    {{--<script>--}}
    {{--$(document).ready(function () {--}}
    {{--var   // url değişkenine json dosyamızın bulunduğu yeri yazıyoruz.--}}
    {{--$.getJSON(url, function (data)  // url  deki json getJSON komutuyla data değişkenine atıyoruzve bir fonsiyonda kullanıyoruz--}}
    {{--{--}}
    {{--for (var i = 0; i < data.length; i++) {  // gelen datamızın kaç elemanlı olduğunu bilmediğimiz için length komutu bize sayısını veriyor ve o kadar  döndürüyoruz--}}
    {{--if (data[i].enstituAdi == "Fen Bilimleri Enstitüsü")  // burası alıştırmamızın fonksiyonunu arttırmak için yazdım. gelen datadan belli şartı sağlayanları  listelemek için.  benim datamda toplamda 3 değer var ama listelediğinizde şartı  sağlayan sadece 2 data dönecektir.--}}
    {{--{--}}
    {{--document.write(data[i].ogrenciId + " " + data[i].ogrenciAdi + " " + data[i].ogrenciSoyadi + " " + data[i].okulAdi + " " + data[i].enstituAdi + "<br>");   //burada da ekrana şartı asağlayan verileri listeliyoruz. Verileri yazdırırken, verilerimiz satır satır okunur ve bu satırdaki her biri bir değişkene atanmıştır.  değişkenleri görmek için json dosyasını açıp bakabilirsiniz.--}}
    {{--}--}}
    {{--}--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
</div>
</body>

</html>