import java.io.IOException;
import java.lang.IndexOutOfBoundsException;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

public class HiroshimaWebsiteParser {
	
	public static void main(String args[])throws IOException{
	 
		 String[] url = {		 
				
				 "http://www.hiroshima-navi.or.jp/accommodation/131851_print.php"		 
				 // Please add your URL List
		 };
		
		 Document doc;
		 
		 for(int i = 0; i <=0 ; i++){     // Please change i<=  
			 
			 doc = Jsoup.connect(url[i]).get();
		 
		 
			 try{
			 Element title = doc.getElementById("name");
			 String Title = title.text(); 
			 System.out.println("Title : " +Title);
			 
			 }catch (NullPointerException e){
				
			 }
			 try{
				  
				 String title2 = doc.getElementById("main").select("h2").text();
				 String title3 = doc.getElementById("main").select("h1").text();
				  
				 System.out.println("--------------------------------" + "\n" +
						 "------------- "+ (i+1) +"  " + url[i] + "-------------------" + "\n" +
						 "--------------------------------" + "\n" +
						 			"Sub-Title : " + title2 + title3);
				 
				 }catch (NullPointerException e){
					 
				 }
		 
			 try{
				 Elements image1 = doc.getElementById("facilitiesPhoto31").select("img");	 	  
			 
				 String Image1 = image1.attr("src");
				 
				 System.out.println("Image 1 : " +Image1);
				 
			 }catch (NullPointerException e){
				 
			 }
				 
			 
		 	
			 try{
				 Elements image2 = doc.getElementById("facilitiesPhoto32").select("img");	 	  
			 
				 String Image2 = image2.attr("src");
				 
				 System.out.println("Image 2 : " +Image2);
				 
			 }catch (NullPointerException e){
				 
			 }
		 
			 try{
				 Elements image3 = doc.getElementById("facilitiesPhoto33").select("img");	 	  
			 
				 String Image3 = image3.attr("src");
				 
				 System.out.println("Image 3 : " +Image3);
				 
			 }catch (NullPointerException e){
				 
			 }
			 try{
				 Elements image1 = doc.getElementById("facilitiesPhoto1").select("img");	 	  
			 
				 String Image1 = image1.attr("src");
				 
				 System.out.println("Image 1 : " +Image1);
				 
			 }catch (NullPointerException e){
				 
			 }
				 
			 
		 	
			 try{
				 Elements image2 = doc.getElementById("facilitiesPhoto2").select("img");	 	  
			 
				 String Image2 = image2.attr("src");
				 
				 System.out.println("Image 2 : " +Image2);
				 
			 }catch (NullPointerException e){
				 
			 }
		 
			 try{
				 Elements image3 = doc.getElementById("facilitiesPhoto3").select("img");	 	  
			 
				 String Image3 = image3.attr("src");
				 
				 System.out.println("Image 3 : " +Image3);
				 
			 }catch (NullPointerException e){
				 
			 }
		 
			 
			 try{
				 
			 Element descri = doc.getElementById("editingArea");
			 String Description = descri.text(); 
			 System.out.println("description: " +Description);
			 }catch (NullPointerException e){
				 System.out.println("No description");
			 }
		 
			 
			 String item = "";
			 String value = "";
			 
			 try { 
				int j=0;
				while(j<6){ // j<10 for accommodations informations
					 item = doc.getElementsByTag("table").select("th").get(j).text();
					 value = doc.getElementsByTag("table").select("td").get(j).text();
					 // For Accommodations
					 // item = doc.getElementsByTag("table").select("tr").get(j).text();
					 // System.out.println(item);
					  
					 System.out.println(item + " : " +value);
					 j++;
				 }if(j++ == 4)
			         break;
				 
			 }
			 catch(IndexOutOfBoundsException e) { 
				 System.out.println("\n");
			 };
			 
			 try{
				 
				 Element latitude = doc.getElementById("lat"); 
				String lat = latitude.attr("value");
						 
				System.out.println("Latitude : " + lat);
				 }catch (NullPointerException e){
					 System.out.println("\n");
				 }
			 
			 try{
				 
				 Element longitude = doc.getElementById("lng"); 
				String lng = longitude.attr("value");
						
				System.out.println("Longitude: " +lng);
				System.out.println("\n");
				}catch (NullPointerException e){
					 
				 }	 
		 }
	}
}		
			 	






 
