$(document).ready(function()
{
	$(function () {
		$('[data-bs-toggle="tooltip"]').tooltip()
	  })
	$.ajax(
		{
			dataType:'json',
			url: "index.php/apiGetJsonMuseumData",
            success: function(jsonObj) 
    {
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj[0].title);
		$('#what_new_iced').html(jsonObj[0].title);
		$('#iced_latte_main_description').html(jsonObj[0].general_drink_description);
		$('#iced_latte_mini_description').html(jsonObj[0].general_drink_description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj[1].title);
		$('#what_new_hot').html(jsonObj[1].title);
		$('#latte_main_description').html(jsonObj[1].general_drink_description);
		$('#latte_mini_description').html(jsonObj[1].general_drink_description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj[2].title);
		$('#what_new_canned').html(jsonObj[2].title);
		$('#canned_latte_main_description').html(jsonObj[2].general_drink_description);
		$('#canned_latte_mini_description').html(jsonObj[2].general_drink_description);

		// Footer

		// Footer title sections
		$('#about_us_title').html(jsonObj[3].title);
		$('#nutrients_title').html(jsonObj[4].title);
		$('#giftings_title').html(jsonObj[5].title);
		$('#contact_us_title').html(jsonObj[6].title);
		$('#tac_title').html(jsonObj[7].title);

		// Footer body
		html_about_us = ""
		html_nutrients = ""
		html_giftings = ""
		html_contact_us = ""
		html_tac = ""
		// For loop to get all elements in JSON
		for (i=0; i<=4; i++)  
		{
			html_about_us += '<h6>' + jsonObj[3].items.split(",")[i] + '</h6>';
			html_nutrients += '<h6>' + jsonObj[4].items.split(",")[i] + '</h6>';
			html_giftings += '<h6>' + jsonObj[5].items.split(",")[i] + '</h6>';
			html_contact_us += '<h6>' + jsonObj[6].items.split(",")[i] + '</h6>';
			html_tac += '<h6>' + jsonObj[7].items.split(",")[i] + '</h6>';
		}
		$('#about_us_body').html(html_about_us);
		$('#nutrients_body').html(html_nutrients);
		$('#giftings_body').html(html_giftings);
		$('#contact_us_body').html(html_contact_us);
		$('#tac_body').html(html_tac);

		// x3d models

		// Iced Drinks
		$('#iced_latte_page_title').html(jsonObj[8].title);
		$('#iced_latte_page_slogan').html(jsonObj[8].slogan);
		$('#iced_latte_title').html(jsonObj[8].title_name);
		$('#drink_description_iced_latte').html(jsonObj[8].drink_description);

		$('#cold_brew_page_title').html(jsonObj[9].title);
		$('#cold_brew_page_slogan').html(jsonObj[9].slogan);
		$('#cold_brew_title').html(jsonObj[9].title_name);
		$('#drink_description_cold_brew').html(jsonObj[9].drink_description);

		$('#chai_iced_page_title').html(jsonObj[10].title);
		$('#chai_iced_page_slogan').html(jsonObj[10].slogan);
		$('#chai_iced_title').html(jsonObj[10].title_name);
		$('#drink_description_chai_iced').html(jsonObj[10].drink_description);
		
		// Hot Drinks
		$('#hot_latte_page_title').html(jsonObj[11].title);
		$('#hot_latte_page_slogan').html(jsonObj[11].slogan);
		$('#hot_latte_title').html(jsonObj[11].title_name);
		$('#drink_description_hot_latte').html(jsonObj[11].drink_description);
		
		$('#hot_chocolate_page_title').html(jsonObj[12].title);
		$('#hot_chocolate_page_slogan').html(jsonObj[12].slogan);
		$('#hot_chocolate_title').html(jsonObj[12].title_name);
		$('#drink_description_hot_chocolate').html(jsonObj[12].drink_description);

		$('#hot_mocha_page_title').html(jsonObj[13].title);
		$('#hot_mocha_page_slogan').html(jsonObj[13].slogan);
		$('#hot_mocha_title').html(jsonObj[13].title_name);
		$('#drink_description_hot_mocha').html(jsonObj[13].drink_description);

		// Canned Drinks
		$('#canned_latte_page_title').html(jsonObj[14].title);
		$('#canned_latte_page_slogan').html(jsonObj[14].slogan);
		$('#canned_latte_title').html(jsonObj[14].title_name);
		$('#drink_description_canned_latte').html(jsonObj[14].drink_description);

		$('#canned_caramel_page_title').html(jsonObj[15].title);
		$('#canned_caramel_page_slogan').html(jsonObj[15].slogan);
		$('#canned_caramel_title').html(jsonObj[15].title_name);
		$('#drink_description_canned_caramel').html(jsonObj[15].drink_description);

		$('#canned_americano_page_title').html(jsonObj[16].title);
		$('#canned_americano_page_slogan').html(jsonObj[16].slogan);
		$('#canned_americano_title').html(jsonObj[16].title_name);
		$('#drink_description_canned_americano').html(jsonObj[16].drink_description);

		// Modals
		$('#modal_title_about').html(jsonObj[17].title);
		$('#modal_body_about').html(jsonObj[17].Modal_description);

		$('#modal_title_github').html(jsonObj[18].title);
		$('#modal_body_github').html(jsonObj[18].Modal_description);

		// Accordion
		$('#accordion_button_1').html(jsonObj[19].title);
		$('#accordion_explanation_1').html(jsonObj[19].explanation);

		$('#accordion_button_2').html(jsonObj[20].title);
		$('#accordion_explanation_2').html(jsonObj[20].explanation);

		$('#accordion_button_3').html(jsonObj[21].title);
		$('#accordion_explanation_3').html(jsonObj[21].explanation);

		// Gallery
		html="";
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[21+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[21+i].title+'</h5>'
        	html+='<p>'+jsonObj[21+i].explanation+'</p></div></div>'
		}
		$('#carousel_first').html(html);

		html=""
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[24+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[24+i].title+'</h5>'
        	html+='<p>'+jsonObj[24+i].explanation+'</p></div></div>'
		}
		$('#carousel_second').html(html);

		html=""
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[27+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[27+i].title+'</h5>'
        	html+='<p>'+jsonObj[27+i].explanation+'</p></div></div>'
		}
		$('#carousel_third').html(html);
	}
    });
});