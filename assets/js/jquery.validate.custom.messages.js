jQuery.extend(jQuery.validator.messages, {
	required: "Zorunlu alan. Lütfen boş bırakmayınız.",
	remote: "Lütfen bu alanı düzeltiniz.",
	email: "Lütfen geçerli bir email adresi giriniz.",
	url: "Lütfen geçerli bir url giriniz.",
	date: "Lütfen geçerli bir tarih giriniz.",
	dateISO: "Lütfen geçerli bir tarih (ISO) giriniz.",
	number: "Lütfen geçerli bir numara giriniz.",
	digits: "Lütfen sadece rakam giriniz.",
	creditcard: "Lütfen geçerli bir kredi kartı numarası giriniz..",
	equalTo: "Lütfen aynı değeri giriniz.",
	accept: "Lütfen geçerli uzantılı bir değer giriniz.",
	maxlength: jQuery.validator.format("Lütfen en fazla {0} karakter giriniz."),
	minlength: jQuery.validator.format("Lütfen en az {0} karakter giriniz."),
	rangelength: jQuery.validator.format("Lütfen {0} ve {1} karakter aralığında bir değer giriniz."),
	range: jQuery.validator.format("Lütfen {0} ve {1} aralığında bir değer giriniz."),
	max: jQuery.validator.format("Lütfen {0} değerine küçük veya eşit bir değer giriniz."),
	min: jQuery.validator.format("Lütfen {0} değerine büyük veya eşit bir değer giriniz.")
});