function euro_dollarkoers(){
    return(1.36);
}
function dollar_eurokoers(){
    return(0.74);
}
function euro_roebelkoers(){
    return(48.40);
}
function roebel_eurokoers(){
    return(0.02);
}


function exchange(bedrag, conversie){
    if(conversie == 'dollar_euro'){
        return bedrag + ' dollar voor ' + (bedrag * dollar_eurokoers().toFixed(2)) + ' euro';
    }
    if (conversie == 'euro_dollar'){
        return bedrag + ' euro voor ' + (bedrag * euro_dollarkoers().toFixed(2)) + ' dollar';
    }
    if (conversie == 'ruble_euro'){
        return bedrag + ' roebel voor ' + (bedrag * roebel_eurokoers().toFixed(2)) + ' euro';
    }
    if (conversie == 'euro_ruble'){
        return bedrag + ' euro voor ' + (bedrag * euro_roebelkoers().toFixed(2)) + ' roebel';
    }
}
