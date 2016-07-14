//map = {AndThen: "AndThen", Contact: "Contact", index:"index", Over: "Over",  Portfolio: "Portfolio", Tickets: "Tickets"};
//alert(window.location.pathname.replace(/nl|en|fr/,nl));
$("#nl a").attr("href",window.location.pathname.replace(/nl|en|fr/,"nl"));
$("#fr a").attr("href",window.location.pathname.replace(/nl|en|fr/,"fr"));
$("#en a").attr("href",window.location.pathname.replace(/nl|en|fr/,"en"));
