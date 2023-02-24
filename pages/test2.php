<br>
   <div class="container">
   <div class="row">
    <div class="col-md-12">
        <div id="contain_map">
          <div id="map_canvas"></div>

        </div>     
        </div>
    </div>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>   
<script type="text/javascript">
  
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
 
var polygon = [];
var marker=[];
var infowindow=[]; 
 




var polygonOptions_out = {
  strokeColor: '#FF0000',
  geodesic:true,
  strokeOpacity: 1.0,
  strokeWeight: 3,
  fillColor: '#FF0000',
  fillOpacity: 0.35   
}
// กำหนด style ของ polygon กรณีเมาส์อยู่ด้านบน
var polygonOptions_over = {
  strokeColor: '#008000',
  geodesic:true,
  strokeOpacity: 1.0,
  strokeWeight: 3,
  fillColor: '#008000',
  fillOpacity: 0.35   
}
// กำหนด style object เป็น array 
var polygonOptions = [polygonOptions_out,polygonOptions_over];
 
function initialize() { // ฟังก์ชันแสดงแผนที่
    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
    // กำหนดจุดเริ่มต้นของแผนที่
    var my_Latlng  = new GGM.LatLng(8.0812489,98.8673154);
    var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
    // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
    var my_DivObj=$("#map_canvas")[0]; 
    // กำหนด Option ของแผนที่
    var myOptions = {
        zoom: 13, // กำหนดขนาดการ zoom
        center: my_Latlng , // กำหนดจุดกึ่งกลาง
        mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
    };
    map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
 
    // เพิ่มฟังก์ชั่นสำหรับหาตำแหน่งตรงกลางของพื้นที่ polygon
    GGM.Polygon.prototype.my_getBounds=function(){
        var bounds = new google.maps.LatLngBounds()
        this.getPath().forEach(function(element,index){bounds.extend(element)})
        return bounds
    }
 
  
}
$(function(){
    // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
    // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
    // v=3.2&sensor=false&language=th&callback=initialize
    //  v เวอร์ชัน่ 3.2
    //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
    //  language ภาษา th ,en เป็นต้น
    //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
    $("<script/>", {  
      "type": "text/javascript",  
      src: "//maps.google.com/maps/api/js?key=AIzaSyDh5u_5MGZbFpzKlgrG2RCOiwaX1bchfZA&language=th&region=TH&v=3.2&sensor=false&callback=initialize" 
    }).appendTo("body");        
});
</script>      