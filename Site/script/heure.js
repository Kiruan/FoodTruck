var currentDate = new Date();
var hours = currentDate.getHours();

if(hours > 15 && hours < 22){//Display map of Rennes in place des lices between 15h and 22h
    document.write('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.85627683313!2d-1.6859209841311409!3d48.113008160850434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede3187408ae3%3A0x708b59776e7159f1!2sPlace+des+Lices%2C+35000+Rennes!5e0!3m2!1sfr!2sfr!4v1518032026511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
}else if(hours > 22 && hours < 24 || hours >= 0 && hours < 15){//Display map of Kerlann between 22h to 24h and 00h to 15h
    document.write('<iframe src="https://www.google.com/maps/embed?pb=!1m18<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.85627683313!2d-1.6859209841311409!3d48.113008160850434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede3187408ae3%3A0x708b59776e7159f1!2sPlace+des+Lices%2C+35000+Rennes!5e0!3m2!1sfr!2sfr!4v1518032026511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
}else {//Else the following sentence is diplay
    document.write('<p>La carte ne peut être affiché mais le food-truck est disponible sur le campus de Kerlann le midi et sur Rennes le soir.</p>');
}