function populateCheckboxes() {
    for (let [key, value] of Object.entries(checkedArray)) {

      const element = document.getElementById(value);
      element.checked  =  true;
      keySearch = value.replaceAll(/[nm]?[0-9]*$/g, '');

      if (mapped.has(keySearch)) {
          element.value = mapped.get(keySearch);
          mapped.delete(keySearch);
      }
    }
  }

  populateCheckboxes();

mapped.forEach((val, key) => {

  console.log(val);
  const element = document.getElementById(key);
  if (element !== null) {
    element.value = val;
  }
});

function createDiv(inner, number) {
  createdDiv = document.createElement('div');
  createdDiv.innerHTML = '<p><strong>' + number + '.</strong> ' + inner + '</p>';
  return createdDiv;
}
//for recommendations
const patientAge = document.getElementById('leef');
if (patientAge.value > 50 && patientAge.value < 70) {
  div = document.createElement('div');
  div.innerHTML = '<p><strong>1. De adviesdosering van vitamine D is 10 microg per dag bij personen vanaf 50 jaar tot 70.</p></strong>';

  document.getElementById('recommendation').appendChild(div);

} else if(patientAge.value > 70) {
  div = document.createElement('div');
  div.innerHTML = '<p><strong>1. Vanaf 70 jaar geldt een advies om per dag 20 microg vitamine D in te nemen als suppletie.</strong></p>';

  document.getElementById('recommendation').appendChild(div);
}

if (document.getElementById('medic6').checked == true) {
  div = document.createElement('div');
  div.innerHTML = '<p><strong>6. Omdat is aangegeven dat er sprake is van medicatiegebruik kunt u door de volgende knop verwezen worden naar het farmacotherapeutisch kompas.</strong><a id="recommendedsite" href="https://www.farmacotherapeutischkompas.nl/">Farmacotherapeutisch Kompas</a></p>';
  document.getElementById('recommendation').appendChild(div);
}

function recommend(text, number) {
  divElem = createDiv(text, number);
  document.getElementById('recommendation').appendChild(divElem);
}

if (document.getElementById('was10').checked == true) {
  recommend('<strong>Omdat is aangegeven dat er sprake was van zenuwen kan er nagevraagd worden of er sprake is van stress</strong>. Er is een verband aangetoond tussen stress en parodontitis en ook acute necrotiserende ulceratieve gingivitis of parodontitis.', 10)
}

if (document.getElementById('zat11').checked == true) {
  recommend('<strong>Eventueel is navraag mogelijk naar depressiviteit</strong>. Depressie kan worden geassocieerd met ernstige parodontale aandoeningen en kan invloed hebben op de behandelresultaten.', 11);
}

if (document.getElementById('neer14').checked == true) {
  recommend('<strong>Eventueel is navraag mogelijk naar depressiviteit</strong>. Depressie kan worden geassocieerd met ernstige parodontale aandoeningen en kan invloed hebben op de behandelresultaten.', 14);
}

if (document.getElementById('geluk16').checked == true) {
  recommend('<strong>Eventueel is navraag mogelijk naar depressiviteit</strong>. Depressie kan worden geassocieerd met ernstige parodontale aandoeningen en kan invloed hebben op de behandelresultaten.', 16);
}

if (document.getElementById('vaak18').checked == true) {
  recommend('<strong>Eventueel is navraag mogelijk naar depressiviteit</strong>. Depressie kan worden geassocieerd met ernstige parodontale aandoeningen en kan invloed hebben op de behandelresultaten.', 18);
}

if (document.getElementById('meer19').checked == true) {
  recommend('<strong>Roken is geassocieerd met een verhoogde vatbaarheid voor parodontitis</strong>. Het roken van meer dan 10 sigaretten per dag geeft zes keer meer kans op tandvleesaandoeningen. Minder dan 10 sigaretten per dag drie keer meer kans op tandvleesaandoeningen.', 19);
}

if (document.getElementById('drinkt20').checked == true) {
  recommend('<strong>Alcohol gebruik is schadelijk voor het parodontium</strong>. Regelmatig alcoholgebruik heeft invloed op de effectiviteit van een behandeling.', 20);
}

if (document.getElementById('minimaaln24').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines D, B3, Omega 3 vetzuren/DHA en Eiwit inname.</strong>', 24);
}

if (document.getElementById('dagen25').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines D en E.</strong>', 25);
}

if (document.getElementById('maaktn26').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines E.</strong>', 26);
}

if (document.getElementById('handn27').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines E en Eiwit inname.</strong>', 27);
}

if (document.getElementById('bruinen28').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines E, B3 en B11.</strong>', 28);
}

if (document.getElementById('fruitn29').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines E en C.</strong>', 29);
}

if (document.getElementById('flinken30').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines E, B3, B11 en C.</strong>', 30);
}

if (document.getElementById('gevon31').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines B3, B11 en Eiwit inname.</strong>', 31);
}

if (document.getElementById('vlan32').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines B11 en Eiwit inname.</strong>', 32);
}

if (document.getElementById('wekeln33').checked == true) {
  recommend('<strong>Er zou sprake kunnen zijn van een mogelijk tekort in vitamines D en Eiwit inname.</strong>', 33);
}

//Disable form inputs

const disabled = document.querySelectorAll('input');

for (let i = 0; i < disabled.length; i++) {
  disabled[i].disabled = true;
}