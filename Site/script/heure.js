var currentDate = new Date();
var hours = currentDate.getHours();

if(hours > 15 && hours < 22){//Display map of Rennes between 15h and 22h
    document.write('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42619.245700819425!2d-1.7234738227256436!3d48.115967534027185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2fa7d69085%3A0x40ca5cd36e4ab30!2sRennes!5e0!3m2!1sfr!2sfr!4v1518000282541" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
}else if(hours > 22 && hours < 24 || hours >= 0 && hours < 15){//Display map of Kerlann between 22h to 24h and 00h to 15h
    document.write('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21334.02715977471!2d-1.7427842216261487!3d48.057099040908916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1e4bf21dc1ff%3A0x75bad4cebe916dd5!2sKer+Lann!5e0!3m2!1sfr!2sfr!4v1518000057687" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
}else {//Else the following sentence is diplay
    document.write('<p>La carte ne peut être affiché mais le food-truck est disponible sur le campus de Kerlann le midi et sur Rennes le soir.</p>');
}