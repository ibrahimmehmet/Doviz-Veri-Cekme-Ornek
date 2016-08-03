function doviz(){
	[HttpGet]
	public ActionResult GetData()
	{
	     XDocument doc = XDocument.Load("http://www.tcmb.gov.tr/kurlar/today.xml");
	     var dox = doc.Descendants()
	         .Where(r => r.Name == "Currency")
	         .Select(r => new {
	             Isim = r.Element("Isim").Value,
	             Kod = r.Attribute("Kod").Value,
	             AlisKur = r.Element("BanknoteBuying").Value,
	             SatisKur = r.Element("BanknoteSelling").Value
	          });

	      return Json(dox, JsonRequestBehavior.AllowGet);
	}
}
function doviz_yaz(){
	alert("çalışıyor");
	var data=doviz();
	 $("#isim").text(data.Isim);
	 $("#kod").text(data.Kod);
	 $("#aliskur").text(data.AlisKur);
	 $("#satiskur").text(data.SatisKur);
}